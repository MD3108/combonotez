'use strict';
const closeBtn = document.querySelector('.--vod > .btn-close');
const vodBtn = document.querySelector('.btn.--vod');
const vod = document.querySelector('.card.--vod');
const moreToggler = document.querySelectorAll('.update__toggler');
console.log(moreToggler);
const moreMenu = document.querySelectorAll('.update__menu');



if( vodBtn != null ||vod != null ){
    closeBtn.addEventListener('click', (e)=>{
    vod.classList.add('hide');
    });

    vodBtn.addEventListener('click', (e)=>{
        vod.classList.remove('hide');
    });
}

if( moreToggler != null || moreMenu != null ){
    moreToggler.forEach( (btn, idx, btns) =>{
        btn.addEventListener('click', (e)=>{
            console.log(e);
            moreMenu[idx].classList.toggle('--open');
        });
    });
    
}