<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="UserStyle/log.css">
</head>
<body>
    <?php
            include ('connect.php');
            session_start();
    ?>
    <div class="coontainer">
            <form method="post" class="login">
                    <h1 class="lgW">Sign in</h1>
                    <div>
                        <input id="user" type="email" placeholder="Email" name="email">
                    </div>
                    <div>
                        <input id="pass" type="password" placeholder="Password" name="pass"> 
                    </div>
                    <div>
                        <input class="btn" type="submit" value="Login" name='login'>
                    </div>
            </form>
        </div>




        <?php
            include ('connect.php');
            // session_start();
            @$email = $_POST['email'];
            @$password = $_POST['pass'];
            @$login = $_POST['login'];


            if(isset($login)){
                if(!empty($email) && !empty($password)){
                    $E = $dbt->prepare('SELECT * from Admin where email=? and pass=?');
                    $E->execute(array($email,$password));
                    $p = $E->fetch();
                        if($E->rowCount() != 0){
                            $_SESSION['email'] = $p['email'];
                            $_SESSION['pass'] = $p['pass'];
                            header('location: AdminHome.php');
                            // exit();
                        }
                        else echo 'login ou mot de pass incorect';
                }
                else echo 'Remplire les Champs!!!';
        
            }  




        ?>
</body>
</html>
