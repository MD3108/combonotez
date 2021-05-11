"use strict";
const nextBtns = document.querySelectorAll(".--next");
const prevBtn = document.querySelector('.btn.--previous');
console.log(prevBtn);
const partsVisible = document.querySelectorAll("[data-visible");
const steps = document.querySelectorAll("[data-step");
const progressbar = document.querySelector(".progress-bar");
const progressionElements = document.querySelectorAll(".progression__el");

const roster = document.querySelectorAll('.f-select__fighter');
const chosenFighters = document.querySelectorAll('.f-chosen__el');
var limitToThree = [];
let counterFighter =  1;
console.log(limitToThree);

roster.forEach(fighter=>{
    
    let  fighterPath = fighter.childNodes[1].getAttribute('src');
    fighter.addEventListener('click', (e)=>{
        
        if(limitToThree.length >= 3){
            
            limitToThree.splice(2, 1, fighterPath);
            e.currentTarget.previousElementSibling.setAttribute('checked', false);
            e.currentTarget.setAttribute('data-content', `${counterFighter}`);
            counterFighter = 3 ;
            console.log(e.currentTarget.previousElementSibling);
            console.log(limitToThree);
        }
        else{
            
            limitToThree.push(fighterPath);
            e.currentTarget.setAttribute('data-content', `${counterFighter}`);
            if(limitToThree.length == 0){
                chosenFighters[0].style.backgroundImage = '';
            }
            if(limitToThree.length == 1){
                let value = limitToThree[0];
                chosenFighters[0].style.backgroundImage = 'url(' + `${value}`+ ')' ;
            }
            counterFighter ++ ;
            console.log(limitToThree);
        }
    });
});
//setInterval(()=>{
    //
    
    //console.log(limitToThree);
    
//},1020);
//checkedFighters.forEach(checked=>{
//    let value = checked.getAttribute('value');
//    limitToThree.push(value);
//    if(limitToThree.length >=3){
//        limitToThree.splice(limitToThree.length-1, 1, value);
//    }
//});


//From the beginning do check who's visible and hide previous btn 
isVisible( partsVisible );
prevBtn.classList.add('hide');

//Previous Btn allows to go back
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
//Next Btn allows to proceed form
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
            progressionElements[1].classList.add("done");
        }
        else if(currentBtn.classList.contains("--three")){
            partsVisible[2].setAttribute("data-visible", "false");
            partsVisible[3].setAttribute("data-visible", "true");
            progressbar.setAttribute("aria-valuenow", "75");
            progressbar.style.width = "75%";
            progressionElements[2].classList.add("done");
        }
        isVisible( partsVisible );
    });
});


//checks which section should be visible and which stay hidden 
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