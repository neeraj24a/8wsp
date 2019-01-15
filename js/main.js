$(document).ready(function(){
    $(".js-mobile-nav-toggle").click(function(){
        if($(this).hasClass('mobile-nav--open')){
            $(this).removeClass('mobile-nav--open').addClass('mobile-nav--close');
            $('.mobile-nav-wrapper').addClass('js-menu--is-open').css({"-webkit-transform":"translateY(67px)"});
        } else {
            $(this).removeClass('mobile-nav--close').addClass('mobile-nav--open');
            $('.mobile-nav-wrapper').removeClass('js-menu--is-open').css({"-webkit-transform":"translateY(-100%)"});
        }
    });
    $.ajax({
        url: base_url + "cart/load",
        method: "POST",
        success: function (data) {
        	data = JSON.parse(data);
            $("#CartCount").html(data.quantity);
        }
    });
});