// parsing data
var points_data = JSON.parse(httpGet("api/standings.php"));

console.log(points_data);

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
// Plotly Stuff

//club month info

var xValue = ['Bremner\'s', 'Howard\'s', 'Jackson\'s', 'Martland\'s', 'McHugh\'s', 'Mowbray\'s', 'Orr\'s', 'Scadding\'s', 'Seaton\'s', 'Wedd\'s'];

var yValue = [bremner, howard, jackson, martland, mchugh, mowbray, orr, scadding, seaton, wedd];

var trace1 = {
  x: xValue,
  y: yValue,
  type: 'bar',
  marker:{
    color: ['red', 'orange', "yellow", 'purple', 'brown', 'gray', 'blue', 'teal', 'green', 'black']
  }
};

var trace2 = {
  x: yValue,
  y: xValue,
  type: 'bar',
  marker:{
    color: ['red', 'orange', "yellow", 'purple', 'brown', 'gray', 'blue', 'teal', 'green', 'black']
  },
  orientation: 'h'
};

var data = [trace1];
var datah = [trace2];

var annotationContent = [];

var layout = {
  font: {
    family: '"Nexa Light","Open Sans", verdana, arial, sans-serif',
    color: 'blue'
  },
  paper_bgcolor: 'rgba(0,0,0,0)',
  plot_bgcolor: 'rgba(0,0,0,0)',
  annotations: annotationContent
};

var layouth = {
  font: {
    family: '"Nexa Light","Open Sans", verdana, arial, sans-serif',
    color: 'blue'
  },
  paper_bgcolor: 'rgba(0,0,0,0)',
  plot_bgcolor: 'rgba(0,0,0,0)',
}

//global info
var tweaks = {
  displayModeBar: false
}

for( var i = 0 ; i < xValue.length ; i++ ){
  var result = {
    x: xValue[i],
    y: yValue[i],
    text: yValue[i],
    xanchor: 'center',
    yanchor: 'bottom',
    showarrow: false
  };
  annotationContent.push(result);
}


Plotly.newPlot('graph', data, layout, tweaks);
Plotly.newPlot('graph-h', datah, layouth, tweaks);
