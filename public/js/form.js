"use strict";
const nextBtns = document.querySelectorAll(".--next");
const prevBtn = document.querySelector('.btn.--previous');
console.log(prevBtn);
const partsVisible = document.querySelectorAll("[data-visible");
const steps = document.querySelectorAll("[data-step");
const progressbar = document.querySelector(".progress-bar");
const progressionElements = document.querySelectorAll(".progression__el");

isVisible( partsVisible );
prevBtn.classList.add('hide');

prevBtn.addEventListener('click', (e)=>{
    partsVisible.forEach( part => {
        if (part.getAttribute('data-step') == '2' && part.getAttribute('data-visible') == 'true'){
            e.currentTarget.classList.add('hide');
            partsVisible[1].setAttribute("data-visible", "false");
            partsVisible[0].setAttribute("data-visible", "true");
            progressbar.setAttribute("aria-valuenow", "0");
            progressbar.style.width = "0%";
            progressionElements[0].classList.remove("done");
        }
        else if (part.getAttribute('data-step') == '3' && part.getAttribute('data-visible') == 'true'){
            partsVisible[2].setAttribute("data-visible", "false");
            partsVisible[1].setAttribute("data-visible", "true");
            progressbar.setAttribute("aria-valuenow", "25");
            progressbar.style.width = "25%";
            progressionElements[1].classList.remove("done");
        }
        else if (part.getAttribute('data-step') == '4' && part.getAttribute('data-visible') == 'true'){
            partsVisible[3].setAttribute("data-visible", "false");
            partsVisible[2].setAttribute("data-visible", "true");
            progressbar.setAttribute("aria-valuenow", "50");
            progressbar.style.width = "50%";
            progressionElements[2].classList.remove("done");
        }
        isVisible( partsVisible );
    });
});

nextBtns.forEach( (btn, idx, btns) => {
    btn.addEventListener("click", (e) => {
        let currentBtn = e.currentTarget;
        if(currentBtn.classList.contains("--one")){
            partsVisible[0].setAttribute("data-visible", "false");
            partsVisible[1].setAttribute("data-visible", "true");
            progressbar.setAttribute("aria-valuenow", "25");
            progressbar.style.width = "25%";
            progressionElements[0].classList.add("done");
            prevBtn.classList.remove('hide');
        }
        else if(currentBtn.classList.contains("--two")){
            partsVisible[1].setAttribute("data-visible", "false");
            partsVisible[2].setAttribute("data-visible", "true");
            progressbar.setAttribute("aria-valuenow", "50");
            progressbar.style.width = "50%";
            progressionElements[0].classList.add("done");
        }
        else if(currentBtn.classList.contains("--three")){
            partsVisible[2].setAttribute("data-visible", "false");
            partsVisible[3].setAttribute("data-visible", "true");
            progressbar.setAttribute("aria-valuenow", "75");
            progressbar.style.width = "75%";
            progressionElements[0].classList.add("done");
        }
        isVisible( partsVisible );
    });
});



function isVisible ( array ) {
    array.forEach( (part) =>{
        let idxOfProgEl = parseInt(part.getAttribute('data-step'))-1;
        if(part.getAttribute("data-visible") == "true"){
            part.classList.remove("hide");
            progressionElements.forEach(el =>{
                el.classList.remove('currently');
            });
            progressionElements[idxOfProgEl].classList.add('currently');
        }
        else{
            part.classList.add("hide");
        }
    });
}