var ctx = document.getElementById('chartOrderStoreWeek2016').getContext('2d');

var dataLoaded;
var chartOrderStoreWeek2016 = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [""],
        datasets: dataLoaded
    },
    options: {
        title: {
            display: true,
            text: 'Orders by stores for 2016'
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

$('#update_order_store_week_2016').on("click", function ()
{
    test_S6();
});

var test_S6 = function ()
{

    $.ajax({
        url: "/orderStoreWeek/json",
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

                datasets[prod.store][prod.year][prod.week] = prod.sales;
            }

            var labels = [];
            for (var year = 2016; year <= 2016; year++)
            {
                for (var week = 1; week <= 53; week++)
                {

                    labels.push(week + "/" + year);
                }
            }

            var indiceDataset = 0;
            for (key in datasets)
            {
                var dataset = [];

                var lab = key;
                var datas = [];

                for (var year = 2016; year <= 2016; year++)
                {
                    for (var week = 1; week <= 53; week++)
                    {
                        if (datasets[lab].hasOwnProperty(year) && datasets[lab][year].hasOwnProperty(week))
                        {
                            datas.push(datasets[key][year][week]);
                        } else
                        {
                            datas.push("");
                        }
                    }
                }

                chartOrderStoreWeek2016.data.datasets[indiceDataset] = {
                    "label": lab,
                    "data": datas,
                    "backgroundColor": getRandomColor(),
                };
                indiceDataset++;
            }

            chartOrderStoreWeek2016.data.labels = labels;
            chartOrderStoreWeek2016.update();
        },

        error: function error()
        {
            //alert("No");
        }
    });
};
test_S6();

