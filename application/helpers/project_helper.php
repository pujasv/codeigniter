<?php
function url_before_login()
{
	$arr= ["password","password_action","library"];
	return $arr;
}
function url_after_login()
{
	$arr=["register","register_action","login","login_action"];
	return $arr;
}
function for_admin(){
	$arr=["library","library_action"];
	return $arr;
}
?>