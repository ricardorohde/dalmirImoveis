	
$(window).load(function(){
	var url = window.location.href; 
	if(url.indexOf('sistema') > 0){
		$(location).attr('href','ladecora.php')
	}

	$(".close-btn").click(function(){
		$("#modalEbook").modal('hide');
	});


	$(".btn-enviar").click(function(){

		var valida = true;

		$("input[type=text]").each(function(){
			if($(this).val() == ""){
				$(this).focus();
				valida = false;
				exit();
			}
		});

		if(!valida){
				exit();
		}
	 		$.ajax({
	            type: 'POST',
	            url: 'ladecora_files/email-cliente.php',            
	            data:{  email:$("input[name=email]").val(),
	            		name:$("input[name=name]").val(),
	            		city:$("input[name=city]").val() },                                                 
	            success: function(data) { 
	             // var obj = $.parseJSON(data); 
	             
	              

	              var link=document.createElement('a');
			      link.href='ladecora_files/tendencias-e-dicas-ladecora.pdf';
			      link.download="tendencias e dicas ladecora.pdf";
			      link.click();

	              console.log(data);  

	              $("input[type=text]").each(function(){
	              		$(this).val("");
	              }); 

	              $("#modalEbook").modal('hide');
	              // if(obj.status == "success"){
	              //  // $("#container-result").append("<div class='alert alert-success'><strong>Obrigado por ter entrado em contato conosco!</strong> Seu contato foi recebido pela nossa equipe. Iremos entrar em contato o mais breve possível.</div>")
	              //  		alert('deu certo');
	              // }else{
	              //       alert("Erro no envio.");
	             // }
	             // $("#modalEbook").modal('hide');

	            }
	        }); 
	});	
});
	