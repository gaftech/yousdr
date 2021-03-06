<?php

/* Configuration details below! */


$USE_SQL      = true;	// If you don't have SQL or doesn't want the program to have "memory", set to "false".

// MySQL details
$MYSQL_HOST   = "localhost";
$MYSQL_USER   = "sdruser";
$MYSQL_PASS   = "sdrpassword";
$MYSQL_DB     = "sdr";

// Location of binaries

$BIN_DUMP1090 = "/usr/local/bin/dump1090";
$BIN_RTLTCP   = "/usr/local/bin/rtl_tcp";
$BIN_RTLFM    = "/usr/local/bin/rtl_fm";
$BIN_APLAY    = "/usr/bin/aplay";

// Path to directory containing "public_html" for dump1090.

$HTML_DUMP1090 = "/var/www/yousdr/";
$URL_DUMP1090  = "http://".$_SERVER['SERVER_NAME'].":8080";		// You need to change this if you are behing NAT and use port-forwarding!


// ICECAST details.
$ICECAST_HOST   = "localhost:9000";
$ICECAST_MOUNT  = "sdr";
$ICECAST_USER   = "sdradmin";
$ICECAST_PASS   = "sdradminpass";
$ICECAST_URL    = "http://".$_SERVER['SERVER_NAME'].":9000";		// You need to change this if you are behing NAT and use port-forwarding!



// More or less static stuff defined below.

date_default_timezone_set("UTC");

$modes  = array(
 "fm"   => "FM (narrow)",
 "wbfm" => "FM (wide)",
 "am"   => "AM",
 "usb"  => "USB",
 "lsb"  => "LSB",
 "cw"   => "CW"
);

$filters  = array(
 ""       => "None",
 "edge "  => "Edge Tuning",
 "dc"     => "DC Blocking Filter",
 "deemp"  => "De-Emphasis Filter",
 "direct" => "Direct Sampling",
 "offset" => "Offset tuning"
);

$rxmodes   = array(
 "listen"  => "RTL-FM Listen/Scan Mode",
 "ads-b"   => "ADS-B Flight Mode",
 "rtl_tcp" => "RTL-TCP Wideband SDR Mode",
 "off"	   => "OFF - Stop all streaming"
);

$bw_hz  = array(
 "fm"   =>  "10000",
 "wbfm" => "200000",
 "am"   =>  "16000",
 "usb"  =>   "4000",
 "lsb"  =>   "4000",
 "cw"   =>   "4000"
);




?>
