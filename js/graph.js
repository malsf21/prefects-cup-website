var context = document.getElementById('graph').getContext('2d');

var data = {
	labels: [
		"Bremner\'s",
		"Howard\'s",
		"Jackson\'s",
		"Martland\'s",
		"McHugh\'s",
		"Mowbray\'s",
		"Orr\'s",
		"Scadding\'s",
		"Seaton\'s",
		"Wedd\'s"
	],
	datasets: [
		{
			label: "Prefect\'s Cup Points",
			backgroundColor: [
				"rgba(255, 0, 0, 0.4)",
				"rgba(255, 127, 80, 0.4)",
				"rgba(255, 255, 0, 0.4)",
				"rgba(153, 102, 255, 0.4)",
				"rgba(165, 42, 42, 0.4)",
				"rgba(100, 100, 100, 0.4)",
				"rgba(0, 200, 255, 0.4)",
				"rgba(75, 192, 192, 0.4)",
				"rgba(0, 255, 50, 0.4)",
				"rgba(0, 0, 0, 0.4)"
			],
			borderColor: [
				"rgba(255, 0, 0, 1)",
				"rgba(255, 127, 80, 1)",
				"rgba(255, 255, 0, 1)",
				"rgba(153, 102, 255, 1)",
				"rgba(165, 42, 42, 1)",
				"rgba(100, 100, 100, 1)",
				"rgba(0, 200, 255, 1)",
				"rgba(75, 192, 192, 1)",
				"rgba(0, 255, 50, 1)",
				"rgba(0, 0, 0, 1)"
			],
			data: [
				287,
				240,
				331,
				233,
				190,
				259,
				352,
				261,
				266,
				305
			]
		}
	]
}

var options = {
	scales: {
		xAxes: [
			{
				gridLines: {
					display: false
				}
			}
		],
		yAxes: [{
			ticks: {
				beginAtZero:true
			}
		}]
	},
	events: false,
	tooltips: {
		enabled: false
	},
	hover: {
		animationDuration: 0
	},
	animation: {
		duration: 500,
		easing: "easeOutQuart",
		onComplete: function() {
			var ctx = this.chart.ctx;
			ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontFamily, "normal", Chart.defaults.global.defaultFontFamily);
			ctx.textAlign = "center";
			ctx.textBaseline = "bottom";

			this.data.datasets.forEach(function(dataset) {
				for (var i = 0; i < dataset.data.length; i++) {
					var model = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._model,
						scaleMax = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._yScale.maxHeight;
					ctx.fillStyle = "#444";
					var yPos = model.y - 5;
					if ((scaleMax - model.y) / scaleMax >= 0.93) {
						yPos = model.y + 20;
					}
					ctx.fillText(dataset.data[i], model.x, yPos);
				}
			});
		}
	}
}

var graph = new Chart(context, {
	type: 'bar',
	data: data,
	options: options
});
