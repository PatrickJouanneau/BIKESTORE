/*
"Sun Bicycles", "Electra", "Surly", "Trek", "Ritchey", "Heller", "SPure Cycles", "Strider", "Haro"
"1042", "4998", "1105", "5519", "45", "108", "104", "136", "454"
"#0074D9", "#FF4136", "#2ECC40", "#FF851B", "#7FDBFF", "#B10DC9", "#FFDC00", "#001f3f", "#39CCCC", "#01FF70", "#85144b", "#F012BE", "#3D9970", "#111111", "#AAAAAA"
*/

var ctx = document.getElementById('myStockBrand').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ["Sun Bicycles", "Electra", "Surly", "Trek", "Ritchey", "Heller", "SPure Cycles", "Strider", "Haro"],
        datasets: dataLoaded/*[{
            "label": "Stock", "data": ["1042", "4998", "1105", "5519", "45", "108", "104", "136", "454"],
            "backgroundColor": ["#0074D9", "#FF4136", "#2ECC40", "#FF851B", "#7FDBFF", "#B10DC9", "#FFDC00", "#001f3f", "#39CCCC", "#01FF70", "#85144b", "#F012BE", "#3D9970", "#111111", "#AAAAAA"]
        }]*/
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

/*
$('#test_test').on("click", function () {
    $.ajax({
      url: "/orderStoreMonth/json",
      type: 'GET',
      cache: false,
      success: function success(result) {
          //var i = 0;
          for(var i = 0; i<9;i++){
              var order = result[i];
              myChart2.data.datasets[i] = {"label":"lab"+brand.id, "data":[brand.id, i], "backgroundColor": "rgba(255, 99, 132, 0.2)" };
          }
/*
          for(var i = 0; i<10;i++){
                var prod = result[i];
                myChart2.data.datasets[i] = {"label":"lab"+prod.id, "data":[prod.id, i*2], "backgroundColor": "rgba(255, 99, 132, 0.9)" };
            }
        /*result.forEach(function (prod) {
            //i++;
            if(i>10){
                return false;
            }
        });
        //myChart.data.labels[5] = "Newly Added";
        myChart2.update();
      },
      error: function error() {
        alert("No");
      }
    });
});*/
