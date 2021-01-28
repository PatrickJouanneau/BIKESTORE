var ctx = document.getElementById('myCustomersYears').getContext('2d');
var myCustomersYears = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ["Ritchey", "Pure Cycles", "Heller", "Strider", "Haro", "Sun Bicycles", "Surly", "Electra", "Trek"],
        datasets: [{
            //"label": ["Ritchey", "Pure Cycles", "Heller", "Strider", "Haro", "Sun Bicycles", "Surly", "Electra", "Trek"],
            "data": ["45", "104", "108", "136", "454", "1042", "1105", "4998", "5519"],
            "backgroundColor": [
                "#ef6c00", "#FF4136", "#2ECC40", "#FF851B", "#7FDBFF", "#B10DC9", "#FFDC00", "#001f3f", "#39CCCC"
            ],
            
            hoverOffset: 9,
        }]
    },
    options: {
        title: {
            display: true,
            text: 'Stock by brands'
        },
        legend: {
            display: true
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
