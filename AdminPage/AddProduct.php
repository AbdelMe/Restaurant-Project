<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype='multipart/form-data'>
        <input type="file" name="file" >
        <input type="text" name="Title" >
        <input type="number" name='Price'>
        <input type="submit" value='send' name='btn'>
    </form>


    <?php
        @$Title = $_POST['Title'];
        @$Price = $_POST['Price'];

        @$file_name = $_FILES['file']['name'];
        @$file_dir = $_FILES['file']['tmp_name'];
        @$file_explode = explode('.',$file_name);
        @$file_end = strtolower(end($file_explode));
        // @$submit = $_POST['btn'];
    

        if(isset($_POST['btn'])){
            echo '<br>';
            echo '<pre>';
            $file  = $_FILES['file'] ;     // Return Everything About Pic
            print_r($file);
            echo '</pre>';

            $newDir = uniqid('',TRUE).".".$file_end ;
            $fileDirection = "Picture/ProductPic/".$newDir ; // Picture/654555ghj7yèYYYè-99.png
            move_uploaded_file($file_dir,$fileDirection);


            include ('connect.php');

            // //INSERT

            $sql = $dbt->prepare('INSERT into product (pic , Title , Price) values(?,?,?)');
            $sql->execute(array($fileDirection , $Title , $Price));

        }
    
    ?>
</body>
</html>