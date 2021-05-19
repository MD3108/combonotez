'use strict';
const closeBtn = document.querySelector('.--vod > .btn-close');
const vodBtn = document.querySelector('.cb-combo__btn.--vod');
const vod = document.querySelector('.card.--vod');
const moreToggler = document.querySelector('.update__toggler');
const moreMenu = document.querySelector('.update__menu');

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