<?php $pageTitle = 'Contact Us | Netmatters'; ?>
<?php include __DIR__ . '/../inc/views/layout/head.php'; ?>
<body class="">
<?php

$emptyFields = [];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
// get values from the form and store as an associative array
  $formData["name"] = trim(filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING));
  $formData["email"] = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL));
  $formData["phone"] = trim(filter_input(INPUT_POST, "phone", FILTER_SANITIZE_STRING));
  $formData["subject"] = trim(filter_input(INPUT_POST, "subject", FILTER_SANITIZE_SPECIAL_CHARS));
  $formData["message"] = trim(filter_input(INPUT_POST, "message", FILTER_SANITIZE_SPECIAL_CHARS));
  $formData["marketing"] = trim(filter_input(INPUT_POST, "marketing", FILTER_SANITIZE_NUMBER_INT));
// if no value for marketing set its value to 0

  if (empty($formData['marketing'])) {
    $formData['marketing'] = 0;
  }
  $response = submitContactForm($formData);
  if (is_array($response)) {
    $emptyFields = $response;

  } elseif ($response)  {

    flash('success', 'Your message has been sent!');
    redirect('/contact.php');
  }
}
?>
<?php
include __DIR__ . '/../inc/views/layout/cookie.php';
include __DIR__ . '/../inc/views/layout/sidenav.php';
include __DIR__ . '/../inc/views/layout/header.php';
?>
<div class="main">
  <?php include __DIR__ . '/../inc/views/layout/breadcrumbs.php'; ?>
  <?php include __DIR__ . '/../inc/views/contact/offices.php'; ?>
  <?php include __DIR__ . '/../inc/views/contact/contact_form.php'; ?>
  <?php include __DIR__ . '/../inc/views/layout/newsletter.php'; ?>
  <?php include __DIR__ . '/../inc/views/layout/footer.php'; ?>
  <?php include __DIR__ . '/../inc/views/index/accreditations.php'; ?>
</div>
  </body>
</html>
