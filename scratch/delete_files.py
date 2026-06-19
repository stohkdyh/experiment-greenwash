import os

files_to_delete = [
    r"c:\Users\ASUS\Herd\experiment-greenwash\app\Models\UserInfo.php",
    r"c:\Users\ASUS\Herd\experiment-greenwash\database\migrations\2024_05_27_124946_create_user_infos_table.php",
    r"c:\Users\ASUS\Herd\experiment-greenwash\app\Http\Controllers\UserInfoController.php"
]

for file in files_to_delete:
    if os.path.exists(file):
        os.remove(file)
        print(f"Deleted {file}")
    else:
        print(f"File not found: {file}")
