// JavaScript File
document.body.onload=function(){
    setTimeout(function (){
        var preloader=document.getElementById('preloader-item');
        if(!preloader.classList.contains('done')){
        preloader.classList.add('done');
        }
    }, 1000)
}