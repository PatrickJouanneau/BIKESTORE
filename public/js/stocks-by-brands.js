var ctx = document.getElementById('myStockBrand').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Sun Bicycles", "Electra", "Surly", "Trek", "Ritchey", "Heller", "SPure Cycles", "Strider", "Haro"],
        datasets: [
            { "label": "Stock", "data": ["1042", "4998", "1105", "5519", "45", "108", "104", "136", "454"], "backgroundColor": "rgba(255, 99, 132, 0.4)" },
        ]
    },
    options: {
        title: {
            display: true,
            text: 'Stocks by brands'
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
