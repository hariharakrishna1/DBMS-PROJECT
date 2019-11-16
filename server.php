
<?php

$firstname= $_POST['firstname'];
$lastname = $_POST['lastname'];
$aadhar = $_POST['aadhar'];
$gender = $_POST['gender'];
$cars = $_POST['cars'];
$car_no = $_POST['car_no'];
$email = $_POST['email'];
$time_in = $_POST['time_in'];
$time_out = $_POST['time_out'];
$phone = $_POST['phone'];

$link = mysqli_connect("localhost" , "root" , "","car_park");

if($link == FALSE)
{
die("error".mysqli_connect_error());
}
else
{


$sql3 = "select * from owner_info";
if($result = mysqli_query($link , $sql3))
{
if(mysqli_num_rows($result) >0)
{
while($rows = mysqli_fetch_array($result))
{
echo "firstname : ".$rows['firstname']."<br>";
echo "lastname : ".$rows['lastname']."<br>";
echo "gender : ".$rows['gender'];
echo "email " .$rows['email'];
echo "phone : ".$rows['phone'];

}
}
}

}
mysqli_close($link);
?>

