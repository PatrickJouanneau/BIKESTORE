/* Shéma des commandes par années */
var ctx = document.getElementById('myChart').getContext('2d');

var dataLoaded;
var myChart2 = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["2016", "2017", "2018"],
        datasets: dataLoaded/*[
            { "label": "Janv", "data": ["148586.75", "17533.83", "80495.49"], "backgroundColor": "rgba(255, 99, 132, 0.4)" },
            { "label": "Fev", "data": ["115892.73", "20510.79", "39364.58"], "backgroundColor": "rgba(75, 192, 192, 0.4)" },
            { "label": "Mars", "data": ["124144.71", "26607.82", "51404.61"], "backgroundColor": "rgba(0, 96, 255, 0.4)" },
            { "label": "Avril", "data": ["180667.14", "13519.92", "37396.62"], "backgroundColor": "rgba(0, 96, 255, 0.4)" },
            { "label": "Mai", "data": ["168617.59", "29131.80", "30951.74"], "backgroundColor": "rgba(0, 96, 255, 0.4)" },
            { "label": "Juin", "data": ["153428.80", "32156.86", "45534.63"], "backgroundColor": "rgba(0, 96, 255, 0.4)" },
            { "label": "Juil", "data": ["187503.47", "11897.90", "23452.84"], "backgroundColor": "rgba(0, 96, 255, 0.4)" },
            { "label": "Aout", "data": ["161681.61", "41446.60", "50002.62"], "backgroundColor": "rgba(0, 96, 255, 0.4)" },
            { "label": "Sept", "data": ["183433.49", "47454.69", "72394.43"], "backgroundColor": "rgba(0, 96, 255, 0.4)" },
            { "label": "Oct", "data": ["142106.63", "15299.83", "77645.33"], "backgroundColor": "rgba(0, 96, 255, 0.4)" },
            { "label": "Nov", "data": ["107886.10", "34440.76", "62988.61"], "backgroundColor": "rgba(0, 96, 255, 0.4)" },
            { "label": "Déc", "data": ["151542.79", "14838.84", "57313.57"], "backgroundColor": "rgba(0, 96, 255, 0.4)" }
        ]*/
    },
    options: {
        title: {
            display: true,
            text: 'Orders by store for 2016'
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

$('#test_test').on("click", function ()
{
    $.ajax({
        url: "/brands/json",
        type: 'GET',
        cache: false,
        success: function success(result)
        {
            //Var[i] = id;
            for (var i = 0; i < 12; i++)
            {
                var prod = result[i];
                myChart2.data.datasets[i] = {
                    "label": "#" + prod.year, "rien": [prod.price, i],
                    "backgroundColor": "##ef6c00"
                };
            };

            for (var i = 0; i < 12; i++)
            {
                var prod = result[i];
                myChart2.data.datasets[i] = {
                    "label": "?" + prod.id, "data": [prod.year, i], "backgroundColor": "rgba(158, 102, 255, 0.2)"
                };
            };

            /*result.forEach(function (prod) {
                //i++;
                if(i>10){
                    return false;
                }
            });*/
            //myChart.data.labels[5] = "Newly Added";
            myChart2.update();
        },
        error: function error()
        {
            alert("No");
        }
    });
});


