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


/* ---------------------------------------------------------------------- */

/* CharteJS */
var graph = document.getElementById("graph").getContext("2d");

var myChart = new Chart(graph, {
    type: "radar",
    data: {
        labels: [
            "Echelle",
            "PHP", 
            "HTML/CSS", 
            "SQL", 
            "JavaScript", 
            "VueJS2", 
            "Symfony4/5",
        ],    
        datasets: [{
            label: "Maîtrise des langages",
            data: [0, 7, 9, 7, 6, 5, 3],
            backgroundColor: 'rgba(203, 200, 192, 0.7)',
            borderColor: 'rgb(245,208,72)',
            borderWidth: 2.5,
            hoverBorderWidth: 20,
        }],
    },
    options: {
        layout: {
            padding: {
                top: 50,
            },
        },
        plugins: {
            legend: {
                labels: {
                    color: '#333',
                    font: {
                        size: 20,
                        color: 'rgb(200,20,20)',
                    },
                },
            },
        },
    },
});