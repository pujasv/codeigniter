$(function(){
	var cpath="http://localhost/ci_project/index.php/client/";
	var basepath ="http://localhost/ci_project/";
	$(".filter_brand").click(function(obj){
	//	alert(1)
		obj.preventDefault();
		var rec=$(this).attr("for");
	//	alert(rec);
		$.post(cpath+"filterbrand/"+rec,function(response){
			//console.log(response)
			$(".features_items").html(response)
		})
	})
})