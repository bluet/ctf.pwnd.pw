var express = require('express');
var router = express.Router();
var fs = require('fs');


/* GET home page. */
router.get('/', function(req, res, next) {
	var path = "public/" + req.query.page;
	var page = "page is set to " + path;
	
	fs.readFile(path, 'utf8', function(err, content) {
		res.render('index', { title: "Someone's Great Website", page: page, content: content });
	});
	
});

module.exports = router;
