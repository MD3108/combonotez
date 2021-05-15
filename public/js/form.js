"use strict";
//all next and previous btns
const nextBtns = document.querySelectorAll(".--next");
const prevBtn = document.querySelector('.btn.--previous');

//data- attribute
const partsVisible = document.querySelectorAll("[data-visible");
const steps = document.querySelectorAll("[data-step");

//progress bar
const progressbar = document.querySelector(".progress-bar");
const progressionElements = document.querySelectorAll(".progression__el");

//roster character choice
const roster = document.querySelectorAll('.f-select__fighter');
const chosenFighters = document.querySelectorAll('.f-chosen__el .el__img');
var limitToThree = [];
let previousFighter;

var fighter1;
var fighter2;
var fighter3;

//check note step
//select all user inserted data in form once final step is reached
nextBtns[nextBtns.length-1].addEventListener('click', (e) => {
    
    //var checkedFighters = document.querySelectorAll('.fighters__select input[type=checkbox]:checked');
    var chosenAssist = document.querySelectorAll('.el__move input[type=radio]:checked');
    var chosenCategories = document.querySelectorAll('.categories__container input[type=checkbox]:checked');
    //var chosenDifficulty = document.querySelector('.difficulty__container input[type=radio]:checked').value;
    var comboName = document.querySelector('.combo__name input[type=text]').value;
    var comboDamage = document.querySelector('.details__damage input[type=number]').value;
    var kiStart = document.querySelector('.details__ki input[name=ki-start]').value;
    var kiEnd = document.querySelector('.details__ki input[name=ki-end]').value;
    var youtubeURL = document.querySelector('.details__youtube input[type=url]').value;
    console.log(document.querySelector('.details__youtube input[type=url]'));

    //fighters used in combo
    // ! create a function that adds checked in right order in an array an base of of this array
    for( let i = 0 ; i <= 3 ; i++){
        if(i == 0 && limitToThree[0] != undefined){
            let imgPath = limitToThree[0];
            let firstFighter = document.querySelector('.fighter img');
            firstFighter.setAttribute('src', `${imgPath}`);
        } else if(i == 1 && limitToThree[1] != undefined){
            let imgPath = limitToThree[1];
            let secondFighter = document.querySelector('.assist__container.--a1 img');
            secondFighter.setAttribute('src', `${imgPath}`);
        } else if(i == 2 && limitToThree[2] != undefined){
            let imgPath = limitToThree[2];
            let thirdFighter = document.querySelector('.assist__container.--a2 img');
            thirdFighter.setAttribute('src', `${imgPath}`);
        }
    }
    //assist
    chosenAssist.forEach( (assist, idx, assits) =>{
        
        if(idx == 0 && assits[idx] != undefined){
            let valueClass = assist.id.substr(3);
            console.log(valueClass);
            document.querySelector('.assist__container.--a1 .assist__move').classList.add(`--${valueClass}`);
            document.querySelector('.assist__container.--a1 .assist__move span').innerHTML = valueClass;
        }else if(idx == 1 && assits[idx] != undefined){
            let valueClass = assist.id.substr(3);
            console.log(valueClass);
            document.querySelector('.assist__container.--a2 .assist__move').classList.add(`--${valueClass}`);
            document.querySelector('.assist__container.--a2 .assist__move span').innerHTML = valueClass;
        }
    });

    chosenCategories.forEach( (category, idx, categories) => {
        let div = document.createElement('div');
        div.classList.add('categories__el');
        div.innerHTML = category.id; 
        console.log(document.querySelector('.categories__list'));
        document.querySelector('.categories__list').appendChild(div);
    });

    //gamepad inputs
    let notation = Object.values(JSON.parse(inputsJSON));
    notation.forEach( (inputs)=>{
        inputs.forEach( input =>{
            let idCounter = 1;
            if(input.includes('x')){
                let span = document.createElement('span');
                span.setAttribute('id', idCounter);
                span.setAttribute('data-type', 'txt');
                span.setAttribute('data-input', `${input}`);
                span.classList.add('input');
                span.classList.add(`--${input}`);
                span.classList.add('--txt');
                span.innerHTML = input;
                idCounter ++;
                document.querySelector('.notation').appendChild(span);
            }
            else{
                let img = document.createElement('img');
                img.setAttribute ('src', `/storage/images/buttons/${input}.png`);
                img.setAttribute('alt', `image of ${input} button`);
                img.setAttribute('id', idCounter);
                img.setAttribute('data-type', 'img');
                img.setAttribute('data-input', `${input}`);
                img.classList.add('input');
                img.classList.add(`--${input}`);
                img.classList.add('--img');
                idCounter ++;
                document.querySelector('.notation').appendChild(img);
            }
        });
    });
    
    console.log('youtubeURL', youtubeURL);
    if(youtubeURL != undefined){
        document.querySelector('.content__body .body__title .btn.--vod').classList.remove('hide');
    } else{
        document.querySelector('.content__body .body__title .btn.--vod').classList.add('hide');
    }

    document.querySelector('.content__body .title.--note').innerHTML = comboName;
    document.querySelector('.damage__value').innerHTML = comboDamage;
    document.querySelector('.ki__el.--begin .ki__value span').innerHTML = kiStart;
    document.querySelector('.ki__el.--end .ki__value span').innerHTML = kiEnd;
    //https://stackoverflow.com/questions/1531093/how-do-i-get-the-current-date-in-javascript
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();
    today = dd + '/' + mm + '/' + yyyy;
    console.log(document.querySelector('.user__info').childNodes[3]);
    document.querySelector('.user__info').childNodes[3].innerHTML = today;
});

