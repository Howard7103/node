var express = require('express');
var router = express.Router();

/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('layout/main', { title: 'Express' });
});

router.get('/posts', function(req, res, next) {
  res.render('post/index');
});


module.exports = router;

