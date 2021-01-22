
var ctx = document.getElementById('chartStockByCtaegories').getContext('2d');

var dataLoaded;
var chartStockByCtaegories = new Chart(ctx, {
    type: 'horizontalBar',
    data: {
        labels: [""],
        datasets: dataLoaded,
    },
    options: {
        title: {
            display: true,
            text: 'Stocks by categories'
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

$('#update_stock_by_categories').on("click", function ()
{
    test_C();
});

var test_C = function ()
{

    $.ajax({
        url: "/stockByCategory/json",
        type: 'GET',
        cache: false,
        success: function success(result)
        {
            var datasets = [];
            for (var i = 0; i < result.length; i++)
            {
                var prod = result[i];

                if (!datasets.hasOwnProperty(prod.category_name))
                {
                    datasets[prod.category_name] = [];
                };

                datasets[prod.category_name] = prod.quantity;
            }

            var cat = 0;
            var labels = [];

            for (var cat = 0; cat <= 7; cat++)
            {
                    labels.push(prod.category_name);
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


                chartStockByCtaegories.data.datasets[indiceDataset] = {
                    "label": lab,
                    "data": datas,
                    "backgroundColor": getRandomColor(),
                };

                indiceDataset++;
            }

            //chartStockByCtaegories.data.labels = labels;
            chartStockByCtaegories.update();
        }
        ,
        error: function error()
        {
            alert("No");
        }
    });
};
test_C();
