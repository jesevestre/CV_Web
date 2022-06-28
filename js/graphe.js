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
            data: [0, 7, 9, 8, 5, 5, 3],
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