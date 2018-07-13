<?php
// include "config.php";

if(isset($_POST["sub"]))
{
    insert();
}
?>

<!-- Register Modal Start -->
<div class="modal" id="register" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> Register </h5>
                <button type="buttom" class="close" data-dismiss="modal"><span area-hidden="true"> &times;</span> </button>
            </div>

            <div class="modal-body">
                <form class="form-group" enctype="multipart/form-data" method="POST">
                    
                    <label> Upload Photo </label>
                    <input type="file" class="form-control" name="photo" >
                    
                    <label> First Name </label>
                    <input type="text" class="form-control" name="fname" required placeholder="Enter First Name">

                    <label> Last Name </label>
                    <input type="text" class="form-control" name="lname" required placeholder="Enter Last Name">

                    <label> Email </label>
                    <input type="text" class="form-control" name="email" required placeholder="Enter Your Email Address">

                    <label> Password </label>
                    <input type="password" class="form-control" name="pwd" required placeholder="Set New Password For this Account">

                    <label> Gender   &nbsp;: </label><br>
                    <input type="radio"  name="gender" value="male" > Male<br>
                    <input type="radio"  name="gender" value="female" > Female<br>

                    <label> Hobby &nbsp; :</label><br>
                    <input type="checkbox" name="chk[]" value="read"> Read <br>
                    <input type="checkbox" name="chk[]" value="Write" > Write <br>
                    <input type="checkbox" name="chk[]" value="play" > Play <br>

                    <label> Address :</label>
                    <input type="text" class="form-control" name="address" placeholder="Enter Address"
                    
                    <label> Select Country</label>
                    <select class="form-control" name="country" >
                    <option> --Select Country--</option>
                    <?php
                    $sel2="select * from country";
                    $ex2=$conn->query($sel2);

                    while($fet=$ex2->fetch_array())
                    {
                    ?>
                         
                        <option value="<?php echo $fet["cid"]; ?>"> <?php echo $fet["cname"]; ?>  </option>   
                     <?php
                    }
                    ?>   
                    </select><br> <br>

                    <button type="submit" name="sub" class="btn btn-primary"> Submit </button>
                    <button type="reset" Class="btn btn-secondary"> Clear </button>
                </form>
            </div>

            <div class="modal-footer">
                <p style="text-align: center">For Any Help Contact us : 1800 000 0000 </p>
                
            </div>
        </div>
    </div>

</div>
<!-- Register Modal Close -->