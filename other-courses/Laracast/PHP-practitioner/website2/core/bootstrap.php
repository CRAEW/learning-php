<?php

$app = [];

$app['config'] = require 'config.php';

require 'core/Router.php';
require 'core/Request.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';


// Build up a Querybuilder
$app['database'] = new QueryBuilder(

    // returns the pdo to create the QueryBuilder
    Connection::make($app['config']['database'])
    
);

