let theme = window.localStorage.getItem('theme');

if (theme === "dark"){
    $($('head')).first().append('<link rel="stylesheet" id="dark_theme" href="/css/dark.css">');
}

$(document).ready( function() {
    let top_header_area = $('.top-header-area');
    if ($(window).scroll()) {
        if($(window).scrollTop() > $(top_header_area).first().height()){
            $('.app-header').addClass('fixed-top');
        }else{
            $('.app-header').removeClass('fixed-top');
        }
    }
    
    $('button.submit').click( function (){
        if( $('#dark_theme').length === 0)
        {
            window.localStorage.setItem('theme','dark');
            $($('head')).first().append('<link rel="stylesheet" id="dark_theme" href="/css/dark.css">');
        }else{
            $('#dark_theme').remove();
            window.localStorage.removeItem('theme');
        }
        
    });
});