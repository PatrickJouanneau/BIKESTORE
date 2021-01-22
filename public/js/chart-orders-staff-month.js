
var ctx = document.getElementById('chartOrderStaffMonth').getContext('2d');

var dataLoaded;
var chartOrderStaffMonth = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [""],
        datasets: dataLoaded
    },
    options: {
        title: {
            display: true,
            text: 'Orders by staffs and by months'
        },
        legend: {
            display: true
        },
        scales: {
            yAxes: [{
                ticks: {
                    callback: function (value, index, values)
                    {
                        return '$ ' + value;
                    }
                }
            }]
        }
    }
});

$('#update_order_staff').on("click", function ()
{
    test_StaM();
});

var test_StaM = function ()
{

    $.ajax({
        url: "/orderStaffMonth/json",
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



                datasets[prod.staff][prod.year][prod.month] = prod.sales;
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

                chartOrderStaffMonth.data.datasets[indiceDataset] = {
                    "label": lab,
                    "data": datas,
                    "backgroundColor": getRandomColor(),
                };
                indiceDataset++;
            }

            chartOrderStaffMonth.data.labels = labels;
            chartOrderStaffMonth.update();
        }
        ,
        error: function error()
        {
            alert("No");
        }
    });
};
test_StaM();

