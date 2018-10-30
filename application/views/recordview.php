<?php
 echo validation_errors(); 
echo form_open('Userrecord/products');
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
 <a href="<?php echo base_url();
        ?>index.php/project/file_upload">file upload</a>
  <br>
   <a href="<?php echo base_url();
        ?>index.php/project/session1/">Set session</a>
         <br>
   <a href="<?php echo base_url();
        ?>index.php/project/session2/">Show session</a>
<?php
echo form_close();
?>