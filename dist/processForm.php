<?php
$errors = array(); // array to hold validation errors
$data = array(); // array to pass back data
// validate the variables ======================================================
//if (empty($_POST['nome']))
//$errors['nome'] = 'Name is required.';
//if (empty($_POST['email']))
//$errors['email'] = 'Email is required.';
//if (empty($_POST['telefone']))
//$errors['telefone'] = 'Telefone is required.';
//if (empty($_POST['menssage']))
//$errors['menssage'] = 'Message is required.';
// return a response ===========================================================

// response if there are errors
//if ( ! empty($errors)) {
  // if there are items in our errors array, return those errors
  //$data['success'] = false;
  //$data['errors'] = $errors;
  //$data['messageError'] = 'Please check the fields in red';
//} else {
  // if there are no errors, return a message
  $data['success'] = true;
  $data['messageSuccess'] = 'Hey! Thanks for reaching out. I will get back to you soon';
  // CHANGE THE TWO LINES BELOW
  $email_to = "hugo.webgrafico@gmail.com";
  $email_subject = "Hugo teste";

  $name = $_POST['nome']; // required
  $email_from = $_POST['email']; // required
  $telefone = $_POST['telefone']; // required
  $message = $_POST['menssage']; // required

  $email_message = "Form details below.nn";
  $email_message .= "Name: ".$name."n";
  $email_message .= "Telefone: ".$telefone."n";
  $email_message .= "Email: ".$email_from."n";
  $email_message .= "Message: ".$message."n";

  $headers = 'From: '.$email_from."rn".
  'Reply-To: '.$email_from."rn" .
  'X-Mailer: PHP/' . phpversion();
  mail($email_to, $email_subject, $email_message, $headers);
//}
// return all our data to an AJAX call
echo json_encode($data);
