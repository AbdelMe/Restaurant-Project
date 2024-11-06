<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="UserStyle/login.css">
</head>

<body>
    <?php
            include ('connect.php');
            session_start();
    ?>

    <form method="post" class="login">
        <div class="login-box">
            <div class="login-header">
                <header>Login</header>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" name='email' value="<?=  @$_SESSION['email'] ?>"
                    placeholder="Email" autocomplete="off" required>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" name='pass' value="<?=  @$_SESSION['pass'] ?>"
                    placeholder="Password" autocomplete="off" required>
            </div>
            <div class="forgot">
                <section>
                    <input type="checkbox" id="check">
                    <label for="check">Remember me</label>
                </section>
                <section>
                    <a href="#">Forgot password</a>
                </section>
            </div>
            <div class="input-submit">
                <input class="submit-btn" type="submit" id="submit" name='login'>
                <label for="submit">Sign In</label>
            </div>
            <div class="sign-up-link">
                <p>Don't have account? <a href="signUp.php">Sign Up</a></p>
            </div>
        </div>
    </form>




    <?php
            include ('connect.php');
            // session_start();
            @$email = $_POST['email'];
            @$password = $_POST['pass'];
            @$login = $_POST['login'];


            if(isset($login)){
                if(!empty($email) && !empty($password)){
                    $E = $dbt->prepare('SELECT * from Clients where email=? and pass=?');
                    $E->execute(array($email,$password));
                    $p = $E->fetch();
                        if($E->rowCount() != 0){
                            $_SESSION['F_name'] = $p['F_name'];
                            $_SESSION['L_name'] = $p['L_name'];
                            $_SESSION['email'] = $p['email'];
                            $_SESSION['pass'] = $p['pass'];
                            $_SESSION['picture'] = $p['pic'];
                            header('location: Prof.php');
                            // exit();
                        }
                        else echo 'login ou mot de pass incorect';
                }
                else echo 'Remplire les Champs!!!';
        
            }  




        ?>
</body>

</html>