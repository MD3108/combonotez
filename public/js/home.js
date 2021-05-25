'use strict';

let descEls = document.querySelectorAll('.section.--how-to-use .desc__el');


let fighter = document.querySelector('.section.--how-to-use .card .fighter');
let assist = document.querySelector('.section.--how-to-use .card .assist');
let details = document.querySelector('.section.--how-to-use .card .r-header__container');
let noteName = document.querySelector('.section.--how-to-use .card .title.--note');
let preview = document.querySelector('.section.--how-to-use .card .btn.--vod');
let notation = document.querySelector('.section.--how-to-use .card .body__main');
let creator = document.querySelector('.section.--how-to-use .card .user__info');
let interactions = document.querySelector('.section.--how-to-use .card .interactions');


descEls.forEach( descEl => {
    descEl.addEventListener('mouseover', e => {
        if(descEl.innerHTML.includes('Fighter')){
            descEl.classList.add('--active');
            fighter.classList.add('--active');
        }
        if(descEl.innerHTML.includes('Assist')){
            descEl.classList.add('--active');
            assist.classList.add('--active');
        }
        if(descEl.innerHTML.includes('Note Name')){
            descEl.classList.add('--active');
            noteName.classList.add('--active');
        }
        if(descEl.innerHTML.includes('Creator')){
            descEl.classList.add('--active');
            creator.classList.add('--active');
        }
        if(descEl.innerHTML.includes('Categories')){
            descEl.classList.add('--active');
            details.classList.add('--active');
        }
        if(descEl.innerHTML.includes('Preview')){
            descEl.classList.add('--active');
            preview.classList.add('--active');
        }
        if(descEl.innerHTML.includes('Notation')){
            descEl.classList.add('--active');
            notation.classList.add('--active');
        }
        if(descEl.innerHTML.includes('Interactions')){
            descEl.classList.add('--active');
            interactions.classList.add('--active');
        }
    });
    descEl.addEventListener('mouseout', e => {
        if(descEl.innerHTML.includes('Fighter')){
            descEl.classList.remove('--active');
            fighter.classList.remove('--active');
        }
        if(descEl.innerHTML.includes('Assist')){
            descEl.classList.remove('--active');
            assist.classList.remove('--active');
        }
        if(descEl.innerHTML.includes('Note Name')){
            descEl.classList.remove('--active');
            noteName.classList.remove('--active');
        }
        if(descEl.innerHTML.includes('Creator')){
            descEl.classList.remove('--active');
            creator.classList.remove('--active');
        }
        if(descEl.innerHTML.includes('Categories')){
            descEl.classList.remove('--active');
            details.classList.remove('--active');
        }
        if(descEl.innerHTML.includes('Preview')){
            descEl.classList.remove('--active');
            preview.classList.remove('--active');
        }
        if(descEl.innerHTML.includes('Notation')){
            descEl.classList.remove('--active');
            notation.classList.remove('--active');
        }
        if(descEl.innerHTML.includes('Interactions')){
            descEl.classList.remove('--active');
            interactions.classList.remove('--active');
        }
    });
});

fighter.addEventListener('mouseover', e => {
    if(e.currentTarget.classList.contains('fighter')){
        e.currentTarget.classList.add('--active');
        descEls[0].classList.add('--active');
    }
});
fighter.addEventListener('mouseout', e => {
    if(e.currentTarget.classList.contains('fighter')){
        e.currentTarget.classList.remove('--active');
        descEls[0].classList.remove('--active');
    }
});

assist.addEventListener('mouseover', e => {
    if(e.currentTarget.classList.contains('assist')){
        e.currentTarget.classList.add('--active');
        descEls[1].classList.add('--active');
    }
});
assist.addEventListener('mouseout', e => {
    if(e.currentTarget.classList.contains('assist')){
        e.currentTarget.classList.remove('--active');
        descEls[1].classList.remove('--active');
    }
});

noteName.addEventListener('mouseover', e => {
    if(e.currentTarget.classList.contains('--note')){
        e.currentTarget.classList.add('--active');
        descEls[2].classList.add('--active');
    }
});
noteName.addEventListener('mouseout', e => {
    if(e.currentTarget.classList.contains('--note')){
        e.currentTarget.classList.remove('--active');
        descEls[2].classList.remove('--active');
    }
});

creator.addEventListener('mouseover', e => {
    if(e.currentTarget.classList.contains('user__info')){
        e.currentTarget.classList.add('--active');
        descEls[3].classList.add('--active');
    }
});
creator.addEventListener('mouseout', e => {
    if(e.currentTarget.classList.contains('user__info')){
        e.currentTarget.classList.remove('--active');
        descEls[3].classList.remove('--active');
    }
});

details.addEventListener('mouseover', e => {
    if(e.currentTarget.classList.contains('r-header__container')){
        e.currentTarget.classList.add('--active');
        descEls[4].classList.add('--active');
    }
});
details.addEventListener('mouseout', e => {
    if(e.currentTarget.classList.contains('r-header__container')){
        e.currentTarget.classList.remove('--active');
        descEls[4].classList.remove('--active');
    }
});

preview.addEventListener('mouseover', e => {
    if(e.currentTarget.classList.contains('--vod')){
        e.currentTarget.classList.add('--active');
        descEls[5].classList.add('--active');
    }
});
preview.addEventListener('mouseout', e => {
    if(e.currentTarget.classList.contains('--vod')){
        e.currentTarget.classList.remove('--active');
        descEls[5].classList.remove('--active');
    }
});

notation.addEventListener('mouseover', e => {
    if(e.currentTarget.classList.contains('body__main')){
        e.currentTarget.classList.add('--active');
        descEls[6].classList.add('--active');
    }
});
notation.addEventListener('mouseout', e => {
    if(e.currentTarget.classList.contains('body__main')){
        e.currentTarget.classList.remove('--active');
        descEls[6].classList.remove('--active');
    }
});

interactions.addEventListener('mouseover', e => {
    if(e.currentTarget.classList.contains('interactions')){
        e.currentTarget.classList.add('--active');
        descEls[7].classList.add('--active');
    }
});
interactions.addEventListener('mouseout', e => {
    if(e.currentTarget.classList.contains('interactions')){
        e.currentTarget.classList.remove('--active');
        descEls[7].classList.remove('--active');
    }
});
