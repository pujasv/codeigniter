<?php
$this->load->view('admin/header');
?>
<div class="container-fluid">
	 <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Update Brand</div>
        <div class="card-body">
          <form id="brand_form">
          
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" name="name" id="inputEmail" class="form-control" placeholder="Email address" required="required">
                <label for="inputEmail">Nike</label>
              </div>
            </div>
         
            <button type="button" class="btn btn-primary btn-block btn-brand" >Add Brand</button>
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