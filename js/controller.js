/* FONCTION QUI PERMET D'AFFICHER ET DE FAIRE DISPARAITRE LES SOUS MENUS */

function ouvrirFermerSousMenu(div) {
    var divContenu = div.getElementsByTagName('div')[1];
    if(divContenu.style.display == 'block') {
        divContenu.style.display = 'none';
    } else {
        divContenu.style.display = 'block';
    }
}


/* ---------------------------------------------------------------------- */

/* NavBar Bootstrap */
$(document).ready( $(function(){
    var navbtn = $(".navbar-toggler");
    var nav = $(".navbarwrap");
  
    $(navbtn).click(function(){
        $(navbtn).toggleClass("active");
    })
  
    //Partie pour un en-tête avec l'effet dégradé
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();

        if(scroll <= 50){
            nav.removeClass("nav-transparent py-0").addClass("nav-colored py-2");
        } else {
            nav.removeClass("nav-colored py-2").addClass("nav-transparent py-0");
        }
    })
}))