php adp wrapper
===========

Use this php adp wrapper to do the following:
* Connect to Device
* Turn on Device
* Turn off Device
* Launch app 
* Launch Netflix Video 
* Send key presses

How to Use
===========

You need to enable ADB on your android device. Then you need to request a pairing. 
To do that do the following:
````
require_once ('adb.php');

$adb = new adb();
$setDevice = $adb->setDevice(['host' => '192.168.10.113', 'port' => 5555]);

if($setDevice['success']) {
	$adb->connectToDevice()
}
````
At this point you will be prompted on your Android device to accept the pairing

Here is how you a launch netflix video

````
require_once ('adb.php');

$adb = new adb();
$setDevice = $adb->setDevice(['host' => '192.168.10.113', 'port' => 5555]);

if($setDevice['success']) {
	$adb->turnOnAndConnectAndLaunchNetflixWithVideoId(80236367);
}
````

And to send a command do the following:
````
require_once ('adb.php');

$adb = new adb();
$setDevice = $adb->setDevice(['host' => '192.168.10.113', 'port' => 5555]);

if($setDevice['success']) {
	$adb->sendKey('KEYCODE_MEDIA_PAUSE');
}
````

For a full list of key presses go here:
https://developer.android.com/reference/android/view/KeyEvent

Notes
======
This assumes you have adb installed and adb server started by running `adb start-server`