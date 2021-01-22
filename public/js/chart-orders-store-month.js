var ctx = document.getElementById('chartOrderStoreMonth').getContext('2d');

var dataLoaded;
var chartOrderStoreMonth = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [""],
        datasets: dataLoaded
    },
    options: {
        title: {
            display: true,
            text: 'Orders by stores and by months'
        },
        legend: {
            display: true
        },
        scales: {
            yAxes: [{
                ticks: {
                    callback: function(value, index, values) {
                        return '$ ' + value;
                    }
                }
            }]
        }
    }
});

$('#update_order_store_month').on("click", function ()
{
    test_SM();
});

var test_SM = function ()
{
    $.ajax({
        url: "/orderStoreMonth/json",
        type: 'GET',
        cache: false,
        success: function success(result)
        {
            var datasets = [];
            for (var i = 0; i < result.length; i++)
            {
                var prod = result[i];

                if (!datasets.hasOwnProperty(prod.store))
                {
                    datasets[prod.store] = [];
                };

                if (!datasets[prod.store].hasOwnProperty(prod.year))
                {
                    datasets[prod.store][prod.year] = [];
                };

                datasets[prod.store][prod.year][prod.month] = prod.sales;
            }

            var labels = [];
            for (var year = 2016; year <= 2018; year++)
            {
                for (var month = 1; month <= 12; month++)
                {
                    labels.push(month + "/" + year);
                }
            }

            var indiceDataset = 0;
            for (key in datasets)
            {

                var dataset = [];

                var lab = key;
                var datas = [];

                for (var year = 2016; year <= 2018; year++)
                {
                    for (var month = 1; month <= 12; month++)
                    {
                        if (datasets[lab].hasOwnProperty(year) && datasets[lab][year].hasOwnProperty(month))
                        {
                            datas.push(datasets[key][year][month]);
                        } else
                        {
                            datas.push("");
                        }
                    }
                }

                chartOrderStoreMonth.data.datasets[indiceDataset] = {
                    "label": lab,
                    "data": datas,
                    "backgroundColor": getRandomColor(),
                };
                indiceDataset++;
            }

            chartOrderStoreMonth.data.labels = labels;
            chartOrderStoreMonth.update();
        }
        ,
        error: function error()
        {
            alert("No");
        }
    });
};
test_SM();



function getRandomColor()
{
    var letters = '0123456789ABCDEF'.split('');
    var color = '#';
    for (var i = 0; i < 6; i++)
    {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}
