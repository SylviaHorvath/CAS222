<?php
$errors = '';
$myemail = 'yourname@website.com'; //<-----Put Your email address here. 'yourname@website.com'
if(empty($_POST['contact_full_name'])  ||
    empty($_POST['contact_email_address']) ||
    empty($_POST['contact_role']) ||
    empty($_POST['contact_text']))
{
    $errors .= "\n Error: all fields are required";
}

$name = $_POST['contact_full_name'];
$email_address = $_POST['contact_email_address'];
$role = $_POST['contact_role'];
$message = $_POST['contact_text'];

if (!preg_match(
    "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
    $email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
    $to = $myemail;
    $email_subject = "Contact form submission: $name";
    $email_body = "You have received a new message. ".
        " Here are the details:\n Name: $name \n Email: $email_address \n Role \n $role Message \n $message";

    $headers = "From: $myemail\n";
    $headers .= "Reply-To: $email_address";

    mail($to,$email_subject,$email_body,$headers);
    //redirect to the 'thank you' page
    header('Location: contact_form_thank_you.html');
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
    <title>Contact Form Handler</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br($errors);
?>

</body>
</html>