//here we do the graph stuff for the standings graph, don't touch this unless you know what you're doing
			new Morris.Line({ //instantiate new graph (line graph)
				element: 'houseStandings', //div id we reference
				data: [ //data array, booyah! for now manually inputted by matt 
					{ month: '2015-08-01', bremners: 10, howards: 84, jacksons: 23, martlands: 123, mchughs: 47, mowbrays: 56, orrs: 128, scaddings: 94, seatons: 73, wedds: 29, }, //test case
					{ month: '2015-09-01', bremners: 0, howards: 0, jacksons: 0, martlands: 0, mchughs: 0, mowbrays: 0, orrs: 0, scaddings: 0, seatons: 0, wedds: 0, }, //each element in array, has date + points
					{ month: '2015-10-01', bremners: 0, howards: 0, jacksons: 0, martlands: 0, mchughs: 0, mowbrays: 0, orrs: 0, scaddings: 0, seatons: 0, wedds: 0, },
					{ month: '2015-11-01', bremners: 0, howards: 0, jacksons: 0, martlands: 0, mchughs: 0, mowbrays: 0, orrs: 0, scaddings: 0, seatons: 0, wedds: 0, },
					{ month: '2015-12-01', bremners: 0, howards: 0, jacksons: 0, martlands: 0, mchughs: 0, mowbrays: 0, orrs: 0, scaddings: 0, seatons: 0, wedds: 0, },
				],
				xkey: 'month', //whatever we display on the bottom/x axis, so month (we know this since we put month: 'DATE' in the array)
				ykeys: ['bremners', 'howards', 'jacksons', 'martlands', 'mchughs', 'mowbrays', 'orrs', 'scaddings', 'seatons', 'wedds'], //what the y axis will display, so the points per house, since that's how we reference it
				lineColors: ['red', 'orange', "yellow", 'purple', 'brown', 'gray', 'blue', 'teal', 'green', 'black'], //colours per line
				pointStrokeColors: ['red', 'orange', "yellow", 'purple', 'brown', 'gray', 'blue', 'teal', 'green', 'black'], //outline colours per line
				labels: ['Bremner\'s', 'Howard\'s', 'Jackson\'s', 'Martland\'s', 'McHugh\'s', 'Mowbray\'s', 'Orr\'s', 'Scadding\'s', 'Seaton\'s', 'Wedd\'s'], //the nice hover label!
				xLabels: 'month', //limits x axis labelling to per month
				hideHover: 'auto', //hides hover when mouse is unfocused
				parseTime: 'false', //spaces out all points equally 
				//axes: '', //rm axis drawing
				grid: '', //rm grid drawing
				gridTextColor: 'white', //white text colour

			});