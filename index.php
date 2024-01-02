<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/mobile.css">
    <link rel="stylesheet" href="css/desktop.css" media="only screen and (min-width: 700px)">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cantor College | Home</title>
</head>
<body>
    <?php include("header.php")?>
    <div class = "banner" id = "index">
        <h1>CANTOR COLLEGE</h1>
    </div>
    <div class="grid-container">
        <div class="grid">
        <a class = "page"  href="courses.php">
            <div class="pageimg" id="courses"></div>
            <h1>Courses</h1>
        </a>
        <a class = "page" href="facilities.php">
            <div class="pageimg" id="facilities"></div>
            <h1>Facilities</h1>
        </a>
    </div>
    </div>
    
    <footer>
        <?php include("footer.php")?>
    </footer>
    <script src="js/main.js"></script>
</body>
</html>