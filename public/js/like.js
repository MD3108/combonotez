'use strict';

var forms = document.querySelectorAll('.form-js');
var fForms = document.querySelectorAll('.f-form-js');
var authUser = document.querySelector('.user-id-js');

if(authUser.value == "null" ){
    forms.forEach( form => {
        form.addEventListener('click', e=>{
            document.querySelector('.filter .alert-primary.--notes').classList.toggle('hide');
        });
        
    });
    document.querySelector('.filter .alert-primary.--notes .btn-close').addEventListener('click', e =>{
        document.querySelector('.filter .alert-primary.--notes').classList.add('hide');
    });
    //*Favorite
    fForms.forEach( form => {
        form.addEventListener('click', e=>{
            document.querySelector('.filter .alert-primary.--notes').classList.toggle('hide');
        });
        
    });
}