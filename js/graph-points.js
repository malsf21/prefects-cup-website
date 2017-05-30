// gets data
$.get( "api/standings.php", function( data ) {
  var pointsData = JSON.parse(data);
  //This part is just importing the variables from the JSON values
  var bremner = pointsData["bremner"];
  var howard = pointsData["howard"];
  var jackson = pointsData["jackson"];
  var martland = pointsData["martland"];
  var mchugh = pointsData["mchugh"];
  var mowbray = pointsData["mowbray"];
  var orr = pointsData["orr"];
  var scadding = pointsData["scadding"];
  var seaton = pointsData["seaton"];
  var wedd = pointsData["wedd"];

  var date = new Date(pointsData["date"]*1000);
  date = date.toDateString();

  // Charts.js!

  var ctx = $("#graph");
  var graph = new Chart(ctx, {
    type: "bar",
    data: {
      labels: ["Bremner\'s", "Howard\'s", "Jackson\'s", "Martland\'s", "McHugh\'s", "Mowbray\'s", "Orr\'s", "Scadding\'s", "Seaton\'s", "Wedd\'s"],
      datasets: [{
        label: "Prefects Cup Points as of " + date,
        data: [bremner, howard, jackson, martland, mchugh, mowbray, orr, scadding, seaton, wedd],
        backgroundColor: [
          "rgba(255, 0, 0, 0.2)",
          "rgba(255, 127, 80, 0.2)",
          "rgba(255, 255, 0, 0.2)",
          "rgba(153, 102, 255, 0.2)",
          "rgba(165, 42, 42, 0.2)",
          "rgba(100, 100, 100, 0.2)",
          "rgba(0, 200, 255, 0.2)",
          "rgba(75, 192, 192, 0.2)",
          "rgba(0, 255, 50, 0.2)",
          "rgba(0, 0, 0, 0.2)"
        ],
        borderColor: [
          "rgba(255, 0, 0,1)",
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
          ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontFamily, "normal", Chart.defaults.global.defaultFontFamily);
          ctx.textAlign = "center";
          ctx.textBaseline = "bottom";

          this.data.datasets.forEach(function (dataset) {
            for (var i = 0; i < dataset.data.length; i++) {
              var model = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._model,
              scaleMax = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._yScale.maxHeight;
              ctx.fillStyle = "#444";
              var yPos = model.y - 5;
              if ((scaleMax - model.y) / scaleMax >= 0.93){
                  yPos = model.y + 20;
              }
              ctx.fillText(dataset.data[i], model.x, yPos);
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
