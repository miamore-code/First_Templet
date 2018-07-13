<?php

$ser="localhost";
$user = "root";
$pass = "";
$db="first_db";

$conn = new mysqli($ser,$user, $pass, $db);


// if($conn)
// {
//     echo "<script> alert ('Connected');
    
//      </script>";
// }
// else
// {
//     die(mysqli_error($conn));
    
//     echo "<script> 
//     alert ('Not Connected'); 
//     </script>";
// }


function insert()
{
    $ser="localhost";
    $user = "root";
    $pass = "";
    $db="first_db";

    $conn = new mysqli($ser,$user, $pass, $db);

    $temp=$_FILES["photo"]["tmp_name"];
    $type=$_FILES["photo"]["type"];
    $size=$_FILES["photo"] ["size"];
    $path="upload/".$_FILES["photo"]["name"];
    move_uploaded_file($temp,$path);

    $fn=$_POST["fname"];
    $ln=$_POST["lname"];
    $em=$_POST["email"];
    $pwd=$_POST["pwd"];
    $gen=$_POST["gender"];
    $hby= implode(",",$_POST["chk"]);
    $add=$_POST["address"];
    $cname=$_POST["country"];

    $ins="insert into user (photo,fname,lname,email,password,gender,hobby,address,country) values('$path','$fn','$ln','$em','$pwd','$gen','$hby','$add','$cname')";

    $ext=$conn->query($ins);

    echo "<script>
    alert ('Thank you for Register')
    </script";
}







?>