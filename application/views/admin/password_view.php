<?php
$this->load->view('admin/header');
?>
<div class="container-fluid">
	 <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Update password</div>
        <div class="card-body">
          <form id="password_form">
          
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" name="old_password" id="inputEmail" class="form-control" placeholder="Email address" required="required">
                <label for="inputEmail">Old Password</label>
              </div>
            </div>
              <div class="form-group">
              <div class="form-label-group">
                <input type="password" name="new_password" id="inputEmail" class="form-control" placeholder="Email address" required="required">
                <label for="inputEmail">New Password</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-12">
                  <div class="form-label-group">
                    <input type="password" name="confirm_password" id="inputPassword" class="form-control" placeholder="Password" required="required">
                    <label for="inputPassword">Confirm Password</label>
                  </div>
                </div>
               
              </div>
            </div>
            <button type="button" class="btn btn-primary btn-block btn-password" >Update</button>
          </form>
          <div class="err">

          </div>
        </div>
      </div>
    </div>
  </div>
<?php
$this->load->view('admin/footer');
?>