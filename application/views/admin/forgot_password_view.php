<?php
$this->load->view('admin/header');
?>
<div class="container-fluid">
	 <div class="container">
      <div class="card card-register mx-auto mt-5 form1">
        <div class="card-header">Send OTP</div>
        <div class="card-body">
          <form id="forgot1_form">
          
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" name="uemail" id="inputEmail" class="form-control" placeholder="Email address" required="required">
                <label for="inputEmail">Email address</label>
              </div>
            </div>
 
            <button type="button" class="btn btn-primary btn-block btn-forgot1" >Send OTP</button>
          </form>
          <div class="forgot1_err">

          </div>
        </div>
      </div>
    </div>
     <div class="container">
      <div class="card card-register mx-auto mt-5 form2">
        <div class="card-header">Check OTP</div>
        <div class="card-body">
          <form id="forgot2_form">
          
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" name="uotp" id="inputEmail" class="form-control" placeholder="Email address" required="required">
                <label for="inputEmail">Enter OTP</label>
              </div>
            </div>
      
            <button type="button" class="btn btn-primary btn-block btn-forgot2" href="login.html">OTP</button>
          </form>
          <div class="forgot2_err">

          </div>
        </div>
      </div>
    </div>
     <div class="container">
      <div class="card card-register mx-auto mt-5 form3">
        <div class="card-header">Update Password</div>
        <div class="card-body">
          <form id="forgot3_form">
          
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" name="upass" id="inputEmail" class="form-control" placeholder="Email address" required="required">
                <label for="inputEmail">Enter Password</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-12">
                  <div class="form-label-group">
                    <input type="password" name="ucpass" id="inputPassword" class="form-control" placeholder="Password" required="required">
                    <label for="inputPassword">Confirm Password</label>
                  </div>
                </div>
               
              </div>
            </div>
            <button type="button" class="btn btn-primary btn-block btn-forgot3" href="login.html">Password Update </button>
          </form>
          <div class="forgot3_err">

          </div>
        </div>
      </div>
    </div>
  </div>
<?php
$this->load->view('admin/footer');
?>