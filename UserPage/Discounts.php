<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discounts</title>
    <link rel="icon" href="./Picture/food.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sour+Gummy:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="UserStyle/discountsss.css">
</head>
<body>
    <div class="Back">
        <a href="Prof.php" id="BackLink">Back</a>
        <h4><a href="Prof.php" id="homeLink">Home</a> / <a href="#" id="ThisPage">Discounts </a></h4>
    </div>
    <div id="PageTitle">
        <h1>Exclusive Food Discounts</h1>
        <p>Savor the best flavors with unbeatable deals! Limited time offers on your favorite dishes.</p>
    </div>
    <div id="Title">
        <h1>Delicious Food Selections</h1>
        <p>Explore a variety of dishes that will tantalize your taste buds!</p>
    </div>
    <section>
        <table>
            <?php
                include ('connect.php');
                
                $sql = $dbt->prepare('SELECT * from discount d, product p where d.id_P = p.id_P order by rand() limit 5');
                $sql->execute();
                $discounts = $sql->fetchAll(PDO::FETCH_ASSOC);

                foreach($discounts as $d){
            ?>
            <tr id="Pr_Disc">
                <td><img src="<?= '../AdminPage/' . $d['pic'] ?>"></td>
                <td><h1><?= $d['Title'] ?></h1></td>
                <td><h1>-<?= $d['discount_Num'] ?>%</h1></td>
                <td><a href="Ord.php?id_P=<?= $d['id_P'] ?>">Check & Order</a></td>
            </tr>
            
            <?php }?>
        </table>
        <div id="New">
            <img src="./Picture/disc.png" class="active">
            <img src="./Picture/pngwing.com (4).png" >
            <img src="./Picture/pngwing.com (5).png" >
            <img src="./Picture/pngwing.com (2).png" >
        </div>
        <!-- <div id="btn">
            <button onclick="prevSlide()">Previous</button>
            <button onclick="nextSlide()">Next</button>
        </div> -->
    </section>
    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll('#New img');

        // Function to show the current slide
        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.remove('active', 'previous');
                if (i === index) slide.classList.add('active');
                if (i === (index - 1 + slides.length) % slides.length) slide.classList.add('previous');
            });
        }

        // Automatically go to the next slide every 3 seconds
        function autoSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        setInterval(autoSlide, 2000); // Change slide every 3 seconds
    </script>
</body>
</html>