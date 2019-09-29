

const initSetUp = ()    =>  {
    if (null === localStorage.getItem('config') ){
        localStorage.setItem('config',{});
    }
    let theme = localStorage.getItem('theme');

    if (theme === "dark"){

        $($('head')).first().append('<link rel="stylesheet" id="dark_theme" href="/css/dark.css">');
        
    }
    const previous = document.querySelector('.active').classList.toggle('active');
    const [,currentURI] = location.pathname.split('/') || '/';
    const uriPathname = currentURI || '/';
    Array.from(document.querySelectorAll('.nav-link')).forEach(node => {
        let href =  node.getAttribute('href').split('/')[1] || '/' ;
        node.classList.toggle( 'active',!!( href === uriPathname ) );
        
    });
}
initSetUp();
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



