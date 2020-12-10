<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="css/sign.css">
    <link rel="stylesheet" href="fonts/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
</head>
<body>
    <section>
        <div class="img">
            <img src="images/1.webp">
        </div>
        <div class="content">
            <div class="logo"><a href=""><img src="images/logo.png" alt=""></a>
            
            </div>
            <form method="post" action="signup_handler.php" enctype="multipart/form-data">
            <div class="input">
            <div class="carrier"><i class="fa fa-user"></i><input type="text" name="fullname" id="fullname" placeholder="enter your fullname" required></div>
                <div class="carrier"><i class="fa fa-envelope"></i><input type="email" name="email" id="email" placeholder="Username Or Email" required></div>
                <div class="carrier"><i class="fa fa-lock"></i><input type="password" name="password" id="password" placeholder="Password" required></div>
                <div class="carrier"><i class="fa fa-lock"></i><input type="password" name="confpassword" id="password2" placeholder="Confirm Password" required></div>
                <div class="carrier2"><i class="fa fa-user"></i><input type="file" name="profile" class="inp" id="profile" placeholder="choose your photo" required></div>
                <input type="submit" value="SIGN UP" name="submit">
            </div>
            </form>
        </div>
    </section>

</body>
</html>