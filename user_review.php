<?php
$insert=false;
if($_SERVER['REQUEST_METHOD']=='POST'){
$server='localhost';
$username='root';
$password='';
$dbname = 'project_data';
$conn=mysqli_connect($server,$username,$password,$dbname);

if(!$conn){
    die("Connection to the database failed");
}


$rate= $_POST['rate'];
$review= $_POST['review'];



$sql=  "INSERT INTO `user_review`(`rate`, `review`,`date`) VALUES ( '$rate', '$review',current_timestamp());";


if($conn->query($sql)==true){
    $insert=true;
    
}
else{
    echo "error";
}
$conn->close();
}
?>




