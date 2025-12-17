<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Registration Form</h1>
    <form action="insert.php" method="POST" enctype="multipart/form-data">

        <label>First Name</label>
        <input type="text" name="reg_fname"><br><br>

        <label>Email</label>
        <input type="email" name="reg_email"><br><br>

        <label>Password</label>
        <input type="password" name="reg_password"><br><br>

        <label>Confirm Password</label>
        <input type="password" name="reg_cpassword"><br><br>

        <!-- Gender Radio Button -->
        <label>Gender</label><br>
        <input type="radio" name="reg_gender" value="Male"> Male
        <input type="radio" name="reg_gender" value="Female"> Female
        <input type="radio" name="reg_gender" value="Other"> Other
        <br><br>

        <!-- Language Select Box -->
        <label>Language</label>
        <select name="reg_language">
            <option value="">-- Select Language --</option>
            <option value="English">English</option>
            <option value="Hindi">Hindi</option>
            <option value="Gujarati">Gujarati</option>
        </select>
        <br><br>

        <!-- Language Checkbox -->
        <label>Language</label><br>
        <input type="checkbox" name="reg_language" value="HTML"> HTML
        <input type="checkbox" name="reg_language" value="CSS"> CSS
        <input type="checkbox" name="reg_language" value="JS"> JS
        <br><br>

        <label for="">Photo</label>
        <input type="file" name="reg_img"><br><br>

        <input type="submit" name="reg_btn" value="Register">

    </form>
</body>

</html>
