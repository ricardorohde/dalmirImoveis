Number.prototype.formatMoney = function(c, d, t){
var n = this, 
    c = isNaN(c = Math.abs(c)) ? 2 : c, 
    d = d == undefined ? "." : d, 
    t = t == undefined ? "," : t, 
    s = n < 0 ? "-" : "", 
    i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))), 
    j = (j = i.length) > 3 ? j % 3 : 0;
   return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
 };


	function numberWithCommas(x) {
		return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	}

// mystring.replace('/r','/');	

	$(window).load(function(data){
	    console.log(data);

	    $(".rightLabel").html( numberWithCommas( $(".rightLabel").html().replace(',','') ) );
	    
	    $(".rightLabel").bind("DOMSubtreeModified",function(){
	    	$(".rightLabel").html( numberWithCommas( $(".rightLabel").html().replace(',','').replace(',','') ) );
	    });

	    $(".leftLabel").html( numberWithCommas( $(".leftLabel").html().replace(',','').replace(',','') ) );
	    
	    $(".leftLabel").bind("DOMSubtreeModified",function(){
	    	$(".leftLabel").html( numberWithCommas( $(".leftLabel").html().replace(',','').replace(',','') ) );
	    });	

	    // console.log($(".valor-template-imovel").html());
	    // var teste = $(".valor-template-imovel").html().toString();
	    // $(".valor-template-imovel").html( teste.replace('.00','') );
	    // $(".valor-template-imovel").html( $(".valor-template-imovel").html().formatMoney(2, '.', ',') );
	    // $(".valor-template-imovel").html(numberWithCommas
	});