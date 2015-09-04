<?php
/**
 * Demo to run basic functionalities
 *
 *
 * @author Gustavo Burgi <gustavoburgi@gmail.com>
 * @author Jashanpreet Singh <jashan.pahwa007@gmail.com>
 */
namespace AdobeConnect;
require_once 'src/AdobeConnect/Config.php';
require_once 'src/AdobeConnect/ApiClient.php';
require_once 'src/AdobeConnect/Connection.php';
require_once 'src/AdobeConnect/Response.php';
require_once 'src/AdobeConnect/Request.php';
require_once 'src/AdobeConnect/CurlCall.php';
require_once 'src/AdobeConnect/ExtraApiClient.php';




/**
 * configration of API
 * Pass your API base URL id and password to configration file so as to strat your API engine
 */
$configration = new Config('meet98467276.adobeconnect.com','cdodd@flexxia.ca','bidemo1');

/**
 * ApliClient Class call
 *
 * Call the objects of ApliClient
 */
$client = new ApiClient($configration);
$reportQuotas = $client->reportQuotas();
// $commoninfo = $client->commonInfo();
// $scoShortcuts = $client->scoShortcuts();
// $scoContent = $client->scoContents('912891455');
//$useraccountpwd = $client->userUpdatePwd('912891396','flexxia1010');
if($_POST['input-date-text'] || $_POST['input-time-text']) {
  $date_begin = $_POST['input-date-text'].'T'.$_POST['input-time-text'];
  $generate_meeting_url = generate_meeting_info($date_begin,rand(0000,9999));
  $generate_meeting_name = generate_meeting_info($date_begin,rand(0000,9999));

  $createMeeting = $client->scoUpdate( $parameters = array(
    'type'          => 'meeting',
    'name'          => $generate_meeting_name ,
    'folder-id'     => '912891426',
    'date-begin'    => $date_begin,
    //'date-end'      => '2015-04-25T010:00:30-05:00',
    'url-path'      => $generate_meeting_url,
    //'source-sco-id' => '-8881'
    ));

  if ($createMeeting) {
    echo 'meeting successfully created with details as follows'.'<br>';

    echo '</span>Meeting url-path : </span><a href=" https://meet98467276.adobeconnect.com/'.$generate_meeting_urll.'">Enter the meeting</a><br>';
    echo '</span>Meeting date : </span>'.$date_begin.'<br>';
    echo '</span>time : </span>'.$date_begin.'<br>';
    exit;
  }
}


/**
 * ExtraApiClient Class call
 *
 * Call the objects of ExtraApiClient
 */
// $ExtraApiClient = new ExtraApiClient($configration);
// $getUserByLoginEmail = $ExtraApiClient->getUserByLoginEmail('jp@flexxia.ca');

// $array_data = json_decode(json_encode($commoninfo), true);
// if($array_data == 1) {
//   print_r('success');
// }
// else {
//   print_r('<pre>');
//   print_r($array_data);
//   print_r('</pre>');
// }

function generate_meeting_info($date,$random_number){
    return md5($date.$random_number);
  }
?>
