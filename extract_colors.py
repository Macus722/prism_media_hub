
from PIL import Image
from collections import Counter

def get_dominant_colors(image_path, num_colors=3):
    try:
        img = Image.open(image_path)
        img = img.convert("RGB")
        img = img.resize((150, 150))  # Resize for faster processing
        pixels = list(img.getdata())
        counts = Counter(pixels)
        common = counts.most_common(num_colors)
        
        hex_colors = []
        for color, count in common:
            hex_color = '#{:02x}{:02x}{:02x}'.format(*color)
            hex_colors.append((hex_color, count))
            
        return hex_colors
    except Exception as e:
        return str(e)

image_path = r"C:\Users\desmo\.cursor\projects\c-Users-desmo-Herd-prism-media-hub/assets/c__Users_desmo_AppData_Roaming_Cursor_User_workspaceStorage_f363933a2db79ecd9e0fd0b9ab54c676_images_Prism_Media_logo_file_FA-02-42f86316-9fc7-47e9-8e8d-8803e8084975.png"
colors = get_dominant_colors(image_path)
print(colors)
