<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/mobile.css">
    <link rel="stylesheet" href="css/desktop.css" media="only screen and (min-width: 700px)">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cantor College | About Us</title>
</head>
<body>
    <?php include("header.php")?>
    <div class = "banner" id = "about-us">
        <h1>ABOUT US</h1>
    </div>
    <div class="container">
        <h1>About Us</h1>
        <div class="info">
            <p>Cantor College was established in 1989 to specialize in Computing and Design.   At Cantor College, we want to give students the education they need to achieve their career aims, leaving them equipped with the knowledge, skills and experience to succeed. Cantor College gives you the opportunities that can give you the edge when you enter the world of work, through our teaching and our links to some of the world's leading researchers and employers. Our students have gone on to successful careers in a wide range of industries across the globe.  Whatever your ambitions, our learning and support can help to get the most out of your time with Cantor College, both as a student and in your future career.</p>
        </div>
    </div>
    <div class="grid-container">
        <div class="grid">
            <a class="page" href="learning-resources.php">
                <div class="pageimg" id="learning-resources"></div>
                <h1>Learning Resources</h1>
            </a>
            <a class="page" href="information-for-students.php">
                <div class="pageimg" id="information-for-students"></div>
                <h1>Information For Students</h1>
            </a>
            <a class="page" href="information-for-business.php">
                <div class="pageimg" id="information-for-business"></div>
                <h1>Information For Businesses</h1>
            </a>
        </div>
    </div>
    <footer>
        <?php include("footer.php")?>
    </footer>
    <script src="js/main.js"></script>
</body>
</html>