<?php
require '../vendor/autoload.php';

/**
 * Get db from illuminate
 */
$capsule = require_once __DIR__.'/../bootstrap/db.php';

/**
 * Get app from slim
 */
$app = require_once __DIR__.'/../bootstrap/app.php';

// Welcome
$app->get('/welcome', function(){
	echo "Welcome to restOnEloquent";
});

// Test for basic slim router
$app->get('/hello/:name', function ($name) {
    echo "Ohai {$name}!";
});

// Test for basic query
//$app->get('/testdb', function () use ($capsule){
//	$result = $capsule->table('your table name')->get();
//	echo json_encode($result);
//});

// Test for connecting Eloquent
//$app->get('/testmodel', function () {
//	echo json_encode(User::all());
//});


$app->run();
