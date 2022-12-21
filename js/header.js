var header = document.getElementById('header');
var nombre = document.getElementById('h1Nombre');
var row = document.getElementById('rowNombre');
var p = document.getElementById('pNombre');
var ul = document.getElementById('ulNombre');
var boton = document.getElementById('buttonCV');

var heightHeader = header.offsetTop;

document.addEventListener('scroll', function () {
    'use strict';
    if ((window.scrollY > 1 && window.scrollY < 899)){
        header.classList.add('fixed');
    } else{
        header.classList.remove('fixed');
    }
    if (window.scrollY >= 899 && window.scrollY < 2200){
        header.classList.add('fixed2');
    } else{
        header.classList.remove('fixed2');
    }
    if ((window.scrollY > 2200)){
        header.classList.add('fixed3');
    } else{
        header.classList.remove('fixed3');
    }
    if (window.scrollY > 530 && window.scrollY < 850){
        nombre.classList.add('h1NombreFixed');
    } else{
        nombre.classList.remove('h1NombreFixed');
    }
    if (window.scrollY > 570 && window.scrollY < 890){
        row.classList.add('rowNombreFixed');
    } else{
        row.classList.remove('rowNombreFixed');
    }
    if (window.scrollY > 610 && window.scrollY < 930){
        p.classList.add('pNombreFixed');
    } else{
        p.classList.remove('pNombreFixed');
    }
    if (window.scrollY > 650 && window.scrollY < 970){
        ul.classList.add('ulNombreFixed');
    } else{
        ul.classList.remove('ulNombreFixed');
    }
    if (window.scrollY > 690 && window.scrollY < 1010){
        boton.classList.add('buttonCVFixed');
    } else{
        boton.classList.remove('buttonCVFixed');
    }
});