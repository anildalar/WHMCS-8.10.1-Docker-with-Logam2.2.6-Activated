<?php

if(!defined("WHMCS")) {
    exit("This file cannot be accessed directly");
}
echo "

<br />

<span style=\"float:left;padding:0 10px;margin:0 0 15px 0;\"><sub>Copyright &#169; <a href=\"https://www.google.com\" target=\"_blank\"><strong>WHMCSModule Networks</strong></a> " . date("Y") . ". All Rights Reserved.</sub></span>

<span style=\"float:right;padding:0 10px;\"><sub>" . $vars["license"]["results"]["productname"] . " v" . $version . " - </sub>  <sub>Licensed to: " . $vars["license"]["results"]["registeredname"] . " " . ($vars["license"]["results"]["companyname"] ? "( " .
$vars["license"]["results"]["companyname"] . " )" : "") . "</sub></span>

";

?>