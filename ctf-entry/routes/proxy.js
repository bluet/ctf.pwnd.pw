var express = require('express');
var router = express.Router();
var fs = require('fs');
var request = require('request');


/* GET home page. */
router.get('/', function(req, res, next) {
	var path = "" + req.query.page;
	var page = "page is set to " + path;
	
	if (path.startsWith("http://")) {
		request(path, function (err, response, body) {
			if (err) { return console.log(err); }
			res.render('index', { title: "Someone's Great Website", page: page, content: body });
		});
	} else {
		path = "public/" + path;
		fs.readFile(path, 'utf8', function(err, content) {
			res.render('index', { title: "Someone's Great Website", page: page, content: content });
		});
	}
});

module.exports = router;
