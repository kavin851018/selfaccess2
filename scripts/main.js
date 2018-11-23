$(document).ready(function(){
	//semantic ui dropdown
	$('.ui.dropdown.item').dropdown({
		on: 'hover',
	});
    //main menu visibility
	$('.main.menu').visibility({
    	type: 'fixed',
    });
    $('.overlay').visibility({
        type: 'fixed',
        offset: 80
    });
    //semantic ui tab
    $('.menu .item').tab();

    var height = $('.ui.segment.main .main.container .segment.data').css("height");
    if(height > 450){
        $('p.toTop').show();
    }
    else{
        $('p.toTop').hide();
    }
});