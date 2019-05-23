<?php
/**
 * Created by PhpStorm.
 * User: jorge
 * Date: 10/20/18
 * Time: 1:43 AM
 */

require_once ('adb.php');

$adb = new adb();
$setDevice = $adb->setDevice(['host' => '192.168.10.113', 'port' => 5555]);

if($setDevice['success']) {

    // Turn On
    $adb->turnOnAndConnect();

    // Turn Off
    sleep(5);
    $adb->turnOff();

    // Launch Netflix
    sleep(5);
    $adb->turnOnAndConnectAndLaunch('com.netflix.ninja');

    // Launch Kim's Convenience
    $adb->turnOnAndConnectAndLaunchNetflixWithVideoId(80236367);

    // Send Pause Command
    sleep(5);
    $adb->sendKey('KEYCODE_MEDIA_PAUSE');

}
