




<!DOCTYPE html>


<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Evaluation</title>

</head>

<body>

<?php
session_start();
require_once "dbaccess.php";

//
//echo $_POST['password'];
//echo $_POST['email'];

$sql_count = "select count(*) from user where email = '".$_POST['email']."' and password=md5('".$_POST['password']."') ";
$result_count = mysql_query($sql_count);
$row_count = mysql_fetch_array( $result_count );
if($row_count[0]==0) {
    echo  "Wrong Email or Password";
    ?>
    <meta http-equiv=refresh content="0.00; url=login.php">

    <?php

}else{
    $result = mysql_query("select * from user where email = '".$_POST['email']."' and password=md5('".$_POST['password']."') ");
    $row = mysql_fetch_array($result);
    $username = $row['user_name'];
    $email = $row['email'];
    $id = $row['id'];
    $_SESSION['username'] = $username;
    $_SESSION['user_id'] = $id;
    $_SESSION['email'] = $email;
//    echo isset($_SESSION['username']);
//    echo isset($_SESSION['user_id']);
//    echo isset($_SESSION['email']);
//
//    echo $_SESSION['username'];
//    echo $_SESSION['user_id'];
//    echo $_SESSION['email'];

    echo "Redirecting";


}?>


<?php


$result = mysql_query("select * from participate where real_user_id = '".$id."' ");
$row = mysql_fetch_array($result);
$decision_id = $row['decision_id'];
$user_id = $row['user_id'];






?>



<!-- jQuery -->
<meta http-equiv=refresh content="0.00005; url=instruction.php?decision_id=<?php echo $decision_id;?>&user_id=<?php echo $user_id;?>">

</body>

</html>


