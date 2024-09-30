<?php

if(!defined("WHMCS")) {
    exit("This file cannot be accessed directly");
}
echo "<table id=\"HomeTable\" class=\"datatable table table-striped table-bordered table-hover\" width=\"100%\" cellspacing=\"0\">
<thead>\r\n<tr>
<th>" . $LANG["Project_Name"] . "</th>
<th>" . $LANG["ClientID"] . "</th>
<th>" . $LANG["ClientSecret"] . "</th>
<th>" . $LANG["APIUser"] . "</th>
<th>" . $LANG["APIPass"] . "</th>
<th>" . $LANG["Action"] . "</th>
</tr></thead>
<tbody></tbody>
</table>
<br />
<button type=\"button\" class=\"btn btn-sm btn-primary\" onclick=\"ProjectAPIAdd()\">
<i class=\"fa fa-code\"></i>&nbsp;" . $LANG["Add_Project"] . "</button>\r\n<br />";

?>