// gets data
$.get( "api/standings.php", function( data ) {
  var points_data = JSON.parse(data);
  //This part is just importing the variables from the JSON values
  var bremner = points_data["bremner"];
  var howard = points_data["howard"];
  var jackson = points_data["jackson"];
  var martland = points_data["martland"];
  var mchugh = points_data["mchugh"];
  var mowbray = points_data["mowbray"];
  var orr = points_data["orr"];
  var scadding = points_data["scadding"];
  var seaton = points_data["seaton"];
  var wedd = points_data["wedd"];

  var date = new Date(points_data["date"]*1000);
  var date = date.toDateString();

  // Charts.js!

  var ctx = $("#graph");
  var graph = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Bremner\'s', 'Howard\'s', 'Jackson\'s', 'Martland\'s', 'McHugh\'s', 'Mowbray\'s', 'Orr\'s', 'Scadding\'s', 'Seaton\'s', 'Wedd\'s'],
      datasets: [{
        label: 'Prefects Cup Points as of ' + date,
        data: [bremner, howard, jackson, martland, mchugh, mowbray, orr, scadding, seaton, wedd],
        backgroundColor: [
          'rgba(255, 0, 0, 0.2)',
          'rgba(255, 127, 80, 0.2)',
          'rgba(255, 255, 0, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(165, 42, 42, 0.2)',
          'rgba(100, 100, 100, 0.2)',
          'rgba(0, 200, 255, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(0, 255, 50, 0.2)',
          'rgba(0, 0, 0, 0.2)'
        ],
        borderColor: [
          'rgba(255, 0, 0,1)',
          'rgba(255, 127, 80, 1)',
          'rgba(255, 255, 0, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(165, 42, 42, 1)',
          'rgba(100, 100, 100, 1)',
          'rgba(0, 200, 255, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(0, 255, 50, 1)',
          'rgba(0, 0, 0, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
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
        onComplete: function () {
          var ctx = this.chart.ctx;
          ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontFamily, 'normal', Chart.defaults.global.defaultFontFamily);
          ctx.textAlign = 'center';
          ctx.textBaseline = 'bottom';

          this.data.datasets.forEach(function (dataset) {
            for (var i = 0; i < dataset.data.length; i++) {
              var model = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._model,
              scale_max = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._yScale.maxHeight;
              ctx.fillStyle = '#444';
              var y_pos = model.y - 5;
              if ((scale_max - model.y) / scale_max >= 0.93){
                  y_pos = model.y + 20;
              }
              ctx.fillText(dataset.data[i], model.x, y_pos);
            }
          });
        }
      }
    }
  });
  if (adminPage == true){
    $("#bremner").attr("value", bremner);
    $("#howard").attr("value", howard);
    $("#jackson").attr("value", jackson);
    $("#martland").attr("value", martland);
    $("#mchugh").attr("value", mchugh);
    $("#mowbray").attr("value", mowbray);
    $("#orr").attr("value", orr);
    $("#scadding").attr("value", scadding);
    $("#seaton").attr("value", seaton);
    $("#wedd").attr("value", wedd);
  }
});
