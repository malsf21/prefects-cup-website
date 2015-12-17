Morris.Bar({
  element: 'houseStandings',
  data: [
    { date: '2015-08-01', bremners: 10, howards: 84, jacksons: 23, martlands: 123, mchughs: 47, mowbrays: 56, orrs: 128, scaddings: 94, seatons: 73, wedds: 29,}
  /*
    { house: 'Bremner\'s', points: 100},
    { house: 'Howard\'s', points: 75 },
    { house: 'Jackson\'s', points: 50 },
    { house: 'Martland\'s', points: 75 },
    { house: 'McHugh\'s', points: 50 },
    { house: 'Mowbray\'s', points: 75 },
    { house: 'Orr\'s', points: 100},
    { house: 'Scadding\'s', points: 100},
    { house: 'Seaton\'s', points: 100},
    { house: 'Wedd\'s', points: 100},
  */
  ],
  xkey: 'date',
  ykeys: ['bremners', 'howards', 'jacksons', 'martlands', 'mchughs', 'mowbrays', 'orrs', 'scaddings', 'seatons', 'wedds'],
  labels: ['Bremner\'s', 'Howard\'s', 'Jackson\'s', 'Martland\'s', 'McHugh\'s', 'Mowbray\'s', 'Orr\'s', 'Scadding\'s', 'Seaton\'s', 'Wedd\'s'],
  barColors: ['red', 'orange', "yellow", 'purple', 'brown', 'gray', 'blue', 'teal', 'green', 'black'],
  gridTextColor: 'white',
  hideHover: 'always',
});