
$('.header .nav ').addClass('d-none');

$('.header .nav').before('<button class="navbutton"><i class="fas fa-bars fa-lg"></i></button>');

$('.navbutton').click (function(){
	$('.header .nav').toggleClass('d-none');
	
})


$('.nav').append('<li class="optionsnavi"><a href="settings.php"> <i class="fas fa-cog fa-lg "></i></a> <li class="optionsnavi"><a href="support.php"><i class="fas fa-life-ring fa-lg "></i></a></li>  <li class="optionsnavi"><a href="logout.php"><i class="fas fa-power-off fa-lg"></i></a></li> ');



$('#upload #imageTable .primarylink').prepend('<i class="far fa-file fa-lg modern" style="margin-right:4px;"></i>');
$('#upload #imageTable tr td:nth-child(3)> span').before('<i class="fas fa-weight-hanging fa-lg  modern" style="margin-right:4px;"></i>');
$('#upload #imageTable tr td:nth-child(4) span').before('<i class="fas fa-user fa-lg modern" style="margin-right:4px;"></i>');
$('#upload #imageTable tr td:nth-child(5) span').before('<i class="far fa-calendar-alt fa-lg modern" style="margin-right:4px;"></i>');
$('#upload #imageTable tr.folder  a').prepend('<i class="fas fa-folder fa-lg modern" style="margin-right:4px;"></i>');



$('.main .edit-nav:first').prepend('<a href="#" id="" class="showmenu" >  <i class="fas fa-bars"></i></a>');

$('.btn-rwd-menu').click(function(){
	$('.nav').toggleClass('responsive');
	
});

$('.showmenu').click(function(){
	$('#sidebar').toggleClass('d-none');
	$('#maincontent').toggleClass('max-width');
	$('.wrapper table').toggleClass('max-width');
});

$('code').on('click',function() {
    var rng, sel;
    if ( document.createRange ) {
        rng = document.createRange();
        rng.selectNode( this )
        sel = window.getSelection();
        var strSel = ''+sel;
        if (!strSel.length) {
            sel.removeAllRanges(); 
            sel.addRange( rng );
        }
    } else {
        var rng = document.body.createTextRange();
        rng.moveToElementText( this );
        rng.select();
    }
});



var plugonoff = $('#plugins .toggleEnable');
var plugtable = $('#plugins tbody');
var $onplug = $('#plugins .onplug');
var offplug = $('#plugins .offplug');
var allplug = $('#plugins .allplug');

plugonoff.html('<i class="fas fa-power-off fa-lg"></i>');

plugtable.prepend("<div style='width:300px;padding:0;'><button class='onplug plug'><i class='fas fa-power-off'></i></button><button class='offplug plug'><i class='fas fa-power-off'></i></button> <button class='allplug plug'><i class='fas fa-power-off' style='color:#9b0101 !important;'></i> / <i class='fas fa-power-off' style='color:#308000 !important'></i></button></div>");

$('#plugins .onplug').click(function(){
$('.enabled').fadeIn();	
$('.disabled').hide();
})

$('#plugins .offplug').click(function(){
$('.enabled').hide();	
$('.disabled').fadeIn();
})

$('#plugins .allplug').click(function(){
	$('.enabled').fadeIn();
	$('.disabled').fadeIn();
});


//light theme components 


$('#components .compdiv').find('.editable').after(' <td style="width:80px;font-size:10px;border:solid 1px #000;margin-left:10px;text-align:center;display:inline-block;margin-bottom:10px;cursor:pointer;" class="show-textarea"> show content</td>');

$('.clonethiscomponent').click(function(){
$(this).closest('.compdiv').clone().appendTo($(this).parents('.compdiv')).find('.compslugcode').html(" 'cloned_components' ");


})



$('#components .compdiv textarea').hide();


$('.show-textarea').click(function(){

$(this).parents('.compdiv').find('textarea').toggle();	
	
})

$('#pages .secondarylink a').html('<i class="fas fa-search"></i>');

$('.pagetitle a').addClass('linker');


//adress add
$('.linker').each( function(i) {
  $(this).after(' <div class="link-light-theme"> <i class="fas fa-window-maximize" style="margin-right:3px;"></i>' + $('.secondarylink a').eq(i).attr('href')+'</div>');
});


//addclock

