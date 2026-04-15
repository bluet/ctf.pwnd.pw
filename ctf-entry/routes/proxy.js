var express = require('express');
var router = express.Router();
var fs = require('fs');
var axios = require('axios');


/* GET home page. */
router.get('/', function(req, res, next) {
	var path = "" + req.query.page;
	var page = "page is set to " + path;
	
	if (path.startsWith("http://")) {
		axios.get(path).then(function(response) {
			res.render('index', { title: "Someone's Great Website", page: page, content: response.data });
		}).catch(function(err) {
			console.log(err);
		});
	} else {
		path = "public/" + path;
		fs.readFile(path, 'utf8', function(err, content) {
			res.render('index', { title: "Someone's Great Website", page: page, content: content });
		});
	}
});

module.exports = router;
