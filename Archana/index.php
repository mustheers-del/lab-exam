<!DOCTYPE html>
<html>
<head>
    <title>Submitted Details</title>
</head>
<body>
    <h2>Your Details</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["email"]);

        echo "Name: " . $name . "<br>";
        echo "Email: " . $email;
    }
    ?>
</body>
</html>
