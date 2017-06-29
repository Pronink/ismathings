$(document).scroll(function(){
    var el = $('.secciontitulo'); //Lo que quiero editar
    var pad = $('.seccion');
    var top = $('.seccion').offset().top - $(document).scrollTop(); //Lo que detecta al ponerse arriba de la pagina
    
    if (top < 105 && !el.is('.secciontituloFixeado'))//Igual que abajo
    {
        $(el).addClass('secciontituloFixeado');//Igual que arriba
        $(pad).addClass('seccionFixeado');
    }
    if (top > 105 && el.is('.secciontituloFixeado'))
    {
        $(el).removeClass('secciontituloFixeado');
        $(pad).removeClass('seccionFixeado');
    }
});
