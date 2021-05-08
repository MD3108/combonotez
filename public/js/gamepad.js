'use strict';
//Controller api - https://samiare.github.io/Controller.js/
// * --------------------------------- //
// * Declare variables or constants * //
// * ------------------------------- //
const btnHistory = document.querySelector('.btn-history');
const inputInfo = document.querySelector(".gamepad-info");
const alertGP = document.querySelector('.alert-warning');
const convertBtn = document.querySelector('.--next');
const undo = document.querySelector('.--undo');
const clear = document.querySelector('.--clear');
var pressed = [];
let released = [];
let timePressed = [];
let timeReleased;

let directionsGP = ['2','4','6','8'];
let normalBtns  = ['S','H','L','M','A1','A2'];

let superDash   = ['S', 'H'];
let dragonRush  = ['L', 'M'];
let kiCharge    = ['S', 'L'];
let vanish      = ['H', 'M'];
let sparkA      = ['S', 'H', 'L', 'M'] ;
let sparkB      =  ['DR','SD'];

let one   = ['2', '4'];
let three = ['2', '6'];
let seven = ['8', '4'];
let nine  = ['8', '6'];
let superJump = ['8']; 
let diagonals = ['1', '3', '7', '9'];
let qcf = ['2', '3', '6'];
let qcb = ['2', '1', '4'];

let triggerQCF;
let triggerQCB;

let idCounter = 1;
var displayedBtns ;

let counter = 2;


// * tell user to plug in controller
alertGP.classList.remove('hide');

