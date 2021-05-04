'use strict';
const closeBtn = document.querySelector('.--vod > .btn-close');
const vodBtn = document.querySelector('.btn.--vod');
const vod = document.querySelector('.card.--vod');
const moreToggler = document.querySelector('.update__toggler');
console.log(moreToggler);
const moreMenu = document.querySelector('.update__menu');
console.log(moreMenu);

if( vodBtn != null ||vod != null ){
    closeBtn.addEventListener('click', (e)=>{
    vod.classList.add('hide');
    });

    vodBtn.addEventListener('click', (e)=>{
        vod.classList.remove('hide');
    });
}

if( moreToggler != null ||moreMenu != null ){
    moreToggler.addEventListener('click', (e)=>{
        moreMenu.classList.toggle('--open');
    });
}