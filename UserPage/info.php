<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Information</title>
    <link rel="stylesheet" href="UserStyle/infos.css">
    <link rel="icon" href="./Picture/food.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sour+Gummy:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <?php
        session_start();
    ?>

    <!-- page update -->
    <?php
            @$simo = $_POST['user_id'];
            @$F_name = $_POST['F_name'];
            @$L_name = $_POST['L_name'];
            @$email = $_POST['email'];
            @$pass = $_POST['Pass'];

            @$file_n = $_FILES['file']['name'];
            @$file_d = $_FILES['file']['tmp_name'];
            @$file_exp = explode('.',$file_n);
            @$file_e = strtolower(end($file_exp));

            $newDirection = uniqid('',TRUE).".".$file_e ;
            $fileDir = "Picture/picMe/".$newDirection ;
            move_uploaded_file($file_d , $fileDir);

            @$update = $_POST['update'];
            include('connect.php');

            if(isset($update)){
                $N = $dbt->prepare('UPDATE Clients set F_name=? , L_name=? , email=? , pass=? , pic=? where user_id=?');
                $N->execute(array($F_name , $L_name , $email , $pass, $fileDir , $_GET['user_id']));
                if($N->rowCount()!=0){
                    $_SESSION['F_name'] = $F_name;
                    $_SESSION['L_name'] = $L_name;
                    $_SESSION['email'] = $email;
                    $_SESSION['pass'] = $pass;
                    if(stripos($fileDir,'.png') || stripos($fileDir,'.jpg') || stripos($fileDir,'.svg') || stripos($fileDir,'.gif')){
                        $_SESSION['picture'] = $fileDir;
                    }
                }  
                // echo $fileDir;
                // else echo 'Update Failed';
            }
    ?>

    <!-- Back Link -->
    <h4><a href="Prof.php" id="homeLink">Home</a> / <a href="#" id="ThisPage">Your Information</a></h4>
    <a href="Prof.php" id="BackLink">Back</a>

    <!-- Form For Update User Informations  -->
    <div class="editProfil">
        <form action="" method="post" enctype='multipart/form-data'>
            <img src="<?= $_SESSION['picture'] ?>" id='MyProfile'>
            <label for="inptFile">
                <div id='Replaced_File'>
                    <img src="./Picture/add.png">
                    <h2>Uplode File</h2>
                </div>
            </label>
            <input type="file" name='file' id='inptFile'>
            <input type="text" placeholder="First Name" name='F_name' value="<?= $_SESSION['F_name']  ?>">
            <input type="text" placeholder="Last Name" name='L_name' value="<?= $_SESSION['L_name']  ?>">
            <input type="email" placeholder="Email" name='email' value="<?= $_SESSION['email']  ?>">
            <input type="password" placeholder="Password" name='Pass' value="<?= $_SESSION['pass']  ?>">
            <input type="submit" value="Edit" name='update'>
        </form>
    </div>
</body>

</html>