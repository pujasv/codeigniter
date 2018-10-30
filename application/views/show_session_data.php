<?php 
//echo "string";

$name= $this->session->userdata('name');
echo $name;
?>
<a href="<?php echo base_url();
        ?>index.php/project/session3/">Log Out</a>
