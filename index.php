<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Templet</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">


</head>
<body>
<?php
include "register.php";
include "login.php";

?>

<!-- Header Start -->
<?php
include "header.php";
?>
<!-- Header Ends -->




<!-- Slider STart Here -->
<?php
include "slider.php";
?>
<!-- Slider Ends Here -->





<!-- Content Start here -->


<!-- New Arrival Devision -->
<?php
include "new_arrival.php";
?>
<!-- New Arrival division ends -->


<!-- Hot Products start -->
<?php
include "hot_prod.php";
?>
<!-- Hot Products Ends -->


<div class="container mt-5 mb-5">
    <div class="row">
        <div class="shadow col-md-6 col-sm-12">
            <img height="300" width="100%" src="images/pic02.jpg">
        </div>
        <div class="shadow col-md-6 col-sm-12">
            <img height="300" width="100%" src="images/pic03.jpg">
        </div>
    </div>
</div>



<!-- Sell Products -->
<?php
include "sell_products.php"
?>
<!-- Sell Pruduct Ends -->


<div class="container bg-dark mt-5">
    <div class="row">
        
        <div class="col-md-3 col-sm-12 ml-5 mr-5">
           <h1 style="text-align: center">
                <span class="text-white fa fa-mobile-phone"> </span>
            </h1>
           <h3 style="text-align: center" class="text-white"> ORDER ONLINE</h3>
        </div>

        <div class="col-md-3 col-sm-12 ml-5 mr-5">
            <h1 style="text-align: center">
                <span class="text-white fa fa-home"> </span>
            </h1>
            <h3 style="text-align: center" class="text-white"> Worldwide Delivery</h3>
        </div>

        <div class="col-md-3 col-sm-12 ml-5 mr-4">
            <h1 style="text-align: center">
                <span class="text-white fa fa-backward"> </span>
            </h1>
            <h3 style="text-align: center" class="text-white"> 30 days replacement</h3>
        </div>

    </div>
</div>

<!-- Content Close here -->




<!-- Footer Start here -->
<?php
include "footer.php";
?>
<!-- Footer Close Here -->





<script src="js/jquery.3.3.1.js"></script>
<script src="js/bootstrap.min.js"></script>

<script>
    $(document).ready(function(){
        $('#carousel').carousel({
            interval:1000
        })
    })
</script>
</body>
</html>