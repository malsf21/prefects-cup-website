// parsing data
var pc_data = JSON.parse(httpGet("api/pc_data.json"));

//This part is just importing the variables from the JSON values
var bremner = pc_data["data"]["points"]["bremner"];
var howard = pc_data["data"]["points"]["howard"];
var jackson = pc_data["data"]["points"]["jackson"];
var martland = pc_data["data"]["points"]["martland"];
var mchugh = pc_data["data"]["points"]["mchugh"];
var mowbray = pc_data["data"]["points"]["mowbray"];
var orr = pc_data["data"]["points"]["orr"];
var scadding = pc_data["data"]["points"]["scadding"];
var seaton = pc_data["data"]["points"]["seaton"];
var wedd = pc_data["data"]["points"]["wedd"];
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

var data = [trace1];

var annotationContent = [];

var layout = {
  xaxis: {
    title: 'House'
  },
  yaxis: {
    title: 'Total Points',
    showticklabels: 'false'
  },
  font: {
    family: '"Nexa Light","Open Sans", verdana, arial, sans-serif',
    color: 'white'
  },
  paper_bgcolor: 'rgba(0,0,0,0)',
  plot_bgcolor: 'rgba(0,0,0,0)',
  annotations: annotationContent
};

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
