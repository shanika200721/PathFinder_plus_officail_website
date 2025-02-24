<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['user_name'];
    $email = $_POST['user_email'];
    $subject = $_POST['user_sub'];
    $message = $_POST['user_message'];

    // Open the CSV file in append mode
    $file = fopen('data.csv', 'a');

    // Write the form data to the CSV file
    fputcsv($file, [$name, $email, $subject, $message]);

    // Close the file
    fclose($file);

    // Redirect back to the contact page or any other page
    header("Location: contact.html");
    exit();
}
?>
