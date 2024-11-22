$(document).ready(function () {
    const chartData1 = {
        years: ['2018', '2019', '2020', '2021', '2022', '2023', '2024'],
        yearData: [1000, 1800, 500, 1500, 700, 1100, 800]
    };

    const options1 = {
        chart: {
            height: 110,
            type: 'area',
            toolbar: {
                show: false
            },
            animations: {
                enabled: true,
                easing: 'easeinout',
                speed: 2000,
            }
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            width: 2,
            curve: 'smooth'
        },
        markers: {
            show: false,
        //     size: 1,
        //     hover: {
        //         sizeOffset: 5
        //     },
        //     colors: ['#000000'],
        // strokeColor: '#0062FF',
        // strokeWidth: 3
        },
        xaxis: {
            categories: chartData1.years,
            labels: {
                // rotate: 0,
                // trim: true,
                show: false,
                style: {
                    fontSize: '14px',
                    colors: '#64748B',
                    fontFamily: '"Urbanist", sans-serif',
                    fontWeight: '500',
                }
            },
            axisTicks: {
                show: false
            },
        },
        yaxis: {
            show: false,
            max: 2000,
            min: 0,
            axisBorder: {
                show: false
            },
            axisTicks: {
                show: false,
            },
            labels: {
                show: false,
                style: {
                    fontSize: '14px',
                    colors: '#64748B',
                    fontFamily: '"Inter", sans-serif',
                    fontWeight: '500',
                }
            }

        },
        series: [
            {
                name: 'Yearly',
                data: chartData1.yearData
            }
        ],
        colors: ['#0062FF'],
        legend: {
            show: false,
        },
        grid: {
            show: false,
            borderColor: '#efcbb1',
        },
    };

    // Initialize the chart
    const chart1 = new ApexCharts(document.querySelector("#chart1"), options1);

    // Render the chart
    chart1.render();
});