
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
	});