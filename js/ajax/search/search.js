var diferencial_var = Array();

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
	diferencial: diferencial_var,
	mode: "",
	imoveis_count: '0',
	cod_imovel: '-1',
	num_page: '1',
	pointer:'next',
	pagination: 'false'
}

function emptyFiltro()
{
	filtro.cod_bairro = '-1';
	filtro.cod_tipo = '-1';
	filtro.key_word = '';
	filtro.quarto_max = '-1';
	filtro.quarto_min = '-1';
	filtro.area_min = '-1';
	filtro.area_max = '-1';
	filtro.valor_min = '-1';
	filtro.valor_max = '-1';
	filtro.order_attr = "";
	filtro.order_list = "asc";
	filtro.diferencial = Array();
	filtro.mode = '';
	filtro.cod_imovel = '-1';
	filtro.num_page = '1';
	filtro.imoveis_count = '0';
    filtro.pointer = 'next';
    filtro.pagination = 'false';
}

function getCharacterSearch()
{
	diferencial_var = Array();

	$("#imovel-caracter input[type=checkbox]").each(function(){
		
		if($(this).is(":checked"))
		{	
			diferencial_var.push($(this).val());
		}
	});

	return diferencial_var;	
}

function getFiltroSession($mode)
{
	$.ajax({
        url: 'data/search/returnFiltroSearch.php',
        type: 'post',
        success: function(data){  

        	var parsed_data = JSON.parse(data);
        	if(parsed_data.status == 'success')
        	{
        		
        		console.log(parsed_data);
				filtro.cod_bairro = parsed_data.object.cod_bairro;
				filtro.key_word = parsed_data.object.key_word;
				filtro.quarto_max = parsed_data.object.quarto_max;
				filtro.quarto_min = parsed_data.object.quarto_min;
				filtro.area_min = parsed_data.object.area_min;
				filtro.area_max = parsed_data.object.area_max;
				filtro.valor_min = parsed_data.object.valor_min;
				filtro.valor_max = parsed_data.object.valor_max;
				filtro.order_attr = parsed_data.object.order_attr;
				filtro.order_list = parsed_data.object.order_list;

				if(parsed_data.object.diferencial){
					filtro.diferencial = parsed_data.object.diferencial;
				}
				
				filtro.mode = parsed_data.object.mode;
				filtro.cod_imovel = parsed_data.object.cod_imovel;
				filtro.num_page = parsed_data.object.num_page;
				filtro.imoveis_count = parsed_data.object.imoveis_count;
				filtro.pointer = parsed_data.object.pointer;
				filtro.pagination = parsed_data.object.pagination;
        	}else{
        		indexCollector($mode);
        	}
        	
        }
    });	
}

function indexCollector($mode)
{	
	filtro.cod_bairro = $("#bairroImovel").val();
	filtro.cod_tipo = $("#tipoImovel").val();
	filtro.key_word = $("#keyImovel").val();
	filtro.quarto_max = $("#quartosMax").val();
	filtro.quarto_min = $("#quartosMin").val();
	filtro.area_min = $("#areaMin").val();
	filtro.area_max = $("#areaMax").val();
	filtro.valor_min = $(".leftLabel").html();
	filtro.valor_max = $(".rightLabel").html();
	filtro.order_attr = "";
	filtro.order_list = "";
	filtro.diferencial = getCharacterSearch();
	filtro.mode = $mode;
}

function indexCollectiorWithPagination($mode)
{
	 getFiltroSession($mode);
	 filtro.imoveis_count = '9';
	 filtro.num_page = '1';
	 filtro.pointer = 'next';
	 filtro.pagination = 'true';
}


function actionShowIndex($callBack = null)
{		
	filtro.imoveis_count = '9';
	filtro.num_page = '1';
	filtro.pagination = 'true';

    $.ajax({
        url: 'data/search/searchData.php',
        type: 'post',
        data: filtro,        
        success: function(data){
            // console.log(data);  	
            $("#property-gallery").html(data);
            if ($callBack != null) { $callBack(); }
        }
    });	
}

function actionShowImoveisAdmin()
{	
	filtro.mode = 'page_admin';
    $.ajax({
        url: 'data/search/searchData.php',
        type: 'post',
        data: filtro,        
        success: function(data){
            // console.log(data);  	
            $(".list-admin").html(data);
            // if ($callBack != null) { $callBack(); }
        }
    });
}

function actionSearchIndex()
{
    $.ajax({
        url: 'data/search/searchData.php',
        type: 'post',
        data: filtro,        
        success: function(data){
        	console.log(data);
        	var parsed_data = JSON.parse(data);
            $(location).attr('href', parsed_data.page);

        }
    });	
}



function searchAjax($mode, $callBack = null)
{
	filtro.mode = $mode;
	switch($mode)
	{
	    case 'index':
	    		console.log($mode);
	        	actionShowIndex($callBack);
	        break;
	    case 'page':
	    		// getFiltroSession();
				indexCollector($mode)
				actionSearchIndex();
	        break;
	    case 'page_generic':
				indexCollector();
	        break;
	    case 'page_admin':
				emptyFiltro();
				actionShowImoveisAdmin();
	        break;	        	        
	    default:
	        //

	}
   
}

function searchByPage($page)
{
	 indexCollectiorWithPagination('page');
	 filtro.num_page = $page;	 
	 actionSearchIndex();
}