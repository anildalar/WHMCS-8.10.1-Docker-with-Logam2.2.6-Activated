#!/bin/bash

# Make the API call to the WHMCS cronapi
curl -X POST https://oceanpbx.club/includes/api/cronapi.php \
-H "Content-Type: application/x-www-form-urlencoded" \
-H "token: c5b30b648a53d6e57dc4d857dad26189" \
-d "action=CronCallingAction"
