<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>

<h1>Sign Up Form</h1>

<form action="/welcome" method="POST">
    <label>First name:</label><br>
    <input type="text" name="first_name"><br><br>

    <label>Last name:</label><br>
    <input type="text" name="last_name"><br><br>

    <label>Gender:</label><br>
    <input type="radio" name="gender"> Male<br>
    <input type="radio" name="gender"> Female<br>
    <input type="radio" name="gender"> Other<br><br>

    <label>Nationality:</label><br>
    <select>
        <option>Indonesian</option>
        <option>Other</option>
    </select><br><br>

    <label>Language Spoken:</label><br>
    <input type="checkbox"> Bahasa Indonesia<br>
    <input type="checkbox"> English<br>
    <input type="checkbox"> Other<br><br>

    <label>Bio:</label><br>
    <textarea rows="5" cols="30"></textarea><br><br>

    <button type="submit">Sign Up</button>
</form>

</body>
</html>
