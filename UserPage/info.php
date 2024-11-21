<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="UserStyle/inforrr.css">
</head>

<body>
    <?php
        // include('connect.php');
        session_start();
        // $sql = $dbt->prepare('SELECT * from Clients where email=?');
        // $sql->execute([$_GET['email']]);
        // $products = $sql->fetch();
    
    ?>
    <!-- page update -->
    <?php
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
                    $_SESSION['picture'] = $fileDir ;
                    // echo '<br>';
                    // print_r($_SESSION['picture']);
                    // echo '<br>';

                    // $_GET['email'] = $_SESSION['email'];
                    // echo '<h1>Update Done!!</h1>';
                }  
                else echo 'Update Failed';
            }
    ?>

    <h4><a href="Prof.php" id="homeLink">Home</a> / <a href="#" id="ThisPage">Your Information</a></h4>
    <a href="Prof.php" id="BackLink">Back</a>
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