var header = document.getElementById('header');
var nombre = document.getElementById('h1Nombre');
var row = document.getElementById('rowNombre');
var p = document.getElementById('pNombre');
var ul = document.getElementById('ulNombre');
var boton = document.getElementById('buttonCV');

var heightHeader = header.offsetTop;
window.addEventListener('scroll', function () {
    'use strict';
    if ((window.pageYOffset > 1 && window.pageYOffset < 899)){
        header.classList.add('fixed');
    } else{
        header.classList.remove('fixed');
    }
    if (window.pageYOffset > 899 && window.pageYOffset < 2200){
        header.classList.add('fixed2');
    } else{
        header.classList.remove('fixed2');
    }
    if ((window.pageYOffset > 2200)){
        header.classList.add('fixed3');
    } else{
        header.classList.remove('fixed3');
    }
    if (window.pageYOffset > 530 && window.pageYOffset < 850){
        nombre.classList.add('h1NombreFixed');
    } else{
        nombre.classList.remove('h1NombreFixed');
    }
    if (window.pageYOffset > 570 && window.pageYOffset < 890){
        row.classList.add('rowNombreFixed');
    } else{
        row.classList.remove('rowNombreFixed');
    }
    if (window.pageYOffset > 610 && window.pageYOffset < 930){
        p.classList.add('pNombreFixed');
    } else{
        p.classList.remove('pNombreFixed');
    }
    if (window.pageYOffset > 650 && window.pageYOffset < 970){
        ul.classList.add('ulNombreFixed');
    } else{
        ul.classList.remove('ulNombreFixed');
    }
    if (window.pageYOffset > 690 && window.pageYOffset < 1010){
        boton.classList.add('buttonCVFixed');
    } else{
        boton.classList.remove('buttonCVFixed');
    }
});