<?php
    session_start();
    $name     = $_SESSION['name'];
    $desc     = $_SESSION['description'];
    $location = $_SESSION['location'];
    $price    = $_SESSION['price'];
    $type     = $_SESSION['type'];
    $lang     = $_SESSION['language'];
    $size     = $_SESSION['group_size'];
    $duration = $_SESSION['duration'];
    $cancel   = $_SESSION['cancel_policy'];
    $sDate    = $_SESSION['start_date'];
    $eDate    = $_SESSION['end_date'];   

    require 'dbConnection.php';
    $db = getDB();
    $query = "INSERT INTO retreats(price, location, type, description, start_date, end_date, duration, group_size, language, cancel_policy, host_id, name) VALUES ($price, '$location', '$type', '$desc', '$sDate', '$eDate', $duration, $size, '$lang', '$cancel', 1, '$name');";

    // try {
    //     $retreat = $db->prepare($query);
    //     $retreat->execute();
    // }
    // catch(Exception $e) {
    //     echo "Database Error. $e";
    //     die();
    // }
    ?>

<!DOCTYPE html>
<html>
<head>
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom fonts for this template -->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
<link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

<!-- Custom styles for this template -->
<link href="css/landing-page.min.css" rel="stylesheet">
<style>
/* flexbox stuff is from w3 schools */
.flex-container {
  display: flex;
  flex-direction: column;
}

.flex-container > div {
    background-color: #f1f1f1;
    width: 80%;
    margin: 10px;
    text-align: center;
    text-align: center;
    margin:10px 10% 10px 10%;
    padding:20px;
    border-radius:10px;
}

h1 {
    text-align:center;
}
p {
    text-align:center;
}
.left-align {
  text-align:left;
}
.column {
  max-width:50%;
}
.retreat-title {
  font-size:18px;
}
</style>
</head>
<body>
<?php
require 'navbar.php';
?>
<br><br><br>
<h1>Review Info</h1>

<!-- <p>Click on a retreat to learn more!</p> -->

<div class="flex-container">
<p>Thank you for submitting your retreat! You will be notified when anyone signs up for it.</p>
</div>
<div class='right-margin'>
<a href='index.php' class='submit'>Home</a>
</div>

</body>
</html> 
 