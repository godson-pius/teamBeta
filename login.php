
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
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
            <?php
            if(isset($_GET['id'])){
                $id = $_GET['id'];

                if($id == 1){
                    ?>
                    <p>Web Design</p>
            <div class="svg2"></div>
            <p  class="price">&dollar;266.67/Semester</p>
            <div class="input">
                <input type="text" name="" id="" placeholder="Username Or Email"><br>
                <input type="password" name="" id="" placeholder="Password"><br>
                <div><span class="sign"> No Account Yet,</span><a href="signup.php">Sign Up</a></div>
                <button>Continue</button>
            </div>
                    <?php
                }elseif($id ==2){
                    ?>
                     <p>Ui/Ux</p>
            <div class="svg3"></div>
            <p  class="price">&dollar;200.00/Semester</p>
            <div class="input">
                <input type="text" name="" id="" placeholder="Username Or Email"><br>
                <input type="password" name="" id="" placeholder="Password"><br>
                <div><span class="sign"> No Account Yet,</span><a href="signup.php">Sign Up</a></div>
                <button>Continue</button>
            </div>
                    <?php
                }elseif($id == 3){
                    ?>
                     <p>Ccna</p>
            <div class="svg"></div>
            <p  class="price">&dollar;390.00/Semester</p>
            <div class="input">
                <input type="text" name="" id="" placeholder="Username Or Email"><br>
                <input type="password" name="" id="" placeholder="Password"><br>
                <div><span class="sign"> No Account Yet,</span><a href="signup.php">Sign Up</a></div>
                <button>Continue</button>
            </div>
                    <?php
                }
            }
            ?>
            
            
        </div>
    </section>
    
</body>
</html>