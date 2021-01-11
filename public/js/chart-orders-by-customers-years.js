var ctx = document.getElementById('myCustomersYears').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'horizontalBar',
    data: {
        labels: ["2016", "2017", "2018"],
        datasets: [
            { "label": "Boyer Marcelene", "data": ["91624.4302", "157776.0132", "65367.6336"], "backgroundColor": "rgba(255, 99, 132, 0.4)" },
            { "label": "Copeland Mireya", "data": ["28368.3713", "33518.0739", "23001.5272"], "backgroundColor": "rgba(75, 192, 192, 0.4)" },
            { "label": "Daniel Vanita", "data": ["98908.3693", "127001.7909", "69812.6953"], "backgroundColor": "rgba(0, 96, 255, 0.4)" },
            { "label": "Serrano Genna", "data": ["35083.1892", "33656.0250", "30695.6869"], "backgroundColor": "rgba(239, 108, 0, 0.4)" },
            { "label": "Terrel Layla", "data": ["11928.3359", "24693.0509", "5660.2642"], "backgroundColor": "rgba(62, 39, 34, 0.4)" },
            { "label": "Vergas Kali", "data": ["16193.2465", "21661.8236", "14921.7953"], "backgroundColor": "rgba(96, 125, 139, 0.4)" }
        ]
    },
    options: {
        title: {
            display: true,
            text: 'Orders by customers by year'
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
