<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="UserStyle/contact.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sour+Gummy:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="icon" href="./Picture/food.png">
</head>

<body>
    <section>
        <div class="picture">
            <img src="Picture/burger-hamburger-cheeseburger.jpg" alt="">
        </div>
        <div class="ContactSide">
            <div>
                <h1><span>Contact</span> <span>Us</span></h1>
                <p> 
                    Have questions or need assistance? We're here to help!
                    Reach out to us via email, phone, or by filling out the
                    form below, and our team will get back to you as soon as
                    possible. Your feedback and inquiries are important to us,
                    and we look forward to connecting with you!
                </p>
            </div>

            <!-- User Email & Message  -->
            <form method="post" id='contactInputs'>
                <input type="email" placeholder='Email' name='email'>
                <span></span>
                <textarea placeholder='Write Here...' name='content'></textarea>
                <span></span>
                <input type="submit" value="Send" name='submit'>
            </form>
        </div>
    </section>

    <?php
            include ('connect.php');
            session_start();

            @$email = $_POST['email'];
            @$content = $_POST['content'];
            @$submit = $_POST['submit'];

            if(isset($submit)){
                $sql = $dbt->prepare('INSERT into Contact(email , Content , user_id) values(?,?,?)');
                $sql->execute(array($email , $content , $_SESSION['user_Id']));
            }
    ?>

<script>
    document.getElementById('contactInputs').addEventListener('submit', function (e) {

        // Get form elements
        const emailInput = document.querySelector('input[name="email"]');
        const contentTextarea = document.querySelector('textarea[name="content"]');
        const emailError = emailInput.nextElementSibling; // The <span> after email input
        const contentError = contentTextarea.nextElementSibling; // The <span> after textarea

        let isValid = true;

        // Clear previous errors
        emailError.textContent = '';
        contentError.textContent = '';

        // Email validation
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Basic email regex
        if (!emailInput.value.trim()) {
            emailError.textContent = 'Email is required.';
            emailError.style.color = 'red';
            isValid = false;
        } else if (!emailPattern.test(emailInput.value.trim())) {
            emailError.textContent = 'Enter a valid email.';
            emailError.style.color = 'red';
            isValid = false;
        }

        // Content validation
        if (!contentTextarea.value.trim()) {
            contentError.textContent = 'Content cannot be empty.';
            contentError.style.color = 'red';
            isValid = false;
        }

        // If valid, submit the form
        if (isValid) {
             e.target.submit();
        }
        else{
            e.preventDefault();
        }
    });
</script>


</body>

</html>