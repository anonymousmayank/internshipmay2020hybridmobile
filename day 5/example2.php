<?php
$rollno=$_POST['rollno'];
$sql="SELECT * FROM students WHERE rollno='$rollno'";
$cn=mysqli_connect("localhost","root","","abes");
$query=mysqli_query($cn,$sql);
$count=mysqli_num_rows($query);
if($count==0){
    echo"Sorry! Invalid Roll No.";
}
else{
    $row=mysqli_fetch_array($query);
    echo "Name is $row[1] and Course is $row[2]";
}
mysqli_close($cn);
?>