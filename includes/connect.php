 <?php


$dbhost = "localhost";
$dbuser = "root";
$dbpass = "1234";
$dbname = "login";

$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if($con){
  
    // echo '<script>alert("connection");</script>';

}
else{
echo '<script>alert("no connection");</script>';
}
