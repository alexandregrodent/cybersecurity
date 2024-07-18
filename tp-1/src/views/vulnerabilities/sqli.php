<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SQL Injection</title>
    <link rel="stylesheet" href="/assets/css/styles.css">
</head>

<body>
    <div class="container">
        <h1>SQL Injection</h1>
        <form method="POST" action="/dvwa/vulnerabilities/sqli/example_sqli.php">
            <label for="id">User ID:</label>
            <input type="text" id="id" name="id">
            <input type="submit" name="Submit" value="Submit">
        </form>
    </div>
    <script src="/assets/js/scripts.js"></script>
</body>

</html>
