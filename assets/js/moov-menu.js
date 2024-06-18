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