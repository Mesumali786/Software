<!DOCTYPE html>
<html>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Replace the following code with your actual validation and authentication logic.
    // For this example, we'll use "Mesumali@110" as the valid username and password.
    $validUsername = "Mesumali@110";
    $validPassword = "Mesumali@110";

    if ($username === $validUsername && $password === $validPassword) {
        // Successful login
        // Send a login notification email.
        $to = "syedmesumjaffary@gmail.com";
        $subject = "Successful Login Notification";
        $message = "Successful login by username: $username";
        $headers = "From: webmaster@example.com";

        // Use the mail function to send the email.
        mail($to, $subject, $message, $headers);

        // Redirect to the dashboard or another page upon successful login.
        header("Location: https://mesumali786.github.io/Software/Dashboar.html");
        exit();
    } else {
        // Display an error message for the user.
        echo "Invalid username or password. Please try again.";
    }
}
?>

</body>
</html>
