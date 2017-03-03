<div class="col-xs-12 col-xs-offset-1 col-sm-12 col-sm-offset-1 col-md-12 col-md-offset-1 col-lg-12 col-lg-offset-1 text-center" id="form">
    <form role="form" action="signUpCont.php" id="signUp" method="POST" enctype="multipart/form-data">
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
            <label>Username</label>
                <input type="text" class="form-control" name="username" id="username" required>
        </div>
        <div class="form-group col-xs-10 col-sm-10 col-md-10 col-lg-10">
            <label>Password</label>
                <input type="password" class="form-control" name="password" id="password" required>
        </div>
        <div class="form-group col-xs-10 col-sm-10 col-md-10 col-lg-10">
            <label>Re-type password</label>
                <input type="password" class="form-control" name="password1" id="password1" required>
        </div>
        <div class="form-group col-xs-10 col-sm-10 col-md-10 col-lg-10">
            <label>Email Address</label>
                <input type="email" class="form-control" name="email" id="email" required>
        </div>
        <div class="form-group col-xs-10 col-sm-10 col-md-10 col-lg-10 text-left radio">
          <label><b>I am an...</b></label><br>
            <input type="radio" name="userType" id="employer" value="1" required> Employer
        </div>
        <div class="form-group col-xs-10 col-sm-10 col-md-10 col-lg-10 text-left radio">
            <input type="radio" name="userType" id="employee" value="0" required> Employee
        </div>
        <div class="form-group col-xs-10 col-sm-10 col-md-10 col-lg-10">
            <button type="submit" id="submit1" name="signupsubmit" class="btn btn-default">Create Account</button>
        </div>
    </form>
</div>
