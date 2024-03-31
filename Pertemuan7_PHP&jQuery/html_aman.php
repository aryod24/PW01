<?php
// Memeriksa apakah input adalah email yang valid
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Lanjutkan dengan pengolahan email yang aman
            echo "Email yang dimasukkan: " . $email;
        } else {
            // Tangani input yang tidak valid
            echo "Email yang dimasukkan tidak valid.";
        }
    }
}
?>

<html>
<head>
    <title>HTML Injection</title>
</head>
<body>
    <h2>HTML Injection</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
