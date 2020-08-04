//Mario Morales
//7.16.20
//SDG Coding Project
//Portfolio: https://mariomoralesprojects.000webhostapp.com/portfolio/index.php

//desired breakpoint for component
var breakpoint = window.matchMedia("(max-width: 768px)");
//DOM container lookups
var fit_guide_container = document.getElementById('fit_guide');
var care_container = document.getElementById('care');
var materials_container = document.getElementById('materials');
var tabbed_landscape_container = document.getElementById('tabbed_landscape');
var fit_guide_plus = document.getElementById('fit_guide_plus');
var care_plus =  document.getElementById('care_plus');
var materials_plus = document.getElementById('materials_plus');
//created element variables
var fit_guide_button = "fit_guide_button";
var care_button = "care_button";
var materials_button = "materials_button";
var accordion_fit_guide_flag = false;
var accordion_care_flag = false;
var accordion_materials_flag = false;
var accordion_fit_guide_id = "accordion1";
var accordion_care_id = "accordion2";
var accordion_materials_id = "accordion3";

//content                                   /*lorem ipsum dummy text*/
var dummyText1 = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non arcu hendrerit, vehicula nunc eu, vulputate lacus. Proin non venenatis lectus. Aenean maximus leo eu sem fermentum blandit. Donec luctus erat eget felis consectetur, quis accumsan nulla dictum.";

var dummyText2 = "Aliquam ultricies ex eget orci bibendum, non pretium diam pellentesque. Ut mattis purus ultricies commodo aliquet. Ut euismod nisl consectetur elit pharetra vulputate. Donec laoreet, nibh in facilisis vulputate, est lorem consectetur est, sed tempor ligula arcu id libero.";

var dummyText3 = '<div class="materials_subcomponent">';
    dummyText3 +=      '<div id="materials_header_container">';
    dummyText3 +=           '<div>';
    dummyText3 +=               '<p class="twice_font_size">50%</p>';
    dummyText3 +=               '<p class="no_margin">cashmere</p>';
    dummyText3 +=           '</div>';
    dummyText3 +=           '<div>';
    dummyText3 +=               '<p class="twice_font_size">46%</p>';
    dummyText3 +=               '<p class="no_margin" id="materials_middle_element">wool</p>';
    dummyText3 +=           '</div>';
    dummyText3 +=           '<div>';
    dummyText3 +=               '<p class="twice_font_size">4%</p>';
    dummyText3 +=               '<p class="no_margin">modal</p>';
    dummyText3 +=           '</div>';
    dummyText3 +=       '</div>';
    dummyText3 +=       '<p id="material_description">Etiam luctus lectus quis lacinia volutpat. Nulla                               leo nisi, interdum nec lacus quis, condimentum luctus felis. Vivamus                                   elementum mi sit amet tempor maximus. Nunc enim turpis, scelerisque                                   egestas suscipit id, fermentum eu tortor. Aenean a finibus risus, ut                                   vehicula turpis. Donec faucibus dictum mauris id posuere.</p>';
    dummyText3 += '</div>';


//event listeners
fit_guide_container.addEventListener("click", function () {buttonActivation(accordion_fit_guide_flag, fit_guide_button, fit_guide_container, accordion_fit_guide_id); });
care_container.addEventListener("click", function() {buttonActivation(accordion_care_flag, care_button, care_container, accordion_care_id); });
materials_container.addEventListener("click", function() {buttonActivation(accordion_materials_flag, materials_button, materials_container, accordion_materials_id); });


function buttonActivation(buttonFlag, buttonSelector, element, childId) { //driver for click listener events
    var accordionMediaSize = window.matchMedia("(max-width: 768px)").matches; 
        
    if(accordionMediaSize){ //check media size
            if(buttonSelector == fit_guide_button && !buttonFlag){ //check which button was clicked and what state its in
                createAndAppend(element, childId, dummyText1); //create element if it doesnt exist
                replaceContent(fit_guide_plus, "-");
                accordion_fit_guide_flag = true;
            }
            else if (buttonSelector == fit_guide_button && buttonFlag) {
                deleteElement(document.getElementById('accordion1')); //delete element if it does exist
                replaceContent(fit_guide_plus, "+");
                accordion_fit_guide_flag = false;
            }
            
            else if(buttonSelector == care_button && !buttonFlag){
                createAndAppend(element, childId, dummyText2);
                replaceContent(care_plus, "-");
                accordion_care_flag = true;
            }
            else if(buttonSelector == care_button && buttonFlag) {
                deleteElement(document.getElementById('accordion2'));
                replaceContent(care_plus, "+");
                accordion_care_flag = false;
            }
            else if(buttonSelector == materials_button && !buttonFlag){
                createAndAppend(element, childId, dummyText3);
                replaceContent(materials_plus, "-");
                accordion_materials_flag = true;
            }
            else {
                deleteElement(document.getElementById('accordion3'));
                replaceContent(materials_plus, "+");
                accordion_materials_flag = false;
            }
    }
    else {
            if(buttonSelector == fit_guide_button){
                addClass(fit_guide_container, "invert_color");
                removeClass(care_container, "invert_color");
                removeClass(materials_container, "invert_color");
                replaceContent(tabbed_landscape_container, dummyText1); 
            }
            if(buttonSelector == care_button){
                removeClass(fit_guide_container, "invert_color");
                addClass(care_container, "invert_color");
                removeClass(materials_container, "invert_color");
                replaceContent(tabbed_landscape_container, dummyText2);
            }
            if(buttonSelector == materials_button){
                removeClass(fit_guide_container, "invert_color");
                removeClass(care_container, "invert_color");
                addClass(materials_container, "invert_color");
                replaceContent(tabbed_landscape_container, dummyText3);
            }
    }
}


function createAndAppend(parent, childId, content){ //create element, add content and id, then append
    var child = document.createElement('p');  
    child.innerHTML = content;
    child.setAttribute("id", childId);
    parent.appendChild(child);
}

function replaceContent(element, content){ //change content of an element
    element.innerHTML = content; 
}

function deleteElement(element){ //remove elements by id 
    element.remove();
} 

function emptyElement(element){ //blank out an element
    element.innerHTML = "";
}

function addClass(element, className){ //add a class name
    element.classList.add(className);
}

function removeClass(element, className){//remove a class name
    element.classList.remove(className);
}