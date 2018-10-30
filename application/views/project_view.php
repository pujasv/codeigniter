<?php
 echo validation_errors(); 
echo form_open('project/actionPage');
?>
<ul>
	<li>name</li>
	<li><?php echo form_input("name","");?></li>
	<li>Age</li>
	<li><?php echo form_input("age",20);?></li>
	<li><?php echo form_submit("","ADD") ?></li>
</ul>
<?php
echo form_close();
?>