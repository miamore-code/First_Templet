<!-- Log In modal -->
<div class="modal" id="login" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Log in </h3>
                <button type="button" class="close" data-dismiss="modal">
                    <span area-hidden="true"> &times; </span>
                </button>
            </div>

            <div class="modal-body">
                <form method="POST" class="form-group">
                    <label> Email </label>
                    <input type="email" class="form-control" name="email" required placeholder="Enter Email">

                    <label> Password </label>
                    <input type="password" class="form-control" name="pwd" required placeholder="Enter Password">

                    <label style="display: none;"> First Name </label>
                    <input type="text" class="form-control" name="fname" style="display: none;" >
                    
                    
                </form>
            </div>
            <div class="modal-footer">
                <a class="d-block" href="#"> Forget Password </a>
                <button type="button" class="btn btn-primary" name="Submit"> login</button>
                
            </div>
        
        </div>
    </div>
</div>

<!-- Log in model close -->
