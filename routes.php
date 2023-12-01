<?php

require_once __DIR__ . '/router.php';

// ##################################################
// ##################################################
// ##################################################

// Static GET
// In the URL -> http://localhost
// The output -> Index
get('/', 'views/index.php');

get('/forum', 'views/forum.php');
get('/recordings', 'views/recordings.php');
get('/youth-news', 'views/youth-news.php');
get('/saved', 'views/saved.php');
get('/report', 'views/report.php');
get('/report/class', 'views/report.php');
post('/report/class/confirm', 'views/report-confirm.php');
get('/report/student', 'views/report-student.php');
get('/lookup', 'views/lookup.php');
get('/explore', 'views/explore.php');

// For GET or POST
// The 404.php which is inside the views folder will be called
// The 404.php has access to $_GET and $_POST
any('/404', 'views/404.php');
