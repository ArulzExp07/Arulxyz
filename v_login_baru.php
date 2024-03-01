<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Popup Login Form Design | CodingNepal</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <d iv class="center">
        <input type="checkbox" id="show">
        <label for="show" class="show-btn">View Form</label>
        <div class="container">
            <label for="show" class="close-btn fas fa-times" title="close"></label>
            <div class="text">
                Login Form
            </div>
            <form action="m_login.php" method="post">
                <div class="data">
                    <label>Username</label>
                    <input type="text" name="username_login" required>
                </div>
                <div class="data">
                    <label>Password</label>
                    <input type="password" name="password_login" required>
                </div>

                <div class="btn">
                    <div class="inner"></div>
                    <button type="submit">login</button>
                </div>

            </form>
        </div>
        </div>
</body>

</html>