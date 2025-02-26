<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../javascript/samplelog.css">
    <script src="jquery.js"></script>
</head>
<body>
    <div class="container">
        <form action="" id="form">
            <h1>Register</h1>
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username">
                <div class="error"></div>
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email">
                <div class="error"></div>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
                <div class="error"></div>
            </div>
            <div class="input-group">
                <label for="cpassword">Confirm Password</label>
                <input type="password" id="password" name="password">
                <div class="error"></div>
            </div>
            <button type="submit">Submit</button>
        </form>

    </div>
</body>
</html>