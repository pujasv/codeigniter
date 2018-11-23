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
		$(".form2,.form3").hide();
		$(".btn-forgot1").click(function(){
			$.post(apath+"forgot1_action",$("#forgot1_form").serialize(),function(response){
			//console.log(response);
			if(response=="ok"){
				$(".form2,.form1").slideToggle()
			}
			else{
				$(".forgot1_err").html(response)
			}
			})
		})
		$(".btn-forgot2").click(function(){
			$.post(apath+"forgot2_action",$("#forgot2_form").serialize(),function(response){
			//console.log(response);
			if(response=="ok"){
				$(".form2,.form3").slideToggle()
			}
			else{
				$(".forgot2_err").html(response)
			}
			})
		})
		$(".btn-forgot3").click(function(){
			$.post(apath+"forgot3_action",$("#forgot3_form").serialize(),function(response){
			
				$(".forgot3_err").html(response)
			
			})
		})
		$(".btn-category").click(function(){
			$.post(apath+"category_action",$("#category_form").serialize(),function(response){
			
				$(".err").html(response)
			
			})
		})
		$(".btn-brand").click(function(){
			$.post(apath+"brand_action",$("#brand_form").serialize(),function(response){
			
				$(".err").html(response)
			
			})
		})
})