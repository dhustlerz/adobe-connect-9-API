<?php
namespace AdobeConnect;
require_once 'src/AdobeConnect/Config.php';
require_once 'src/AdobeConnect/ApiClient.php';
require_once 'src/AdobeConnect/Connection.php';
require_once 'src/AdobeConnect/Response.php';
require_once 'src/AdobeConnect/Request.php';
require_once 'src/AdobeConnect/CurlCall.php';
$configration = new Config('meet45357484.adobeconnect.com','jp@flexxia.ca','2035DBE060');
$client = new ApiClient($configration);
//$client->userAccounts();
//$request = new Request('reportActiveMeetings','meet45357484.adobeconnect.com');
//print_r ($client-> getParams());
// $connection = new Connection($configration);
// $connection->connect();
// $connection->login('jp@flexxia.ca','2035DBE060');
$useraccount = $client->userAccounts('jp@flexxia.ca','2035DBE060');
$ReportActiveMeetings = $client->reportActiveMeetings('jp@flexxia.ca','2035DBE060');
$array_data = json_decode(json_encode($ReportActiveMeetings), true);
        print_r('<pre>');
        print_r($array_data);
        print_r('</pre>');

?>
