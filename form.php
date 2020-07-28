<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="form.css">
    <meta name="viewport" content="
    <link rel="stylesheet" type="text/css" href="ighub/form.css">
    <title>Signup</title>
</head>
<body>
    <div class="container">
        <div class="heading">
            <h2>IGHUB Form</h2>
        </div>
        <div class="form-data">
            <form action="form.php" method="POST" id="form" name="form" >
                <label for="fullname">Enter Fullname</label><br>
                <input type="text" id="name" name="fullname" placeholder="Fullname" required><br>
                <label for="number">Contact Number</label><br>
                <input type="tel" name="number" id="phone" placeholder="Phone number"><br>
                <label for="email">Email Address</label><br>
                <input type="email" name="email" id="email" placeholder="Email Address" required><br>
                <label for="password">Enter Password</label><br>
                <input type="password" name="password" id="password1" placeholder="Enter password" required><br>
                <input type="submit" name="submit" value="Sign"/>
            </form>
        </div>
    </div> 
</body>
</html>