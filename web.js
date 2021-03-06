// web.js
var gzippo = require('gzippo');
var express = require("express");
var logfmt = require("logfmt");
var app = express();

app.use(logfmt.requestLogger());

//app.use(express.static(__dirname + '/dist'));
app.use(gzippo.staticGzip("" + __dirname + "/dist"));
var port = Number(process.env.PORT || 9000);
app.listen(port, function() {
     console.log("Listening on " + port);
});
