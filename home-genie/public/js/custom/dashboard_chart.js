$('document').ready(function () {
    function trx_type_count_ajx() {
        $.ajax({
            url: window.location.origin + '/trx-type-data?count=1',
            type: 'GET',
            success: function (data, textStatus, jQxhr) {
                data = JSON.stringify(data);
                parsedData = JSON.parse(data);
                console.log(parsedData);

                generateChart(parsedData, 1);
            },
            error: function (jqXhr, textStatus, errorThrown) {
                console.log(errorThrown);
            }
        });
    }

    function trx_type_amount_ajx() {
        $.ajax({
            url: window.location.origin + '/trx-type-data?count=0',
            type: 'GET',
            success: function (data, textStatus, jQxhr) {
                data = JSON.stringify(data);
                parsedData = JSON.parse(data);
                console.log(parsedData);

                generateChart(parsedData);
            },
            error: function (jqXhr, textStatus, errorThrown) {
                console.log(errorThrown);
            }
        });
    }

    function generateChart(data, isCount=0) {
        let chartType = isCount ? 'count' : 'time';
        //let type = isCount ? 'bar' : 'pie';
        let type = 'bar';
        let extra = chartType === 'time' ? ' (in minute)' : '';

        new Chart(document.getElementById("trx_type_"+chartType), {
            type: type,
            data: {
                labels: data.typeNames,
                datasets: [
                    {
                        label: "Activity "+chartType+extra,
                        backgroundColor: data.typeColor,
                        data: data.typeCount
                    }
                ]
            },
            options: {
                legend: { display: !isCount },
                title: {
                    display: true,
                    text: 'Activity ('+chartType.toUpperCase()+')'+' For Today'
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            precision: 0
                        }
                    }]
                }
            }
        });
    }

    window.trx_type_count_ajx = trx_type_count_ajx();
    window.trx_type_amount_ajx = trx_type_amount_ajx();
});
