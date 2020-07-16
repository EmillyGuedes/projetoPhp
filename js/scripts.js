$(function () {
    // Aqui ira todo o nosso script em JavaScript
    $('nav.mobile').click(function(){
        var listaMenu = $('nav.mobile ul');
        
        if(listaMenu.is(':hidden') == true){
        var icone = $('.botao-menu-mobile').find('i');
        icone.removeClass('fa-bars');
        icone.addClass('fa-times');
        listaMenu.slideToggle();
         } 
         else{
         listaMenu.slideToggle();

         }
    })
})