//From the beginning do check who's visible and hide previous btn 
isVisible( partsVisible );
prevBtn.classList.add('hide');


//character select
roster.forEach(fighter=>{
    //remove checked even if saved in cache
    fighter.previousElementSibling.checked = false;
    let fighterPath = fighter.childNodes[1].getAttribute('src');

    fighter.addEventListener('click', (e)=>{
        var checkedFighters = document.querySelectorAll('.fighters__select input[type=checkbox]:checked');
        let currentFighter = e.currentTarget;
        let counterFighter =  limitToThree.length+1;
        console.log('limit', limitToThree);
        if (previousFighter == currentFighter.getAttribute('for')){
            

            // ! work here on the remove pin and fighter choice
            
            if(limitToThree.length == 0){
                chosenFighters[0].style.backgroundImage = 'inherit';
            }
            else if(limitToThree.length == 1){
                chosenFighters[limitToThree.length-1].style.backgroundImage = 'inherit' ;
                chosenFighters[limitToThree.length-1].style.textIndent = 'inherit' ;
            }
            else if(limitToThree.length == 2){
                chosenFighters[limitToThree.length-1].style.backgroundImage = 'inherit' ;
                chosenFighters[limitToThree.length-1].style.textIndent = 'inherit' ;
            }
            else if(limitToThree.length == 3){
                chosenFighters[limitToThree.length-1].style.backgroundImage = 'inherit' ;
                chosenFighters[limitToThree.length-1].style.textIndent = 'inherit' ;
            }
            
            limitToThree.pop(fighterPath);
            currentFighter.setAttribute('data-content', `${counterFighter}`);
            previousFighter = '';
            // !
        }
        else{
            console.log(document.querySelectorAll('.fighters__select input[type=checkbox]:checked').length);
            if(limitToThree.length > 2){
                console.log('1');
                //https://stackoverflow.com/questions/51661093/disable-checkboxes-after-a-certain-condition-is-met-using-only-vanilla-js/51661416
                let notChecked = document.querySelectorAll('.fighters__select input[type="checkbox"]:not(:checked)');
                console.log(notChecked.length);
                notChecked.forEach(checkbox => {
                    checkbox.disabled = true;
                });

                //limitToThree.splice(2, 1, fighterPath);
                //currentFighter.previousElementSibling.checked = false;
                //counterFighter = 2 ;
                currentFighter.setAttribute('data-content', '3');
                previousFighter = currentFighter.getAttribute('for');
            }
            else{
                console.log('2');
                limitToThree.push(fighterPath);
                currentFighter.setAttribute('data-content', `${counterFighter}`);
                if(limitToThree.length == 0){
                    console.log('2 A');
                    chosenFighters[0].style.backgroundImage = 'inherit';
                }
                else if(limitToThree.length == 1){
                    console.log('2 B');
                    let value = limitToThree[0];
                    console.log('tohan bug', value);
                    chosenFighters[0].style.backgroundImage = 'url(' + `${value}`+ ')' ;
                    chosenFighters[0].style.textIndent = '1000%' ;
                    document.getElementById('choice_1').setAttribute('value', currentFighter.previousElementSibling.getAttribute('value'));

                }
                else if(limitToThree.length == 2){
                    console.log('2 C');
                    let value = limitToThree[1];
                    chosenFighters[1].style.backgroundImage = 'url(' + `${value}`+ ')' ;
                    chosenFighters[1].style.textIndent = '1000%' ;
                    document.getElementById('choice_2').setAttribute('value', currentFighter.previousElementSibling.getAttribute('value'));
                }
                else if(limitToThree.length == 3){
                    console.log('2 D');
                    let value = limitToThree[2];
                    chosenFighters[2].style.backgroundImage = 'url(' + `${value}`+ ')' ;
                    chosenFighters[2].style.textIndent = '1000%' ;
                    document.getElementById('choice_3').setAttribute('value', currentFighter.previousElementSibling.getAttribute('value'));
                    
                }
                previousFighter = currentFighter.getAttribute('for');
            }
            
        }
    });
});

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
            document.querySelector('.notation').innerHTML= '';
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


    