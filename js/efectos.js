$(document).ready(function() {
    
var contenedor = $('#fondos');
var tiempo = 5000;
contenedor.css({'background-image':'url(http://localhost:8080/ONE_JOB_BUENO/img/fondo1.jpg)'}); 

function image(){
setTimeout(function() {
contenedor.fadeTo('slow', 0.3, function() {
$(this).css({'background-image':'url(http://localhost:8080/ONE_JOB_BUENO/img/fondo2.jpg)'}); 
otra_imagen();}).fadeTo('slow', 1); },tiempo); }

function otra_imagen(){
setTimeout(function() {
contenedor.fadeTo('slow', 0.3, function() {
$(this).css({'background-image':'url(http://localhost:8080/ONE_JOB_BUENO/img/fondo3.jpg)'}); 
otra_img();
}).fadeTo('slow', 1); },tiempo);
}

function otra_img(){
setTimeout(function() {
contenedor.fadeTo('slow', 0.3, function() {
$(this).css({'background-image':'url(http://localhost:8080/ONE_JOB_BUENO/img/fondo1.jpg)'}); 
image();
}).fadeTo('slow', 1); },tiempo);
}

otra_imagen();

});
