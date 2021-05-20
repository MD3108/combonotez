'use strict';
// * --------------------------------- //
// * Declare variables or constants * //
// * ------------------------------- //
const filter = document.querySelector('.card.--filter');
const tabsContent = document.querySelectorAll('.content__part');
const dropDown = document.querySelector('.card.--filter .btn.--dd');
const filterTitle = document.querySelector('.card.--filter .filter__title');
const tabs = document.querySelectorAll('.filter__tab .tab__title');

// * ------------------ //
// * Direct execution* //
// * ---------------- //
isVisible(tabsContent);

// * ------------------ //
// * Event Listeners * //
// * ---------------- //

ddOpenClose(dropDown);
ddOpenClose(filterTitle);

tabs.forEach( tab => {
    tab.addEventListener('click', (e) => {
        if(tab.classList.contains('--fighters')){
            tabsContent.forEach( content => {
                content.setAttribute('data-visible', 'false'); 
            });
            tabsContent[tabsContent.length-1].setAttribute('data-visible', 'true');
            tabsContent[0].setAttribute('data-visible', "true");
            if(!dropDown.classList.contains('--close-dd')){
                dropDown.classList.add('--close-dd');
                filter.classList.add('--open');
            }
        } else if(tab.classList.contains('--assists')){
            tabsContent.forEach( content => {
                content.setAttribute('data-visible', 'false'); 
            });
            tabsContent[tabsContent.length-1].setAttribute('data-visible', 'true');
            tabsContent[1].setAttribute('data-visible', "true");
            if(!dropDown.classList.contains('--close-dd')){
                dropDown.classList.add('--close-dd');
                filter.classList.add('--open');
            }
        } else if(tab.classList.contains('--other')){
            tabsContent.forEach( content => {
                content.setAttribute('data-visible', 'false'); 
            });
            tabsContent[tabsContent.length-1].setAttribute('data-visible', 'true');
            tabsContent[2].setAttribute('data-visible', "true");
            if(!dropDown.classList.contains('--close-dd')){
                dropDown.classList.add('--close-dd');
                filter.classList.add('--open');
            }
        }
        isVisible(tabsContent);
    });
});

// * ------------------- //
// * Custom Functions * //
// * ----------------- //
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

function ddOpenClose (target){
    target.addEventListener("click", (e) => {
        if(dropDown.classList.contains('--close-dd') == 0 ){
            tabsContent.forEach( tab => {
                tab.setAttribute('data-visible', 'false'); 
            });
            tabsContent[tabsContent.length-1].setAttribute('data-visible', 'true');
            tabsContent[0].setAttribute('data-visible', "true");
            dropDown.classList.add('--close-dd');
            filter.classList.add('--open');
        }    
        else{
            tabsContent.forEach( tab => {
                tab.setAttribute('data-visible', 'false'); 
            });
            dropDown.classList.remove('--close-dd');
            filter.classList.remove('--open');
        }
        isVisible(tabsContent);
    });
}