// * Check if controller is supported by the browser
if (Controller.supported) {

  // * Setting the analogs as Dpad
  Controller.search({
    settings: {
      useAnalogAsDpad: "both"
    }
  });

// * ------------------ //
// * Event Listeners * //
// * ---------------- //

undo.addEventListener('click', ()=> {
  undoLast( displayedBtns );
});

clear.addEventListener('click', ()=> {
  clearAll(displayedBtns);
});

document.addEventListener('keydown', (e)=> {
  if(e.key == 'Backspace'){
    undoLast( displayedBtns );
  }

  if(e.key == 'Backspace' && e.shiftKey){
    clearAll( displayedBtns );
  }  
});

// * convert DOM Input Notation to a JSON list { "inputs": [ "2xL", "236", "M" ] }
convertBtn.addEventListener('click', (e)=>{
  arrayConvert = [];
  var getInputs = document.querySelectorAll('.input');
  getInputs.forEach( (input, idx, inputs) => {
      var currentValue = input.dataset.input;
      if(noticeInputs.includes(currentValue)){
          arrayConvert.push(currentValue); 
          arrayConvert.push("sep");
          if(idx === inputs.length - 1){
              arrayConvert.pop();
          }
      }
      else{
         arrayConvert.push(currentValue); 
      }
  });
  inputsJSON = '{ "inputs": '+JSON.stringify(arrayConvert)+'}';
});

// * Controller Connected or not * //

  // * Listen if controller is connected
  window.addEventListener('gc.controller.found', function(event) {
    var controller = event.detail.controller;
    var ctrler = Controller.getController(0);
    // * to avoid bugs if many controllers are connected
    var ctrlerOne = Controller.getController(1);
    var ctrlerTwo = Controller.getController(2);
    var ctrlerThree = Controller.getController(3);
    alertGP.classList.add('hide');

    console.log("Controller found at index " + controller.index + ".");
    console.log("'" + controller.name + "' is ready!");
  }, false);

  // * Listen if controller is disconnected
  window.addEventListener('gc.controller.lost', function(event) {
    alertGP.classList.remove('hide');
    console.log("The controller at index " + event.detail.index + " has been disconnected.");
  }, false);

// * Buttons Pressed or not * //

  // * Listen if button(s) are pressed
  window.addEventListener('gc.button.press', function(event) {
    var button = event.detail;
    var bName = button.name;
    bName = layout(bName);
    
    displayedBtns = document.querySelectorAll('.input');

    pressed.push(bName);
    timePressed.push(button.time);

      if (pressed[0] != undefined && pressed[1] != undefined) {
        if (pressed[0] == '2' && pressed[1] == '6') {
          pressed.splice(0,1,'6');
          pressed.splice(1,1,'2');
        }
      }

   
    if( directionsGP.includes(bName) || normalBtns.includes(bName) || sparkB.includes(bName)){
      // * is diagonal
      if (directionsGP.includes(bName) ) {
        
        if( isTrue(one, pressed) && (  timePressed[1]-timePressed[0] <= 35.00 ) ) {
          bName = '1';
            if ( displayedBtns[displayedBtns.length-1].classList.contains('--2') || displayedBtns[displayedBtns.length-1].classList.contains('--4') ) {
              displayedBtns[displayedBtns.length-1].remove();
            }
        }
        if( isTrue(three, pressed) && (  timePressed[1]-timePressed[0] <= 35.00 ) ) {
          bName = '3';
            if ( displayedBtns[displayedBtns.length-1].classList.contains('--2') || displayedBtns[displayedBtns.length-1].classList.contains('--6') ) {
              displayedBtns[displayedBtns.length-1].remove();
            }
        }
        if( isTrue(seven, pressed) && (  timePressed[1]-timePressed[0] <= 35.00 ) ) {
          bName = '7';
            if ( displayedBtns[displayedBtns.length-1].classList.contains('--8') || displayedBtns[displayedBtns.length-1].classList.contains('--4') ) {
              displayedBtns[displayedBtns.length-1].remove();
            }
        }
        if( isTrue(nine, pressed) && (  timePressed[1]-timePressed[0] <= 35.00 ) ) {
          bName = '9';
            if ( displayedBtns[displayedBtns.length-1].classList.contains('--8') || displayedBtns[displayedBtns.length-1].classList.contains('--6') ) {
              displayedBtns[displayedBtns.length-1].remove();
            }
        }
        // * superjump
        if (released[0] != undefined) {
          if( released[0] == '2' && bName == '8' ){
            bName = '28'
            displayedBtns[displayedBtns.length-1].remove();
            displayedBtns[displayedBtns.length-1].remove();
          }
        }
        
      }
      // * is normal btn
      if (normalBtns.includes(bName)) {
        if( isTrue(superDash, pressed) && (  timePressed[1]-timePressed[0] <= 35.00 ) ) {
          bName = 'SD';
            if ( displayedBtns[displayedBtns.length-1].classList.contains('--S') || displayedBtns[displayedBtns.length-1].classList.contains('--H') ) {
              displayedBtns[displayedBtns.length-1].remove();
            }
        }
        if( isTrue(dragonRush, pressed) && (  timePressed[1]-timePressed[0] <= 35.00 ) ) {
          bName = 'DR';
            if ( displayedBtns[displayedBtns.length-1].classList.contains('--L') || displayedBtns[displayedBtns.length-1].classList.contains('--M') ) {
              displayedBtns[displayedBtns.length-1].remove();
            }
        }
        if( isTrue(kiCharge, pressed) && (  timePressed[1]-timePressed[0] <= 35.00 ) ) {
          bName = 'KC';
            if ( displayedBtns[displayedBtns.length-1].classList.contains('--S') || displayedBtns[displayedBtns.length-1].classList.contains('--L') ) {
              displayedBtns[displayedBtns.length-1].remove();
            }
        }
        if( isTrue(vanish, pressed) && (  timePressed[1]-timePressed[0] <= 35.00 ) ) {
          bName = 'VN';
            if ( displayedBtns[displayedBtns.length-1].classList.contains('--H') || displayedBtns[displayedBtns.length-1].classList.contains('--M') ) {
              displayedBtns[displayedBtns.length-1].remove();
            }
        }
        if( isTrue(sparkA, pressed) && (  timePressed[1]-timePressed[0] <= 35.00 ) ) {
          bName = 'SPARK';
            if ( displayedBtns[displayedBtns.length-1].classList.contains('--SD') || displayedBtns[displayedBtns.length-1].classList.contains('--KC') ) {
              displayedBtns[displayedBtns.length-1].remove();
              displayedBtns[displayedBtns.length-2].remove();
            }
        }
      }
      // * is Spark combination
      if (sparkB.includes(bName)) {
        if( isTrue(sparkB, pressed) && (  timePressed[1]-timePressed[0] <= 35.00 ) ) {
          bName = 'SPARK';
            if ( displayedBtns[displayedBtns.length-1].classList.contains('--SD') || displayedBtns[displayedBtns.length-1].classList.contains('--DR') ) {
              displayedBtns[displayedBtns.length-1].remove();
              displayedBtns[displayedBtns.length-1].remove();
            }
        }
      }

      // * xtimes

      if( displayedBtns[displayedBtns.length-1] != undefined ){
        if (displayedBtns[displayedBtns.length-1].classList.contains(`--${bName}` )){
          if ( bName != '2' &&  bName != 'SD' &&  bName != 'SPARK'&&  bName != 'DR'&& 
          bName != 'KC' &&  bName != 'VN' &&  bName != 'A1'&&  bName != 'A2'){
            if (counter == 2){
              displayedBtns[displayedBtns.length-1].remove();
              let span = document.createElement('span');
              span.setAttribute('id', idCounter);
              span.setAttribute('data-type', 'txt');
              span.setAttribute('data-input', `${counter}x`);
              span.classList.add('input');
              span.classList.add(`--x${counter}`);
              span.classList.add('--txt');
              span.innerHTML = `${counter}x`;
              idCounter ++;
              btnHistory.appendChild(span);
              counter ++ ;
            }
            else if (counter > 2){
              displayedBtns[displayedBtns.length-1].remove();
              displayedBtns[displayedBtns.length-2].innerHTML =  `${counter}x` ;

              displayedBtns[displayedBtns.length-2].classList.remove(`--x${counter-1}`);
              displayedBtns[displayedBtns.length-2].classList.add(`--x${counter}`);
              displayedBtns[displayedBtns.length-2].setAttribute('data-input', `${counter}x`);

              counter ++ ;
            }
          }
          else {
            if (pressed[0] != undefined && pressed[1] != undefined) {
              if (pressed[0] == '2' && pressed[1] == '6') {
                pressed.splice(0,1,'6');
                pressed.splice(1,1,'2');
              }
            }
          }
          
        }
        else {
          counter = 2;
        }
      }

      if( displayedBtns[displayedBtns.length-2] != undefined ){
        if (displayedBtns[displayedBtns.length-1].classList.contains('--3') && 
        displayedBtns[displayedBtns.length-2].classList.contains('--2') && bName == '6'){
          displayedBtns[displayedBtns.length-1].remove();
          displayedBtns[displayedBtns.length-2].remove();
          bName = '236';
        }
        if (displayedBtns[displayedBtns.length-1].classList.contains('--1') && 
        displayedBtns[displayedBtns.length-2].classList.contains('--2') && bName == '4'){
          displayedBtns[displayedBtns.length-1].remove();
          displayedBtns[displayedBtns.length-2].remove();
          bName = '214';
        }
      }

      createBtns(bName, btnHistory);

    }
    
    
  }, false);

  // * Listen if button(s) are released
  window.addEventListener('gc.button.release', function(event) {
    var button = event.detail;
    var bName = button.name;
    bName = layout(bName);
    
    pressed.pop();
    timePressed.pop();
    timeReleased = button.time;

    released.push(bName);
    if( released.length >= 2) {
      released.splice (0, 1);
    }

  }, false);
} 

