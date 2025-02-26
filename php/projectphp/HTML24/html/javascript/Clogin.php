<?php

$n=$_POST['Cname'];
$c=$_POST['Cpassword'];

$con=mysqli_connect("localhost","root","","travel");
$sql="INSERT INTO traveldetails(Cname,Cpassword) values ('$n','$c')";

$r=mysqli_query ($con,$sql);

if ($r)

{
    echo"User Details Data Added Successfully!!!!";
}

else
{
    echo"User Details Data Not Added";
}

?>