document.addEventListener("DOMContentLoaded", function() {
    var names = window.chartData.map(item => item.name);
    var values = window.chartData.map(item => item.value);

    var chart11 = c3.generate({
        bindto: '#serverRequests',
        padding: {
            top: 10,
            right: 10,
            bottom: 10,
            left: 40,
        },
        data: {
            columns: [
                ['Requests'].concat(values),
            ],
            type: 'area',
            names: {
                Requests: 'Victims',
            },
            colors: {
                Requests: '#da1113',
            },
        },
        axis: {
            x: {
                type: 'category',
                categories: names,
                tick: {
                    centered: true // Ensure the ticks are centered
                }
            },
            y: {
                tick: {
                    count: 3,
                }
            }
        }
    });
});