else {
  // Fallback if controller not supported...
}

// * ------------------- //
// * Custom Functions * //
// * ----------------- //

function layout(bName) {
  if( bName == 'RIGHT_SHOULDER' ){
    bName = 'DR';
  }
  if( bName == 'RIGHT_SHOULDER_BOTTOM' ){
    bName = 'SD';
  }
  if( bName == 'LEFT_SHOULDER' ){
    bName = 'A1';
  }
  if( bName == 'LEFT_SHOULDER_BOTTOM' ){
    bName = 'A2';
  }
  if( bName == 'FACE_1' ){
    bName = 'S';
  }
  if( bName == 'FACE_2' ){
    bName = 'H';
  }
  if( bName == 'FACE_3' ){
    bName = 'L';
  }
  if( bName == 'FACE_4' ){
    bName = 'M';
  }
  if( bName == 'DPAD_UP' ){
    bName = '8';
  }
  if( bName == 'DPAD_DOWN' ){
    bName = '2';
  }
  if( bName == 'DPAD_RIGHT' ){
    bName = '6';
  }
  if( bName == 'DPAD_LEFT' ){
    bName = '4';
  } 
  return bName;
}

//https://stackoverflow.com/questions/53606337/check-if-array-contains-all-elements-of-another-array
function isTrue(arr, arr2){
  return arr.every(i => arr2.includes(i));
}

function isTrueSome(arr, arr2){
  return arr.some(i => arr2.includes(i));
}

function removeDuplicates (arr) {
  return arr.filter( (value, index) => arr.indexOf(value) === index );
}

function createBtns (name, parent){
  let img = document.createElement('img');
  img.setAttribute ('src', `images/${name}.png`)
  img.setAttribute('alt', `image of ${name} button`);
  img.setAttribute('id', idCounter);
  img.setAttribute('data-type', 'img');
  img.setAttribute('data-input', `${name}`);
  img.classList.add('input');
  img.classList.add(`--${name}`);
  img.classList.add('--img');
  idCounter ++;
  parent.appendChild(img);
}

function undoLast (nodeList) {
  nodeList = document.querySelectorAll('.input');
  if (nodeList != undefined){
    nodeList[nodeList.length-1].remove();
  }
}

function clearAll (nodeList) {
  nodeList = document.querySelectorAll('.input');
  nodeList.forEach( e => {
    e.remove();
  });
}
