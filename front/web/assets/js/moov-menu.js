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
        if(element.querySelector('.bl-slide').classList.contains('boule')){
            
            element.querySelector('.bl-slide').classList.remove('boule');
            element.querySelector('.bl-slide').classList.add('boule-2');
        }else if(element.querySelector('.bl-slide').classList.contains('boule-2')){
            element.querySelector('.bl-slide').classList.remove('boule-2');
            element.querySelector('.bl-slide').classList.add('boule');
        }
        if(element.classList.contains('bg-danger')){
            element.classList.remove('bg-danger');
            element.classList.add('bg-success');
        }else if(element.classList.contains('bg-success')){
            element.classList.remove('bg-success');
            element.classList.add('bg-danger');
        }
    });
}