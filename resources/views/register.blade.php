<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up Form</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="/welcome" method="GET">
        <label>First name:</label>  
        <br><br>
        <input type="text" name="first_name">
        <br><br>
        <label>Last name:</label>
        <br><br>
        <input type="text" name="last_name">
        <br><br>
        <label>Gender:</label>
        <br><br>
        <input type="radio" name="gender" value="Male" /> Male
        <br>
        <input type="radio" name="gender" value="Female" /> Female
        <br>
        <input type="radio" name="gender" value="Other" /> Other
        <br><br>
        <label>Nationality:</label>
        <br><br>
        <select name="Nationality">
            <option value="Indonesia">Indonesia</option>
        </select>
        <br><br>
        <label>Language Spoken:</label>
        <br>
        <input type="checkbox" name="language_spoken" value="Bahasa Indonesia" /> Bahasa Indonesia
        <br>
        <input type="checkbox" name="language_spoken" value="English" /> English
        <br>
        <input type="checkbox" name="language_spoken" value="Other" /> Other
        <br><br>    
        <label>Bio:</label>
        <br>
        <textarea name="bio" rows="6" cols="25"></textarea>
        <br><br>
        <button type="submit">Sign Up</button>
    </form>
</body>
</html>
