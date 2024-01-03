<?php include("dbh.php")?>
<link rel="stylesheet" href="css/mobile.css">
<h1>Search page</h1>
<div class="course-container">
    if(isset($_POST['submit-search'])){
        $search = mysqli_real_escape_string($conn, $_POST['search']);
        $sql = "SELECT * FROM coursesdb WHERE "
    }

</div>