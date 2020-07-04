$('document').ready(function () {
    function backend_hit_count_ajx() {
        $.ajax({
            url: window.location.origin + '/backend-hit-track',
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

    function generateChart(data) {
        /*let chartType = isCount ? 'count' : 'amount';
        let type = isCount ? 'bar' : 'pie';*/

        new Chart(document.getElementById("backend_hit"), {
            type: 'line',
            data: {
                labels: data.hours,
                datasets: [
                    {
                        label: "Activity Monitor",
                        borderColor: 'blue',
                        data: data.hitCount
                    }
                ]
            },
            options: {
                legend: { display: false },
                title: {
                    display: true,
                    text: 'System Monitor For Today (Per minute hits)'
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

    window.backend_hit_count_ajx = backend_hit_count_ajx();
});
