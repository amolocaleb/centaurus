const mailControls = () =>  {
    document.querySelectorAll('#mail_minimize,#mail_expand,#mail_close,#create_email').forEach(el => {
        el.addEventListener('click',(e)=>{
            
            mailControlClickHandler(el.id)
            });
    });
};

mailControls();

const mailControlClickHandler = (id) =>  {
    const handler = {
        matchId : function (id) {
            if ('mail_expand' === id) {
                this.expand();
            } else if ('mail_minimize' === id) {
                this.minimize();
            } else if ('mail_close' === id) {
                this.close();
            } else if ('create_email' === id) {
                this.openMailArea();
            }

        },
        expand : function () {
           let el = document.querySelector('#mailWrapper');
           el.classList.remove('d-none');
        },
        minimize : function () {
           let el = document.querySelector('#mailWrapper');
           el.classList.add('d-none');
           
        },
        close : function () {
           let el = document.querySelector('.mail-text-area');
           el.classList.add('d-none');
        },
        openMailArea : function () {
            let el = document.querySelector('.mail-text-area');
           el.classList.remove('d-none');
        
        },
    };

    handler.matchId(id);
};

const openCompose = () => {
    const url = location.href.split('#',2);
    
    if (url.length > 1) {
        if ('compose' === url[1].toLowerCase()) {
            mailControlClickHandler('create_email');
        }
    }
}

openCompose();

const resizeMailPopUp = () => {
    
};