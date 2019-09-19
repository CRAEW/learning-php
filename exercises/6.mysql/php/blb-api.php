<?php
session_start();
$name = isset($_SESSION['name'])?$_SESSION['name']:'Bill';

# BE LIKE BILL API

// cURL Setting options
/*
CURLOPT_RETURNTRANSFER - Return the response as a string instead of outputting it to the screen
CURLOPT_CONNECTTIMEOUT - Number of seconds to spend attempting to connect
CURLOPT_TIMEOUT - Number of seconds to allow cURL to execute
CURLOPT_USERAGENT - Useragent string to use for request
CURLOPT_URL - URL to send request to
CURLOPT_POST - Send request as POST
CURLOPT_POSTFIELDS - Array of data to POST in request
*/

# SENDING SETUP REQUEST
// Returns a cURL resource, parameter = API url
$curl = curl_init();
// Setting options of request - cURL resource, cURL-setting, cURL-setting-value
curl_setopt_array($curl, [
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => "https://belikebill.ga/billgen-API.php?default=1&name=$name",
    CURLOPT_USERAGENT => 'BeCode Apprentice Wendy'
]);

# SENDING REQUEST
/*
    curl_exec()
    false = request error
    true = no error and CURLOPT_RETURNTRANSFERS => false
    result = no errors and CURLOPT_RETURNTRANSFERS => true
*/
// Send the request & save the response
$result = curl_exec($curl);

//Check for errors
if(!$result) {
    die('Error: "'.curl_error($curl).'" - Code: '.curl_errno($curl));
}

header('Content-Type: image/jpeg');
echo $result; 
// var_dump($result);

# CLOSE REQUEST
curl_close();

?>