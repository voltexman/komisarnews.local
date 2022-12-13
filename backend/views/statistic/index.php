<?php

use yii\web\View;

$dashboard = <<< JS
	// Flot charts data and options
	var data1 = [[0, 36], [1, 24], [2, 11], [3, 17], [4, 10], [5, 15], [6, 24], [7, 30]];
	var data2 = [[0, 26], [1, 44], [2, 31], [3, 27], [4, 36], [5, 46], [6, 56], [7, 66]];

	var chartUsersOptions = {
        series: {
            splines: {
                show: true,
                tension: 0.4,
                lineWidth: 1,
                fill: 1
            }
        },
        grid: {
            tickColor: "#404652",
            borderWidth: 0,
            borderColor: '#404652',
            color: '#404652'
        },
        colors: ["#f7af3e", "#DE9536"]
	};

	$.plot($("#flot-line-chart"), [data2, data1], chartUsersOptions);

	var devicesData = {
		labels: [
	    "Мобильные",
	    "Планшеты",
	    "ПК"
		],
		datasets: [
	    {
	        data: [20, 120, 100],
	        borderWidth: 0,
	        backgroundColor: [
	            "rgba(246,168,33, 0.1)",
	            "rgba(246,168,33, 0.4)",
	            "rgba(246,168,33, 0.8)"
	        ],
	        hoverBackgroundColor: [
	            "#F6A821",
	            "#F6A821",
	            "#F6A821"
	        ]
	   }]
	};
	var osData = {
		labels: [
	    "",
	    "Software"
	    "Laptop"
		],
		datasets: [
	    {
	        data: [20, 120, 100],
	        borderWidth: 0,
	        backgroundColor: [
	            "rgba(246,168,33, 0.1)",
	            "rgba(246,168,33, 0.4)",
	            "rgba(246,168,33, 0.8)"
	        ],
	        hoverBackgroundColor: [
	            "#F6A821",
	            "#F6A821",
	            "#F6A821"
	        ]
	   }]
	};
	var browserData = {
		labels: [
	    "App",
	    "Software",
	    "Laptop"
		],
		datasets: [
	    {
	        data: [20, 120, 100],
	        borderWidth: 0,
	        backgroundColor: [
	            "rgba(246,168,33, 0.1)",
	            "rgba(246,168,33, 0.4)",
	            "rgba(246,168,33, 0.8)"
	        ],
	        hoverBackgroundColor: [
	            "#F6A821",
	            "#F6A821",
	            "#F6A821"
	        ]
	   }]
	};

	var c6 = document.getElementById("devicesChart").getContext("2d");
	new Chart(c6, {type: 'pie', data: devicesData});
	var c6 = document.getElementById("osChart").getContext("2d");
	new Chart(c6, {type: 'pie', data: osData});
	var c6 = document.getElementById("browserChart").getContext("2d");
	new Chart(c6, {type: 'pie', data: browserData});
JS;
$this->registerJs($dashboard, yii\web\View::POS_READY);
?>
<h1>Статистика</h1>

<div class="row">
    <div class="col-md-4">
        <div class="panel">
            <div class="panel-body">
                <div>
                    <canvas id="devicesChart" height="180"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel">
            <div class="panel-body">
                <div>
                    <canvas id="osChart" height="180"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel">
            <div class="panel-body">
                <div>
                    <canvas id="browserChart" height="180"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
