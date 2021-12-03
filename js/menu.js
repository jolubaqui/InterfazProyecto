'use strict';

//var evento = document.getElementById('usuarios');


//usuarios.addEventListener("click", function(){
  //  document.getElementById('usuarios');
//})

function dinicio (){

    $.ajax({
        type : "POST",
        url : "https://docs.google.com/forms/d/1Cfsmf5fE27BuuJF2WTOwIaS8fmWcdr60gsZFvawXIJk/edit",
        url : "",
        data : "",
        success : function(cont) {
            $("#contenidoPanel2").html(cont);
           
        }
      });
    
}

function duser (){
    $.ajax({
        type : "POST",
        url : "?controlador=egresados&accion=menu",
        data : "",
        success : function(cont) {
            $("#contenidoPanel").html(cont);
           
        }
      });
    
    
}


function dencuesta (){
    $.ajax({
        type : "POST",
        url : "?controlador=egresados&accion=encuesta2",
        data : "",
        success : function(cont) {
            $("#contenidoPanel").html(cont);
           
        }
      });
    
}