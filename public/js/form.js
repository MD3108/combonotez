"use strict";
const nextBtns = document.querySelectorAll(".--next");
console.log(nextBtns);
const partsVisible = document.querySelectorAll("[data-visible");
const steps = document.querySelectorAll("[data-step");
const progressbar = document.querySelector(".progress-bar");
console.log(progressbar);
const progressionElements = document.querySelectorAll(".progression__el");
console.log(progressionElements);

isVisible( partsVisible );

nextBtns.forEach( (btn, idx, btns) => {
    btn.addEventListener("click", (e) => {
        let currentBtn = e.currentTarget;
        if(currentBtn.classList.contains("--one")){
            partsVisible[0].setAttribute("data-visible", "false");
            partsVisible[1].setAttribute("data-visible", "true");
            progressbar.setAttribute("aria-valuenow", "25");
            progressbar.style.width = "25%";
            progressionElements[0].classList.add("done");

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
        if(part.getAttribute("data-visible") == "true"){
            part.classList.remove("hide");
        }
        else{
            part.classList.add("hide");
        }
    });
}