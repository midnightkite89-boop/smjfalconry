<?php
// Define contact email and subject (adjust if needed)
$ContactEmail = "roger@smjfalconry.co.uk";
$ContactSubject = "Website Enquiry from ";

if (isset($_POST['email'])) {
  // Extract form data
  $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
  $email_from = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
  $comments = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

  // reCAPTCHA verification
  $secretKey = "6Ldq8jQpAAAAAKPjzXJdy3uoGRdfb6Q56JBy9Uk8";
  $captchaResponse = filter_var($_POST['g-recaptcha-response'], FILTER_SANITIZE_STRING);
  $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$captchaResponse";
  $response = file_get_contents($url);
  $responseData = json_decode($response);

  if ($responseData->success) {
    // Build email message
    $email_message = nl2br(strip_tags($comments)) . "\r\n\r\nFrom: " . $name . " (" . $email_from . ")";

    // Create email headers
    $headers = "From: " . $name . " <" . $email_from . ">\r\n";
    $headers .= "Reply-To: " . $email_from . "\r\n";
    $headers .= "Bcc: chrisjohnson@smjfalconry.co.uk\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send email
    if (@mail($ContactEmail, $ContactSubject . $name, $email_message, $headers)) {
      // Success message
      echo "Your message has been sent successfully. We will be in touch soon!";
    } else {
      // Error message
      echo "There was an error sending your message. Please try again later.";
    }
  } else {
    // reCAPTCHA verification failed
    echo "Please verify the reCAPTCHA field.";
  }
} else {
  // Form not submitted
  // ... (handle any necessary logic here)
}
?>
