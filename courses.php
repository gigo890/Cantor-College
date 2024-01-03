<?php include("dbh.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/mobile.css">
    <link rel="stylesheet" href="css/desktop.css" media="only screen and (min-width: 700px)">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cantor College | Courses</title>
</head>
<body>
    <?php include("header.php")?>
    <div class = "banner" id = "courses">
        <h1>COURSES</h1>
    </div>

    <div class="course-container">
        <?php 
            $sql = "SELECT * FROM coursesdbs";
            $result = mysqli_query($conn, $sql);
            $queryResults = mysqli_num_rows($result);

            if($queryResults > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "<div>
                        <h3>".$row[]"
                }
            }
        ?>
    </div>

    <footer>
        <?php include("footer.php")?>
    </footer>
    <script src="js/main.js"></script>
</body>
</html>