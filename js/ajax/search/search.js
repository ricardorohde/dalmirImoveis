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

function setFirstSearch()
{
	filtro.pagination = 'true';
	filtro.imoveis_count = '9';
	filtro.num_page = '1';
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

function getOrderPrice()
{
	
	if($("#order-price"))
	{
		switch($("#order-price").val())
		{
		    case '1':
		    		filtro.order_attr = 'valor';
		    		filtro.order_list = 'desc';
		        break;
		    case '2':
		    		filtro.order_attr = 'valor';
		    		filtro.order_list = 'asc';
		        break;
		    case '3':
					filtro.order_attr = 'area';
		    		filtro.order_list = 'desc';
		        break;
		    case '4':
					filtro.order_attr = 'area';
		    		filtro.order_list = 'asc';
		        break;	        	        
		    default:
		        //
		}
	}
}

function getFiltroSession($mode)
{
	console.log('getFiltroSession');
	return new Promise(function(resolve, reject) {
		$.ajax({
	        url: 'data/search/returnFiltroSearch.php',
	        type: 'post',
	        success: function(data){  
	        	console.log('getFiltroSession Success');
	        	var parsed_data = JSON.parse(data);
	        	if(parsed_data.status == 'success')
	        	{
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
	        		if($mode = 'page_admin'){
	        			emptyFiltro();
	        			filtro.mode = 'page_admin';
	        		}else{
	        			indexCollector($mode);	
	        		}
	        		
	        	}
	        	resolve();

	        },
	        error: reject
	    });	
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
	filtro.valor_min = $(".leftLabel").html().replace(',','').replace(',','');
	filtro.valor_max = $(".rightLabel").html().replace(',','').replace(',','');
	filtro.order_attr = "";
	filtro.order_list = "";
	filtro.diferencial = getCharacterSearch();
	filtro.mode = $mode;
	getOrderPrice();
}

function indexCollectiorWithPagination($mode)
{
	console.log('indexCollectiorWithPagination');
	return getFiltroSession($mode).then(function() {
		console.log('indexCollectiorWithPagination Success');
		filtro.imoveis_count = '9';
		filtro.num_page = '1';
		filtro.pointer = 'next';
		filtro.pagination = 'true';
		return Promise.resolve();
	});
}


function actionShowIndex($callBack = null)
{		
    setFirstSearch();
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

function getParameterByNameS(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}

function actionShowImoveisAdmin($c = null)
{	
	console.log(JSON.stringify(filtro));
	filtro.mode = 'page_admin';
    $.ajax({
        url: 'data/search/searchData.php',
        type: 'post',
        data: filtro,        
        success: function(data){
            // console.log(data);  	
        	var parsed_data = JSON.parse(data);
        	if( !getParameterByNameS('c') ) 
            	$(location).attr('href', parsed_data.page);
            // if( getParameterByNameS('p') ) 
            if($c != null)
            		$c();
            
        }
    });
}

function actionSearchIndex()
{
	console.log('actionSearchIndex', JSON.stringify(filtro));
    $.ajax({
        url: 'data/search/searchData.php',
        type: 'post',
        data: filtro,        
        success: function(data){
        	console.log('actionSearchIndex Success', JSON.stringify(data));
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
				indexCollector($mode);
				setFirstSearch();
				actionSearchIndex();
	        break;
	    case 'page_generic':
				indexCollector();
	        break;
	    case 'page_admin':
				setFirstSearch();				
				actionShowImoveisAdmin();
	        break;	        	        
	    default:
	        //

	}
   
}


function searchByPage($page, $mode = 'page', $load = true)
{
	console.log('searchByPage');
	indexCollectiorWithPagination($mode).then(function() {
		console.log('searchByPage Success');
		filtro.num_page = $page;
		console.log('mode ' + $mode);
		// $mode ='page_admin';
		if($mode == 'page_admin'){	
		// if(true){
			if($load){
				actionShowImoveisAdmin(function(){
					location.reload();
				});
			}else{
				actionShowImoveisAdmin();
			}
			
		}else {
			actionSearchIndex();
		}
	});
}


$(window).load(function(){
	// $("#order-price").change(function(){
	// 	searchAjax('page');	
	// });

	
});
