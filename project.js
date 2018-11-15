$(document).ready(function(){
	var apath="http://localhost/pci_project/index.php/admin/admin/";
	$(".btn-register").click(function(){
	//	alert(121);
		var form_obj=document.getElementById("register-form");
		var form_data_obj=new FormData(form_obj);
		$.ajax({
			type:"post",
			data:form_data_obj,
			contentType:false,
			processData:false,
			url:apath+"register_action",
			success:function(res){
				$(".err").html(res)
			}
		})
	})

	$(".btn-login").click(function(){
		//alert(12);
		$.ajax({
			type:"post",
			data:$("#login-form").serialize(),
		
			url:apath+"login_action",
			success:function(res){
				if(res=='done')
				{
					window.location.href=apath;
				}
				else{
					$(".err").html(res)
				}
			}
		})
	})
		$(".btn-password").click(function(){
		alert(12);
		$.ajax({
			type:"post",
			data:$("#password_form").serialize(),
		
			url:apath+"password_action",
			success:function(res){
				if(res=='done')
				{
					window.location.href=apath;
				}
				else{
					$(".err").html(res)
				}
			}
		})
	})
})