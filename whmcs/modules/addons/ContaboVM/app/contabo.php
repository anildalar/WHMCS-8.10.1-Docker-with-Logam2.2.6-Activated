<?php

if(!defined("WHMCS")) {
    exit("This file cannot be accessed directly");
}
echo "<table align=\"center\" class=\"form\" width=\"80%\" border=\"0\" cellspacing=\"2\" cellpadding=\"3\">
<tr>
<td width=\"20%\" class=\"fieldlabel\">License Status</td>
<td class=\"fieldarea\" style=\"padding:5px 0;text-align:center;font-weight:600;color:#fff;background-color:" . ($vars["license"]["results"]["status"] == "Active" ? "#00AA00;" : "#EE0000;") . "\"><strong>" . $vars["license"]["results"]["status"] . "</strong>
</td>
</tr>";
echo "<tr>
<td width=\"20%\" class=\"fieldlabel\">License Key</td>
<td class=\"fieldarea\">" . $vars["whmcsmodule_key"] . "</td>
</tr>
<tr>
<td class=\"fieldlabel\">Licensed to</td>
<td class=\"fieldarea\">" . $vars["license"]["results"]["registeredname"] . " " . ($vars["license"]["results"]["companyname"] ? "( " . $vars["license"]["results"]["companyname"] . " )" : "") . "</td>
</tr>
<tr>
<td class=\"fieldlabel\">Purchased</td>
<td class=\"fieldarea\">" . fromMySQLDate($vars["license"]["results"]["regdate"]) . "</td>
</tr>
<tr>
<td class=\"fieldlabel\">Last Checked</td>
<td class=\"fieldarea\">" . fromMySQLDate($vars["license"]["results"]["lastcheck"]) . "</td>
</tr>
<tr>
<td class=\"fieldlabel\">Next Check Date</td>
<td class=\"fieldarea\">" . fromMySQLDate($vars["license"]["results"]["nextcheckdate"]) . "</td>
</tr>
<tr><td colspan=\"2\" class=\"fieldlabel\">&nbsp;</td></tr>
<tr>
<td class=\"fieldlabel\">Valid Domain</td>
<td class=\"fieldarea\">" . $vars["license"]["results"]["validdomain"] . "</td>
</tr>
<tr>
<td class=\"fieldlabel\">Valid IP</td>
<td class=\"fieldarea\">" . $vars["license"]["results"]["validip"] . "</td>
</tr>
<tr>
<td class=\"fieldlabel\">Valid Directory</td>
<td class=\"fieldarea\">" . $vars["license"]["results"]["validdirectory"] . "</td>
</tr>
<tr><td colspan=\"2\" class=\"fieldlabel\">&nbsp;</td></tr>";    
echo "</table>";

?>
