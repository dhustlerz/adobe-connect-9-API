<?php
namespace AdobeConnect;
require_once 'src/AdobeConnect/Config.php';
require_once 'src/AdobeConnect/ApiClient.php';
require_once 'src/AdobeConnect/Connection.php';
require_once 'src/AdobeConnect/Response.php';
require_once 'src/AdobeConnect/Request.php';
require_once 'src/AdobeConnect/CurlCall.php';
require_once 'src/AdobeConnect/ExtraApiClient.php';

/**
 * configration file
 */
$configration = new Config('meet45357484.adobeconnect.com','jp@flexxia.ca','Aspirine007@');

/**
 * calling ApliClient Class
 */
$client = new ApiClient($configration);
$reportQuotas = $client->reportQuotas();
$commoninfo = $client->commonInfo();
$scoShortcuts = $client->scoShortcuts();
//$useraccountpwd = $client->userUpdatePwd('912891396','Aspirine007@');

/**
 * calling ExtraApiClient Class
 */
$ExtraApiClient = new ExtraApiClient($configration);
$getUserByLoginEmail = $ExtraApiClient->getUserByLoginEmail('jp@flexxia.ca');

$array_data = json_decode(json_encode($getUserByLoginEmail), true);
if($array_data == 1) {
  print_r('success');
}
else {
  print_r('<pre>');
  print_r($array_data);
  print_r('</pre>');
}

?>
