'use strict';

var forms = document.querySelectorAll('.form-js');
var authUser = document.querySelector('.user-id-js');
var limiter = 0;

if(authUser.value == "null" ){
    forms.forEach( form => {
        form.addEventListener('click', e=>{
            console.log('u need to log in to like');
            document.querySelector('.filter .alert-primary.--notes').classList.toggle('hide');
        });
        
    });
    document.querySelector('.filter .alert-primary.--notes .btn-close').addEventListener('click', e =>{
        console.log('closebtn')
        document.querySelector('.filter .alert-primary.--notes').classList.add('hide');
    });
}
