var mysql = require('mysql');
var today = new Date();

var connection = mysql.createConnection({
  host     : 'localhost',
  user     : 'root',
  password : '',
  database : 'weatherstationdb'
});

connection.connect();
connection.query('SELECT stations.county, weatherstationdata.maxtp, weatherstationdata.mintp, weatherstationdata.rain, weatherstationdata.wdsp, weatherstationdata.stno FROM stations, weatherstationdata WHERE stations.stno = weatherstationdata.stno AND weatherstationdata.date = 20150505 ORDER BY county', function(err, rows, fields) {
  if (err) throw err;
  console.log(JSON.stringify(rows));
  // OR
  for(var i=0;i<rows.length;i++)
    console.log(rows[i].county, rows[i].mintp, rows[i].maxtp, rows[i].rain, rows[i].wdsp);
});
connection.end();





