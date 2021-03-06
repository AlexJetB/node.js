<?php
    //idea 1 for searching. If they don't have a start date, make the start date today to the end of the year
    $name     = htmlspecialchars($_POST['name']);
    $desc     = htmlspecialchars($_POST['description']);
    $location = htmlspecialchars($_POST['location']);
    $price    = htmlspecialchars($_POST['price']);
    $type     = htmlspecialchars($_POST['type']);
    $lang     = htmlspecialchars($_POST['language']);
    $size     = htmlspecialchars($_POST['group_size']);
    $duration = htmlspecialchars($_POST['duration']);
    $cancel   = htmlspecialchars($_POST['cancel_policy']);
    $sDate    = htmlspecialchars($_POST['start_date']);
    $eDate    = htmlspecialchars($_POST['end_date']);
    $first    = htmlspecialchars($_POST['first']);
    $last     = htmlspecialchars($_POST['last']);
    $email    = htmlspecialchars($_POST['email']);
    $phone    = htmlspecialchars($_POST['phone']);
    $host     = htmlspecialchars($_POST['host']);



    session_start();
    $_SESSION['name']          = $name;
    $_SESSION['description']   = $desc;
    $_SESSION['location']      = $location;
    $_SESSION['price']         = $price;
    $_SESSION['type']          = $type;
    $_SESSION['language']      = $lang;
    $_SESSION['group_size']    = $size;
    $_SESSION['duration']      = $duration;
    $_SESSION['cancel_policy'] = $cancel;
    $_SESSION['start_date']    = $sDate;
    $_SESSION['end_date']      = $eDate;
    $_SESSION['first']         = $first;
    $_SESSION['last']          = $last;
    $_SESSION['email']         = $email;
    $_SESSION['phone']         = $phone;
    $_SESSION['host']          = $host;

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
<?php
    echo "
    <div>
      <p><b class='retreat-title'>$name</b><br><br> $desc</p><br><br>
          <br><b><p class='left-align'>Location:</b> $location</p>
          <b><p class='left-align'>Price:</b> $$price</p>
          <b><p class='left-align'>Language:</b> $lang</p>
          <b><p class='left-align'>Group Size:</b> $size people</p>
          <b><p class='left-align'>Duration:</b> $duration days</p>
          <b><p class='left-align'>Dates:</b> $sDate - $eDate</p>   
          <p><b class='retreat-title'>Your Info</b></p><br><br>
          <b><p class='left-align'>First Name:</b> $first</p>
          <b><p class='left-align'>Last Name:</b> $last</p>
          <b><p class='left-align'>Email:</b> $email</p>    
          <b><p class='left-align'>Phone:</b> $phone</p>    
          <b><p class='left-align'>About You:</b> $host</p>    
    </div>";
?>
</div>
<div class='right-margin'>
<a href='host.php' class='submit'>Go Back</a>
<a href='insertRetreat.php' class='submit'>Submit</a>
</div>

</body>
</html> 
 