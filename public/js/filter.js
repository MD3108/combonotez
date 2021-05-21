'use strict';
// * --------------------------------- //
// * Declare variables or constants * //
// * ------------------------------- //
const filter = document.querySelector('.card.--filter');
const tabsContent = document.querySelectorAll('.content__part');
const dropDown = document.querySelector('.card.--filter .btn.--dd');
const filterTitle = document.querySelector('.card.--filter .filter__title');
const tabs = document.querySelectorAll('.filter__tab .tab__title');
const damageRange = document.getElementById('damageRange');
const assistSelect = document.querySelectorAll('.part__assists .assist__select');
console.log(assistSelect);

// * ------------------ //
// * Direct execution* //
// * ---------------- //
//shows the content that should be shown
isVisible(tabsContent);

// * ------------------ //
// * Event Listeners * //
// * ---------------- //

//open close DropDown
ddOpenClose(dropDown);
ddOpenClose(filterTitle);

//change coler of assists tab select in DOM
assistSelect.forEach( (select, idx, selects) => {
    console.log(select.value);
    select.addEventListener('change', (e) =>{
        console.log(select);
        console.log(select.value);
        if (select.value == "0"){
            select.classList.remove('--A');
            select.classList.remove('--B');
            select.classList.remove('--C');
            select.classList.remove('--any');
        } else if (select.value == "1"){
            select.classList.add('--A');
            select.classList.remove('--B');
            select.classList.remove('--C');
            select.classList.remove('--any');
        } else if (select.value == "2"){
            select.classList.remove('--A');
            select.classList.add('--B');
            select.classList.remove('--C');
            select.classList.remove('--any');
        } else if (select.value == "3"){
            select.classList.remove('--A');
            select.classList.remove('--B');
            select.classList.add('--C');
            select.classList.remove('--any');
        } else if (select.value == "4"){
            select.classList.remove('--A');
            select.classList.remove('--B');
            select.classList.remove('--C');
            select.classList.add('--any');
        }
    })
});

//https://www.bauer.uh.edu/parks/slider.htm
damageRange.addEventListener('change', (e) => {
    show_value2(e.currentTarget.value);
});

//change between tabs
tabs.forEach( tab => {
    tab.addEventListener('click', (e) => {
        if(tab.classList.contains('--fighters')){
            tabsContent.forEach( content => {
                content.setAttribute('data-visible', 'false'); 
            });
            tabsContent[tabsContent.length-1].setAttribute('data-visible', 'true');
            tabsContent[0].setAttribute('data-visible', "true");
            tabs.forEach(tab=>{ tab.classList.remove('active'); });
            tab.classList.add('active');
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
            tabs.forEach(tab=>{ tab.classList.remove('active'); });
            tab.classList.add('active');
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
            tabs.forEach(tab=>{ tab.classList.remove('active'); });
            tab.classList.add('active');
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
        tabs.forEach(tab=>{ tab.classList.remove('active'); });
        if(dropDown.classList.contains('--close-dd') == 0 ){
            tabsContent.forEach( tab => {
                tab.setAttribute('data-visible', 'false'); 
            });
            tabsContent[tabsContent.length-1].setAttribute('data-visible', 'true');
            tabsContent[0].setAttribute('data-visible', "true");
            tabs[0].classList.add('active');
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

//https://www.bauer.uh.edu/parks/slider.htm
function show_value2(x){
 document.getElementById("slider_value2").innerHTML=x;
}