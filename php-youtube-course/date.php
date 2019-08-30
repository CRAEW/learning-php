<?php
    echo date('d'); // Day
    echo '<br>';
    echo date('m'); // Month
    echo '<br>';
    echo date('Y'); // Year 
    echo '<br>';
    echo date('1'); // Day of the week
    echo '<br>';

    echo date('Y/m/d'); // Format
    echo '<br>';
    echo date('m-d-Y'); // Format
    echo '<br>';

    echo date('h'); // Hour
    echo '<br>';
    echo date('i'); // Min
    echo '<br>';
    echo date('s'); // Seconds
    echo '<br>';
    echo date('a'); // AM of PM
    echo '<br>';

    // Set Time Zone
    date_default_timezone_set('Europe/Brussels');
    echo date('h:i:sa'); // Format

    echo '<br>';

    // Set Time Zone
    date_default_timezone_set('America/New_York');
    echo date('h:i:sa'); // Format

    echo '<br>';

    // Make date and time
    /*
    Unix timestamp is a long integer containing the number of seconds between the Unix Epoch (January 1 1970 00:00:00 GMT) and the time specified.
    */
    $timestamp = mktime(10, 14, 54, 9, 10, 1981);

    echo $timestamp;
    echo '<br>';

    echo date('m/d/Y h:i:sa', $timestamp);
    echo '<br>';


    // String to time
    $timestamp2 = strtotime('7:00pm March 22 2016');
    $timestamp3 = strtotime('tomorrow');
    $timestamp4 = strtotime('next Monday');
    $timestamp5 = strtotime('+2 Months');

    echo $timestamp2;
    echo '<br>';
    echo date('m/d/Y h:i:sa', $timestamp2);
    echo '<br>';

    echo $timestamp3;
    echo '<br>';
    echo date('m/d/Y h:i:sa', $timestamp3);
    echo '<br>';

    echo $timestamp4;
    echo '<br>';
    echo date('m/d/Y h:i:sa', $timestamp4);
    echo '<br>';

    echo $timestamp5;
    echo '<br>';
    echo date('m/d/Y h:i:sa', $timestamp5);
    echo '<br>';
?>