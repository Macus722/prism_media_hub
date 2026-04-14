<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Success</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;700;900&family=Rajdhani:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Rajdhani', sans-serif;
            background-color: #221A31;
        }

        /* Custom swal font */
        .swal2-popup {
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.5) !important;
            border-radius: 1rem !important;
        }

        .swal2-title {
            font-family: 'Orbitron', sans-serif !important;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
    </style>
</head>

<body>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                title: 'Order Received!',
                text: 'Redirecting to WhatsApp to complete your order...',
                icon: 'success',
                background: '#221A31',
                color: '#fff',
                timer: 3000,
                timerProgressBar: true,
                showConfirmButton: false,
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading()
                }
            }).then(() => {
                window.location.href = '{!! $waUrl !!}';
            });
        });
    </script>
</body>

</html>