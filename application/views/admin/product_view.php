<?php
$this->load->view('admin/header');
//print_r($x1);
?>
<div class="container-fluid">
	 <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Category Page</div>
        <div class="card-body">
          <form id="product_form">
          
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" name="name" id="inputEmail" class="form-control" placeholder="Email address" required="required">
                <label for="inputEmail">Men's Tshirt</label>
              </div>
            </div>
         
         <div class="form-group">
              <div class="form-label-group">
                <input type="text" name="price" id="inputEmail" class="form-control" placeholder="Email address" required="required">
                <label for="inputEmail">2500</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" name="discount" id="inputEmail" class="form-control" placeholder="Email address" required="required">
                <label for="inputEmail">20 in%</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
              <select class="form-control" name="category_id">
                <option>Please select category</option>
                <?php
                if(is_array($x1)):
                  foreach ($x1 as $key => $val):
                    # code...
                
                ?>
                <option value="<?php echo $val['id'] ?>"><?php echo $val['name']?></option>
                <?php
              endforeach;
            endif;
                ?>
              </select>
              </div>
            </div>
              <div class="form-group">
              <div class="form-label-group">
              <select class="form-control" name="brand_id">
                <option>Please select brand</option>
                <?php
                if(is_array($x2)):
                  foreach ($x2 as $key => $val):
                    # code...
                
                ?>
                <option value="<?php echo $val['id'] ?>"><?php echo $val['name']?></option>
                <?php
              endforeach;
            endif;
                ?>
              </select>
              </div>
            </div>
             <div class="form-group">
              <div class="form-label-group">
                <input type="file" name="path" id="inputEmail" class="form-control" placeholder="Email address" required="required">
              
              </div>
            </div>
             <div class="form-group">
              <div class="form-label-group">
                <textarea name="description" class="form-control" placeholder="Enter product description"></textarea>
              </div>
            </div>
           
            <button type="button" class="btn btn-primary btn-block btn-brand" >Add product</button>
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