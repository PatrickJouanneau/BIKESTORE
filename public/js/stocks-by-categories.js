
var ctx = document.getElementById('chartStockByCtaegories').getContext('2d');

var dataLoaded;
var chartStockByCtaegories = new Chart(ctx, {
    type: 'pie',
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
            var datas = [];
            var backgr = [];
            for (var i = 0; i < result.length; i++)
            {
                var prod = result[i];
                datas.push(prod.quantity);
                backgr.push(getRandomColor());
            }

            var cat = 0;
            var labels = [];

            for (var cat = 0; cat <= 6; cat++)
            {
                labels.push(prod.category_name);
            }

            var indiceDataset = 0;

            chartStockByCtaegories.data.datasets[0] = {
                "data": datas,
                "backgroundColor": backgr,
            };

            chartStockByCtaegories.data.labels = labels;
            chartStockByCtaegories.update();
        }
        ,
        error: function error()
        {
            //alert("No");
        }
    });
};
test_C();
