// * render.js
'use strict';
// * --------------------------------- //
// * Declare variables or constants * //
// * ------------------------------- //
console.log(arrayNotation);
const notationFields = document.querySelectorAll('.notation');
//const createBtn = document.querySelector('.--create');
var arrayConvert = [];
var inputsJSON = arrayNotation;
var noticeInputs = ["L", "M", "S", "H", "A1", "A2", "SD", "DR", "KC", "VN", "SPARK"];

// * ------------------ //
// *        Main     * //
// * ---------------- //
// *********************
// * ------------------ //
// * Event Listeners * //
// * ---------------- //
// *********************

// * Use the Json convert back to array an print out values in DOM as Buttons
window.addEventListener('DOMContentLoaded', (e) => {
    //let notation = Object.values(JSON.parse(inputsJSON));
    notationFields.forEach( notationField =>{
        let notation = Object.values(JSON.parse(inputsJSON));
        console.log(notation)
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
                    notationField.appendChild(span);
                }
                else{
                    let img = document.createElement('img');
                    img.setAttribute ('src', `/storage/images/buttons/${input}.png`)
                    img.setAttribute('alt', `image of ${input} button`);
                    img.setAttribute('id', idCounter);
                    img.setAttribute('data-type', 'img');
                    img.setAttribute('data-input', `${input}`);
                    img.classList.add('input');
                    img.classList.add(`--${input}`);
                    img.classList.add('--img');
                    idCounter ++;
                    notationField.appendChild(img);
                }
            });
        });
    });
    
});
// * ------------------- //
// * Custom Functions * //
// * ----------------- //

