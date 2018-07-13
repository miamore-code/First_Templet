<?php
session_start();

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


function login()
{
    $ser="localhost";
    $user = "root";
    $pass = "";
    $db="first_db";

    $conn = new mysqli($ser,$user, $pass, $db);

    $fn=$_POST["fname"];

    $em=$_POST["email"];
    $pwd=$_POST["pwd"];

    $sel="select * from user where email='$em' and password='$pwd' ";
    $ex=$conn->query($sel);

    $fet=$ex->fetch_array();

    $no=$ex->num_rows;

    if($no==1)
    {
        $_SESSION["uid"] = $fet["uid"];
        $_SESSION["em"]= $fet["email"];
        $_SESSION["fn"]= $fet["fname"];

        echo "<script>
        alert ('Logged in Successfully')
        window.location='profile.php';
        </script>";

    }
    else
    {
        echo "<script>
         alert ('Invalid Email or Password')
        window.location='index.php';
        </script>";
    }


}




?>