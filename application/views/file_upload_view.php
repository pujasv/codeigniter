<?php
 echo validation_errors(); 
echo form_open_multipart('project/file_action');
?>
<ul>
	<li>name</li>
	<li><?php echo form_input("name","");?></li>
	<li>Age</li>
	<li><?php echo form_input("age","");?></li>
	<li>Select Profile</li>
	<li><?php echo form_upload("uimage","") ?></li>
	<li><?php echo form_submit("","ADD") ?></li>

</ul>
<?php
echo form_close();
?>