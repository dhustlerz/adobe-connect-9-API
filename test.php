<?php
$completeurl ='https://meet45357484.adobeconnect.com/api/xml?action=sco-shortcuts';
      $xml = simplexml_load_file($completeurl);
      $array_data = json_decode(json_encode($xml), true);
        print_r('<pre>');
        print_r($array_data);
        print_r('</pre>');
        // if($array_data['status']['@attributes']['code'] == 'ok')
        // {
        //     echo 'welcome to adobe connect';
        // }
        // else {
        //     echo 'there is some problem connecting with adobe connect';
        // }
?>
