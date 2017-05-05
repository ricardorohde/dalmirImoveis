var statusImovel;
var filtro = {
    key_word : "",
    cod_bairro : "-1",
    cod_tipo: "-1",
    cod_transacao: "-1",
    quarto_max: "-1",
    quarto_min: "-1",
    area_min: "-1",
    area_max: "-1",
    valor_min: "-1",
    valor_max: "-1",
    order_attr: "",
    order_list: "asc",
    diferencial: Array(),
    mode: "",
    imoveis_count: '0',
    cod_imovel: '-1',
    num_page: '1',
    pointer:'next',
    pagination: 'false'
}

$(function() {

    if((getParameterByName('c', $(location).attr('href')) != '') && (getParameterByName('c', $(location).attr('href')) != null))
    {
            filtro.cod_imovel = getParameterByName('c', $(location).attr('href')); 
            filtro.mode = 'update_imovel';
            $.ajax({
                url: 'data/search/searchData.php',
                type: 'post',
                data: filtro,
                success: function(response){
                    console.log(response);
                    var parsed = JSON.parse(response);
                    putValuesImovel(parsed);
                }
            }); 
    }

	$("#enviar-imovel").click(function()
	{
		cadastraImovel();
	});


    // preventing page from redirecting
    $("html").on("dragover", function(e) {
        e.preventDefault();
        e.stopPropagation();
        $("h1").text("Arraste aqui");
    });

    $("html").on("drop", function(e) { e.preventDefault(); e.stopPropagation(); });

    // Drag enter
    $('.upload-area').on('dragenter', function (e) {
        e.stopPropagation();
        e.preventDefault();
        $("h1").text("Arraste");
    });

    // Drag over
    $('.upload-area').on('dragover', function (e) {
        e.stopPropagation();
        e.preventDefault();
        $("h1").text("Arraste");
    });

    // Drop
    $('.upload-area').on('drop', function (e) {
        e.stopPropagation();
        e.preventDefault();

        $("h1").text("Upload");

        var file = e.originalEvent.dataTransfer.files;
        var fd = new FormData();

        fd.append('file', file[0]);

        uploadData(fd);
    });

    // Open file selector on div click
    $("#uploadfile").click(function(){
        $("#file").click();
    });

    // file selected
    $("#file").change(function(){
        var fd = new FormData();

        var files = $('#file')[0].files[0];

        fd.append('file',files);

        uploadData(fd);
    });
});

// Sending AJAX request and upload file
function uploadData(formdata){

    $.ajax({
        url: 'data/imovel/upload.php',
        type: 'post',
        data: formdata,
        contentType: false,
        processData: false,
        // dataType: 'json',
        success: function(response){
        	console.log(response);
            addThumbnail(response);
        }
    });
}

// Added thumbnail
function addThumbnail(data){
    $("#uploadfile h1").remove();
    var len = $("#uploadfile div.thumbnail").length;

    var num = Number(len);
    num = num + 1;

    var parsed_data = JSON.parse(data);
    var name = parsed_data.name;
    var size = convertSize(parsed_data.size);
    var src = parsed_data.src;

    // Creating an thumbnail
    $("#uploadfile").append('<div id="thumbnail_'+num+'" class="thumbnail"></div>');
    $("#thumbnail_"+num).append('<img src="'+src+'" width="100%" height="78%">');
    $("#thumbnail_"+num).append('<span class="size">'+size+'<span>');

}

// Bytes conversion
function convertSize(size) {
    var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
    if (size == 0) return '0 Byte';
    var i = parseInt(Math.floor(Math.log(size) / Math.log(1024)));
    return Math.round(size / Math.pow(1024, i), 2) + ' ' + sizes[i];
}

function getFilename(url)
{
   if (url)
   {
      var m = url.toString().replace(/^.*[\\\/]/, '');
      if (m && m.length > 1)
      {
         return m;
      }
   }
   return "";
}

