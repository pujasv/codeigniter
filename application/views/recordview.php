<?php
 echo validation_errors(); 
echo form_open('Userrecord/products');
//echo form_open('Userrecord/products1');
?>
<ul>
	<li>name:</li>
	<li><?php echo form_input("name",""); ?></li>
	<br>
	<li>Age:</li>
	<li><?php echo form_input("age",""); ?></li>
	<br>
	<li><?php echo form_submit("","ADD") ?></li>
</ul>

</form>
 <a href="<?php echo base_url();
        ?>index.php/project/file_upload">file upload</a>
  <br>
   <a href="<?php echo base_url();
        ?>index.php/project/session1/">Set session</a>
         <br>
   <a href="<?php echo base_url();
        ?>index.php/project/session2/">Show session</a>

        <br>
        <a href="<?php echo base_url();
        ?>index.php/project/cookie1/">Set cookies</a>
         <br>
        <a href="<?php echo base_url();
        ?>index.php/project/cookie2/">show cookies</a>
<script src="<?php echo base_url().'assets/js/jquery.js' ?>"></script>
<script src="<?php echo base_url().'assets/js/project.js' ?>"></script>
<form id="formdata">
<ul>
	<li>name:</li>
	<li><?php echo form_input("name",""); ?></li>
	<br>
	<li>Age:</li>
	<li><?php echo form_input("age",""); ?></li>
	<br>
	<li><?php echo form_button("","ADD",array("id"=>"btn")) ?></li>
</ul>
 </form>
 <div class="msg"></div>
