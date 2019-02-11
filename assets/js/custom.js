$('.menubar').on('click',function(){
	$('.content-menu-left').toggleClass('show-content-menu-left');
	$('.content-right').toggleClass('show-content-right');
});

$(window).scroll(function(){
 if($(this).scrollTop() > 280){
 	$(".header").addClass('headerscroll');
 	$(".logoTop img").attr('src','images/logo-hijau.png');
 }
 if($(this).scrollTop() < 280){
 	$(".header").removeClass('headerscroll');
 	$(".logoTop img").attr('src','images/logo-putih.png');
 }
});


function openNav() {
  $("#mySidenav").css("width","65%");
  $(".mask_menutop").css('display','block');
}

function closeNav() {
  $("#mySidenav").css("width","0");
  $(".mask_menutop").css('display','none');
}

