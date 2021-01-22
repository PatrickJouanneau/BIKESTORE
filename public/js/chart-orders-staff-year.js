
var ctx = document.getElementById('chartOrderStaffYear').getContext('2d');

var dataLoaded;
var chartOrderStaffYear = new Chart(ctx, {
    type: 'horizontalBar',
    data: {
        labels: [""],
        datasets: dataLoaded
    },
    options: {
        title: {
            display: true,
            text: 'Orders by staffs and by years'
        },
        legend: {
            display: true
        },
        scales: {
            xAxes: [{
                callback: function (value, index, values)
                {
                    return '$ ' + value;
                }
            }]
        }
    }
});

$('#update_order_staff_year').on("click", function ()
{
    test_StaY();
});

var test_StaY = function ()
{

    $.ajax({
        url: "/orderStaffYear/json",
        type: 'GET',
        cache: false,
        success: function success(result)
        {
            var datasets = [];
            for (var i = 0; i < result.length; i++)
            {
                var prod = result[i];

                if (!datasets.hasOwnProperty(prod.staff))
                {
                    datasets[prod.staff] = [];
                };

                if (!datasets[prod.staff].hasOwnProperty(prod.year))
                {
                    datasets[prod.staff][prod.year] = [];
                };

                datasets[prod.staff][prod.year] = prod.sales;
            }

            var labels = [];
            for (var year = 2016; year <= 2018; year++)
            {
                labels.push(year);
            }

            var indiceDataset = 0;
            for (key in datasets)
            {
                var lab = key;
                var datas = [];

                for (var year = 2016; year <= 2018; year++)
                {
                    if (datasets[lab].hasOwnProperty(year))
                    {
                        datas.push(datasets[key][year]);
                    } else
                    {
                        datas.push("");
                    }

                }

                chartOrderStaffYear.data.datasets[indiceDataset] = {
                    "label": lab,
                    "data": datas,
                    "backgroundColor": getRandomColor(),
                };
                indiceDataset++;
            }

            chartOrderStaffYear.data.labels = labels;
            chartOrderStaffYear.update();
        }
        ,
        error: function error()
        {
            alert("No");
        }
    });
};
test_StaY();

