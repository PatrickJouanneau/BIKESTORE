
var ctx = document.getElementById('chartStockByBrand').getContext('2d');

var dataLoaded;
var chartStockByBrand = new Chart(ctx, {
    type: 'horizontalBar',
    data: {
        labels: [""],
        datasets: dataLoaded,
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

$('#update_stock_by_brand').on("click", function ()
{
    test_B();
});

var test_B = function ()
{

    $.ajax({
        url: "/stockByBrand/json",
        type: 'GET',
        cache: false,
        success: function success(result)
        {
            var datasets = [];
            for (var i = 0; i < result.length; i++)
            {
                var prod = result[i];
                datasets[prod.brand_name] = prod.quantity;
            }

            var cat = 0;
            var labels = [];

            for (var cat = 0; cat <= 7; cat++)
            {
                    labels.push(prod.brand_name);
            }

            var indiceDataset = 0;
            for (key in datasets)
            {
                var lab = key;
                var datas = [];

                if (datasets.hasOwnProperty(key))
                {
                    datas.push(datasets[key]);
                } else
                {
                    datas.push("");
                }


                chartStockByBrand.data.datasets[indiceDataset] = {
                    "label": lab,
                    "data": datas,
                    "backgroundColor": getRandomColor(),
                };

                indiceDataset++;
            }

            //chartStockByBrand.data.labels = labels;
            chartStockByBrand.update();
        }
        ,
        error: function error()
        {
            alert("No");
        }
    });
};
test_B();
