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
$app->get('/testdb', function () use ($capsule){
	$components = $capsule->table('components')->lists('cname','name');
	echo json_encode($components);
});

// Test for connecting Eloquent
$app->get('/testorm', function () {
	$component = new Component;
	echo json_encode($component->listNameCname());
});


$app->run();