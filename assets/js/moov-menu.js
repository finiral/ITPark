// var declanche = document.getElementById('declancheur');
// declanche.addEventListener('click',function(){
//     var list = document.getElementById('lister');
//     if (list.classList.contains("positionning-down")) {        
//         list.classList.remove("positionning-down");
//         list.classList.add("positionning-high");   
//     } else {
//         list.classList.remove("positionning-high");
//         list.classList.add("positionning-down");
//     }
// });
var boules = document.querySelectorAll('.moov');
for (let index = 0; index < boules.length; index++) {
    const element = boules[index];
    element.addEventListener('click', function(){
        element.classList.toggle('mooved');
        if(element.classList.contains('bg-red')){
            element.classList.remove('bg-red');
            element.classList.add('bg-dark');
        }else if(element.classList.contains('bg-dark')){
            element.classList.remove('bg-dark');
            element.classList.add('bg-red');
        }
    });
}
document.addEventListener("DOMContentLoaded", function(event) {
   
    const showNavbar = (toggleId, navId, bodyId, headerId) =>{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId),
    bodypd = document.getElementById(bodyId),
    headerpd = document.getElementById(headerId)
    
    // Validate that all variables exist
    if(toggle && nav && bodypd && headerpd){
    toggle.addEventListener('click', ()=>{
    // show navbar
    nav.classList.toggle('show')
    // change icon
    toggle.classList.toggle('bx-x')
    // add padding to body
    bodypd.classList.toggle('body-pd')
    // add padding to header
    headerpd.classList.toggle('body-pd')
    })
    }
    }
    
    showNavbar('header-toggle','nav-bar','body-pd','header')
    
    /*===== LINK ACTIVE =====*/
    const linkColor = document.querySelectorAll('.nav_link')
    
    function colorLink(){
    if(linkColor){
    linkColor.forEach(l=> l.classList.remove('active'))
    this.classList.add('active')
    }
    }
    linkColor.forEach(l=> l.addEventListener('click', colorLink))
    
     // Your code to run since DOM is loaded and ready
    });