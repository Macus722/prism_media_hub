
import os
from PIL import Image

def check_transparency(filepath):
    try:
        img = Image.open(filepath)
        if img.mode in ('RGBA', 'LA') or (img.mode == 'P' and 'transparency' in img.info):
            # Check if it actually has transparent pixels
            extrema = img.getextrema()
            if img.mode == 'RGBA':
                alpha_extrema = extrema[3]
                if alpha_extrema[0] < 255:
                    return True
            elif img.mode == 'LA':
                alpha_extrema = extrema[1]
                if alpha_extrema[0] < 255:
                    return True
            # For P mode, it's a bit more complex, but usually presence of 'transparency' key is enough for simple check
            return True
        return False
    except Exception as e:
        return f"Error: {e}"

files_to_check = [
    "public/Images/prism_logo_transparent_final.png",
    "Prism Media_logo_FA/Prism Media_logo_FA/Prism Media_logo file_FA-01.png",
    "Prism Media_logo_FA/Prism Media_logo_FA/Prism Media_logo file_FA-02.png",
    "Prism Media_logo_FA/Prism Media_logo_FA/Prism Media_logo file_FA-03.png",
    "Prism Media_logo_FA/Prism Media_logo_FA/Prism Media_logo file_FA-04.png",
    "Prism Media_logo_FA/Prism Media_logo_FA/Prism Media_logo file_FA-05.png"
]

for f in files_to_check:
    if os.path.exists(f):
        is_transparent = check_transparency(f)
        print(f"{f}: {is_transparent}")
    else:
        print(f"{f}: Not found")
