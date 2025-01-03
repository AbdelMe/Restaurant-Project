<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="UserStyle/sign_in_up.css">
    <title>Home</title>
    <link rel="icon" href="./Picture/food.png">
</head>

<body>
    <div class="wrapper">

        <!-- Nav Bare -->
        <nav class="nav">
            <div class="nav-logo">
                <a href="signUp.php"><img src="Picture/logolavilla-new_copy-2.png" alt=""></a>
            </div>
            <div class="nav-menu" id="navMenu">
                <ul>
                    <li><a href="signUp.php" class="link active">Home</a></li>
                    <li><a href="contactUs.php" class="link">contact Us</a></li>
                    <li><a href="about.php" class="link">About</a></li>
                </ul>
            </div>
            <div class="nav-button">
                <button class="btn white-btn" id="loginBtn" onclick="login()">Sign In</button>
                <button class="btn" id="registerBtn" onclick="register()">Sign Up</button>
            </div>
            <div class="nav-menu-btn">
                <i class="bx bx-menu" onclick="myMenuFunction()"></i>
            </div>
        </nav>

        <div class="form-box">

            <!-- Login form -->
            <form method="post" class="login-container" id="login">
                <div class="top">
                    <span>Don't have an account? <a href="#" onclick="register()">Sign Up</a></span>
                    <header>Login</header>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="Username or Email" name='mail'>
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-box">
                    <input type="password" class="input-field" placeholder="Password" name='pss'>
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-box">
                    <input type="submit" class="submit" value="Sign In" name='login' >
                </div>
                <div class="two-col">
                    <div class="one">
                        <input type="checkbox" id="login-check" name='check'>
                        <label for="login-check"> Remember Me</label>
                    </div>
                    <div class="two">
                        <label><a href="#">Forgot password?</a></label>
                    </div>
                </div>
            </form>

            <?php


            include ('connect.php');
            session_start();
            @$mail = $_POST['mail'];
            @$pss = $_POST['pss'];
            @$login = $_POST['login'];


            if(isset($login)){
                if(!empty($mail) && !empty($pss)){//&& !empty($_POST['check'])
                    
                $E = $dbt->prepare('SELECT * from Clients where email=? and pass=?');
                    $E->execute(array($mail,$pss));
                    $p = $E->fetch();
                        if($E->rowCount() != 0){
                            $_SESSION['user_Id'] = $p['user_id'];
                            $_SESSION['F_name'] = $p['F_name'];
                            $_SESSION['L_name'] = $p['L_name'];
                            $_SESSION['email'] = $p['email'];
                            $_SESSION['pass'] = $p['pass'];
                            $_SESSION['picture'] = $p['pic'];
                            header('location: Prof.php');
                        }
                        else echo "<p name='C_Message' id='C_Message' style='display:block;background-color: rgba(250, 156, 156, 0.795);font-weight: 500;position: absolute;top: 0;'>Login Or Password Incorrect </p>";
                    }
                else echo "<p name='C_Message' id='C_Message' style='display:block;background-color: rgba(250, 156, 156, 0.795);font-weight: 500;position: absolute;top: 0;'>Email Or Password is Empty</p>";

            } 
        ?>

            <!-- registration form -->
            <form method="post" class="register-container" id="register">
                <div class="top">
                    <span>Have an account? <a href="#" onclick="login()">Login</a></span>
                    <header>Sign Up</header>
                </div>
                <div class="two-forms">
                    <div class="input-box">
                        <input type="text" class="input-field" data-type='First Name' placeholder="First name"
                            name='F_name' id='F_name'>
                        <i class="bx bx-user"></i>
                        <span></span>
                    </div>
                    <div class="input-box">
                        <input type="text" class="input-field" placeholder="Last name" name='L_name'>
                        <i class="bx bx-user"></i>
                        <span></span>
                    </div>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="Email" name="email">
                    <i class="bx bx-envelope"></i>
                    <span></span>

                </div>
                <div class="input-box">
                    <input type="password" class="input-field" placeholder="Password" name="pass">
                    <i class="bx bx-lock-alt"></i>
                    <span></span>

                </div>
                <div class="input-box">
                    <input type="password" class="input-field" placeholder="Comfirm Password" name="C_pass">
                    <i class="bx bx-lock-alt"></i>
                    <span></span>

                </div>
                <div class="input-box">
                    <input type="submit" class="submit" value="Register" name='sign_up' >
                </div>
            </form>
        </div>

        <?php
    
    include ('connect.php');
    @$F_name = $_POST['F_name'];
    @$L_name = $_POST['L_name'];
    @$email = $_POST['email'];
    @$pass = $_POST['pass'];
    @$C_pass = $_POST['C_pass'];
    @$pic_P = "Picture/user-profile.png";
    @$sign_up = $_POST['sign_up'];


    if(isset($sign_up)){
        if(!empty($F_name) && !empty($L_name) && !empty($email) && !empty($pass) && !empty($C_pass)){
            if($pass === $C_pass){
                $B = $dbt->prepare('INSERT into Clients(F_name , L_name , email , pass , pic) values(?,?,?,?,?)');
                $B->execute(array($F_name,$L_name, $email , $pass , $pic_P));

                // if($B->rowCount() != 0){
                //     // session_start();
                //     $_SESSION['email'] = $email;
                //     $_SESSION['pass'] = $pass;
                //     // header('location: page.php');
                //     // exit();
                }
                // else echo 'login ou mot de pass incorect';
            }
            // else {
            //     echo 'Confirmation failed!!';
            // }
        // }
        // else echo 'Remplire les Champs!!!';
}  

