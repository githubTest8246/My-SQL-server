<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Server</title>
</head>
<body>
    <script src="main.js"></script>
</body>
</html>
<?php
    header("Content-Type: application/json");
    if($_SERVER["REQUEST_METHOD"] === "POST") {
        $filename = $_POST["filename"];
    }
    echo json_encode(["message" => "file recived"]);
?>
