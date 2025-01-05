/* CharteJS */
var graph = document.getElementById("graph").getContext("2d");

var myChart = new Chart(graph, {
    type: "radar",
    data: {
        labels: [
            "Echelle",
            "PHP (7.0, 7.4 et 8.2)", 
            "HTML/CSS (Bootstrap)", 
            "SQL (MySQL, PostGreSQL, SQLServer)", 
            "JavaScript (Vanilla, JQuery et AJAX)", 
            "VueJS2 et 3", 
            "WordPress",
        ],    
        datasets: [{
            label: "Maîtrise des langages",
            data: [0, 7, 9, 8, 6, 6, 5],
            backgroundColor: 'rgba(203, 200, 192, 0.7)',
            borderColor: '#32CD32',
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