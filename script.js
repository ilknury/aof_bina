$(document).ready(function(){
	function ilceleriGetir(){
		if($("#iller option:selected").val()!="0" ){
			$.post("ilceler.php",{ilId:$("#iller option:selected").val()},function(output){
				$("#ilceler option").remove();
				$("#ilceler").append(output);
				//alert(output);
			});
		}
		else
			alert("lütfen il seçiniz");
	};
	$("#iller").on("change",ilceleriGetir);
	
	function okullariGetir(){
		if($("#ilceler option:selected").val()!="0" ){
		$.post("okullar.php",{ilceId:$("#ilceler option:selected").val()},function(output){
			$("#okullar option").remove();
			$("#okullar").append(output);
		});
		}
	};
	$("#ilceler").on("change",okullariGetir);
	
	$("#okullar").on("change",function(){
		//console.log($(this).val());
	});
});