?>
    </div>




    <script>

    function myMenuFunction() {
        var i = document.getElementById("navMenu");

        if (i.className === "nav-menu") {
            i.className += " responsive";
        } else {
            i.className = "nav-menu";
        }
    }
    </script>

    <script>
        var a = document.getElementById("loginBtn");
        var b = document.getElementById("registerBtn");
        var x = document.getElementById("login");
        let y = document.getElementById("register");

        let cc = document.getElementById("id1");

        document.getElementById('register').addEventListener('submit', function (e) {

        // Retrieve form inputs
        const firstName = document.getElementById('F_name').value.trim();
        const lastName = document.querySelector('input[name="L_name"]').value.trim();
        const email = document.querySelector('input[name="email"]').value.trim();
        const password = document.querySelector('input[name="pass"]').value.trim();
        const confirmPassword = document.querySelector('input[name="C_pass"]').value.trim();

        // Error handling
        let valid = true;
        const showError = (field, message) => {
            const span = field.nextElementSibling.nextElementSibling; // Get the <span> element for error display
            span.textContent = message;
            span.style.color = 'red';
            valid = false;
        };

        const clearError = (field) => {
            const span = field.nextElementSibling.nextElementSibling;
            span.textContent = '';
        };

        // Validate first name
        const firstNameField = document.getElementById('F_name');
        if (firstName === '') {
            showError(firstNameField, 'First name is required');
        } else {
            clearError(firstNameField);
        }

        // Validate last name
        const lastNameField = document.querySelector('input[name="L_name"]');
        if (lastName === '') {
            showError(lastNameField, 'Last name is required');
        } else {
            clearError(lastNameField);
        }

        // Validate email
        const emailField = document.querySelector('input[name="email"]');
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (email === '') {
            showError(emailField, 'Email is required');
        } else if (!emailRegex.test(email)) {
            showError(emailField, 'Invalid email format');
        } else {
            clearError(emailField);
        }

        // Validate password
        const passwordField = document.querySelector('input[name="pass"]');
        if (password === '') {
            showError(passwordField, 'Password is required');
        } else if (password.length < 8) {
            showError(passwordField, 'Password must be at least 8 characters long');
        } else {
            clearError(passwordField);
        }

        // Validate confirm password
        const confirmPasswordField = document.querySelector('input[name="C_pass"]');
        if (confirmPassword === '') {
            showError(confirmPasswordField, 'Please confirm your password');
        } else if (password !== confirmPassword) {
            showError(confirmPasswordField, 'Passwords do not match');
        } else {
            clearError(confirmPasswordField);
        }

        // If all validations pass, submit the form
        if (valid) {
            this.submit(); // Submit the form
        }
        else{
            e.preventDefault();
        }
    });




    function login() {
        x.style.left = "4px";
        y.style.right = "-520px";
        a.className += " white-btn";
        b.className = "btn";
        x.style.opacity = 1;
        y.style.opacity = 0;
    }

    function register() {
        x.style.left = "-510px";
        y.style.right = "5px";
        a.className = "btn";
        b.className += " white-btn";
        x.style.opacity = 0;
        y.style.opacity = 1;

        document.getElementById('C_Message').style.display = 'none'
        document.getElementById('simoo').style.display = 'none'

    }
    </script>



    <script src='./Userjs/signUp.js'></script>

</body>

</html>