<?php

class Connection
{

    public static function make($config)
    {
        // Connect to a database -> TRY to connect or CATCH and display exception
        try {
            //return $pdo = new PDO('mysql:host=wendywebsite;dbname=mytodo', 'root', '09wendy82');

            return new PDO(
                $config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );

        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }




}


//$pdo = Connection::make();