function getBase64Files(object)
{
	var sources = Array() ;
	
	
	$(".upload-area img").each(function(){
		sources.push(getFilename($(this).attr('src')));
	});
	
	// $(".dz-image img").each(function() {
	//   sources.push($(this).attr("src"));
	// });

	object['images'] = sources;


}

function getInputs(object)
{
	object['titulo_imovel'] = $("#titulo-imovel").val();
	object['endereco_imovel'] = $("#endereco-imovel").val();
	object['valor_imovel'] = $("#valor-imovel").val();
	object['cod_tipo'] = $("#tipo-imovel").val();
	object['cod_bairro'] = $("#select-bairros").val();
	object['transacao_imovel'] = $("#transacao-imovel").val();
	object['quartos_imovel'] = $("#quartos-imovel").val();
	object['banheiros_imovel'] = $("#banheiros-imovel").val();
	object['suite_imovel'] = $("#suite-imovel").val();
	object['descricao'] = $("#txtEditor").Editor("getText");
	object['video_imovel'] = $("#video-imovel").val();
	object['imovel_garagem'] = $("#imovel-garagem").val();
	object['area_imovel'] = $("#area-imovel").val();
}

function getCaracter(object)
{

	var params = Array();
	$("#imovel-caracter input[type=checkbox]").each(function(){
		
		if($(this).is(":checked"))
		{	
			params.push($(this).val());

		}
	});

	object['diferenciais'] = params;
}

function cadastraImovel()
{
	var paramsImovel = {
		status:'insert',
		cod_imovel:'0'
	};

	getInputs(paramsImovel);
	getBase64Files(paramsImovel);
	getCaracter(paramsImovel);

	$.ajax({
	    type: 'POST',
	    url: 'data/imovel/imoveisData.php',
	    // dataType: 'json',
	    data: paramsImovel,
	    success: function(data) 
	    { 
                console.log(data);
	    		var parsed_data = JSON.parse(data);
	    		$("#modalResponse .modal-body").html('');	    		

	    		statusImovel = parsed_data["status"] == "success";
	    		if(parsed_data["status"] == "success")
	    		{
	    			$("#modalResponse .modal-body").html('<p><div class="alert alert-success"><strong>Cadastro de Imóvel!</strong> Imóvel cadastrado com sucesso.</div></p>');
	    		}

	    		if(parsed_data["status"] == "error")
	    		{
	    			$("#modalResponse .modal-body").html('<p><div class="alert alert-danger"><strong>Cadastro de Imóvel!</strong> Erro no cadastro do Imóvel.</div></p>');
	    		}
	    		$("#modalResponse").modal();
	   	}
	    
	});


}

function actionImovel()
{
	if(statusImovel)
	{
		location.reload();
	}else{
		$("#modalResponse").modal("hide");
	}
}

function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}

function putValuesImovel($object)
{
    console.log($object);

    $("#titulo-imovel").val($object.titulo);
    $("#endereco-imovel").val($object.endereco);
    $("#valor-imovel").val($object.valor);
    $("#tipo-imovel").val($object.cod_tipo);
    $("#select-bairros").val($object.cod_bairro).prop('selected', true);
    $("#transacao-imovel").val($object.cod_transacao);
    $("#quartos-imovel").val($object.quartos);
    $("#banheiros-imovel").val($object.banheiro);
    $("#suite-imovel").val($object.suite);
    $(".Editor-editor").html($object.descricao);
    $("#imovel-garagem").val($object.garagem);
    $("#area-imovel").val($object.area);    

    // $("#imovel-caracter input").each(function(){
    //     for(var i = 0; i < $object.cod_dif.length; i++)
    //     {
    //         console.log($(this).val());
    //         if($(this).val() == $object.cod_dif[i])
    //         {
    //             $(this).attr("checked", "checked");
    //         }
    //     }

        
    // });
}
