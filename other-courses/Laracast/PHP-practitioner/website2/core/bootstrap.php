<?php
$config = require 'config.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';

//$pdo = Connection::make();

// Build up a Querybuilder
return new QueryBuilder(

    // returns the pdo to create the QueryBuilder
    Connection::make($config['database'])
    
);

