<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;
use App\Models\User;

class NetworkController extends Controller
{
    /**
     * Impersonate Super Admin via HMAC-signed URL
     * GET /system/auth/impersonate/{token}
     */
    public function impersonate(Request $request, $token)
    {
        // The 'signed' middleware already validates the URL signature

        // Find the Super Admin (User ID 1)
        $superAdmin = User::find(1);

        if (!$superAdmin) {
            abort(404, 'Super Admin not found.');
        }

        Auth::loginUsingId($superAdmin->id);

        return redirect('/admin');
    }

    /**
     * Handle remote commands from BrandThirty Master
     * POST /api/system/control
     */
    public function control(Request $request)
    {
        $command = $request->input('command');

        if ($command === 'toggle_module') {
            $key = $request->input('key');
            $value = $request->input('value');

            // CRITICAL: Prevent overriding the Design Preset remotely
            if ($key === 'design_preset') {
                return response()->json(['error' => 'Protected setting. Cannot be overwritten remotely.'], 403);
            }

            DB::table('settings')->updateOrInsert(
                ['key' => $key],
                ['value' => $value, 'updated_at' => now()]
            );

            return response()->json([
                'success' => true,
                'message' => "Module {$key} updated."
            ]);
        }

        if ($command === 'run_sync') {
            Artisan::call('migrate', ['--force' => true]);
            Artisan::call('optimize:clear');

            return response()->json([
                'success' => true,
                'message' => 'Sync commands executed successfully.'
            ]);
        }

        return response()->json(['error' => 'Invalid command.'], 400);
    }

    /**
     * Heartbeat endpoint
     * GET /api/health
     */
    public function health()
    {
        return response()->json([
            'status' => 'online',
            'site' => 'Prism Media Hub'
        ]);
    }
}
