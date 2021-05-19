'use strict';
var closeBtn = document.querySelectorAll('.--vod > .btn-close');
var vodBtn = document.querySelectorAll('.btn.--vod');
var vod = document.querySelectorAll('.card.--vod');
var moreToggler = document.querySelectorAll('.update__toggler');
var moreMenu = document.querySelectorAll('.update__menu');

//preview btn open close
vodBtn.forEach( (btn, idx)=>{
    if( btn != null || vod[idx] != null ){
        closeBtn.forEach( cBtn => {
            cBtn.addEventListener('click', (e)=>{
                vod[idx].classList.add('hide');
            });
        });
        

        btn.addEventListener('click', (e)=>{
            vod[idx].classList.remove('hide');
        });
    }
});

//edit delete btn open close
if( moreToggler != null || moreMenu != null ){
    moreToggler.forEach( (btn, idx, btns) =>{
        btn.addEventListener('click', (e)=>{
            console.log(e);
            moreMenu[idx].classList.toggle('--open');
        });
    });
}

//when scroll add new dom elements to list again 
window.addEventListener('scroll', (e)=>{
    closeBtn = document.querySelectorAll('.--vod > .btn-close');
    vodBtn = document.querySelectorAll('.btn.--vod');
    vod = document.querySelectorAll('.card.--vod');
    moreToggler = document.querySelectorAll('.update__toggler');
    moreMenu = document.querySelectorAll('.update__menu');

    //preview btn open close
    vodBtn.forEach( (btn, idx)=>{
        if( btn != null || vod[idx] != null ){
            closeBtn.forEach( cBtn => {
                cBtn.addEventListener('click', (e)=>{
                    vod[idx].classList.add('hide');
                });
            });
            
    
            btn.addEventListener('click', (e)=>{
                vod[idx].classList.remove('hide');
            });
        }
    });

    //edit delete btn open close
    if( moreToggler != null || moreMenu != null ){
        moreToggler.forEach( (btn, idx, btns) =>{
            btn.addEventListener('click', (e)=>{
                console.log(e);
                moreMenu[idx].classList.toggle('--open');
            });
        });
    }
})