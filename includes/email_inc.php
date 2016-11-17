<?php



/*===============================
Request info script

Gets form info and sends one email
to $admin and a confirmation
email to the user $email.
**==============================*/

// Settings:
//$admin_email = "production@blue-iceberg.com";
$admin_email = "emusto@davidbarrettpartners.com";
$admin_name = "David Barrett Partners";
$admin = $admin_name." <".$admin_email.">";

$errors = array();

// If the form has been submitted,
// run these scripts
if ($_POST)
{
    $info = process_form();
    $error = get_errors($info['errors']);
    $msg = $info['msg'];
    if ($msg && $error == false) {
        $form='submitted';
    }
}


// Compiles all the errors into an html list
function get_errors ($errors)
{

    if (!isset($errors[0])) {
        return false;
    }
    
    $html = "We found the following errors on this form:<br />";
    
    foreach ($errors as $key=>$error)
    {
        $html .= $error."<br />\n";
    }
    
    return $html."<br />\n";

}





// Process the form
function process_form ()
{


    global $admin;
   
    $sendinfo = $_POST['sendinfo'];
    $email = $_POST['email'];
    $first_name = trim(stripslashes($_POST['first_name']));
    $last_name = trim(stripslashes($_POST['last_name']));
    $message = stripslashes($_POST['message']);     
 
    // Error checking
    if (false==validate_email($email)) {
        $errors[] = "Please enter a valid email address.";
    }
    if (empty($first_name)) {
        $errors[] = "Please enter your first name.";
    }
    if (empty($last_name)) {
        $errors[] = "Please enter your last name.";
    }

    // Check for any errors
    if (!empty($errors[0])) {
        return array('msg'=>$msg, 'errors'=>$errors);
    }
        
    // Set the email messages
    $admin_body = admin_email($sendinfo,$first_name,$last_name,$email,$message);
    $body = user_email($first_name,$last_name,$admin_body);
    
    // Send the emails
    $ok_admin = send_email($admin,"Website inquiry from davidbarrettpartners.com",$admin_body,"From: ".$first_name." ".$last_name." <".$email.">\r\n");   
    $ok_user = send_email ($email, "David Barrett Partners Website Contact", $body, "From: ".$admin."\r\n");
    
    if ($ok_admin && $ok_user) {
        $msg = "Thank you for contacting the David Barrett Partners. Your information has been submitted.";
    } else {
        $errors[] = "There were problems submitting your information. Please try again later on.";
    }

    // Return the data
    return array('msg'=>$msg, 'errors'=>$errors);

}



// Text for email that gets sent to admin
function admin_email ($sendinfo,$first_name,$last_name,$email,$message)
{
    global $admin_email;
    
/*   // Set body of email to admin
    if (empty($sendinfo)) {
        $body = "DO NOT add me to the David Barrett Partners mailing list.\n\n";
    } else {
        $body = "Please add me to the David Barrett Partners mailing list.\n\n";
    }
*/    
    $body .= "First Name: ".$first_name."
    
Last Name: ".$last_name."

Email: ".$email."

Message: ".$message."\n\n";
    
    return $body;
}






// Text for email that gets sent to user
function user_email ($first_name,$last_name,$admin_body)
{
    
    // Set body of confirmation email
    $body = "Dear ".$first_name." ".$last_name.",
    
Thank you for contacting David Barrett Partners through our website. A copy of your message is included below for
your convenience. 

David Barrett Partners
http://www.davidbarrettpartners.com

-------------------------------------------------\n\n";

    $body .= $admin_body;
        
    return $body;
}




// Validates the email address
// uses Reg Expression to check
function validate_email ($email)
{

    if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$",$email))
    {
        return false;
    } else { 
        return true; 
    }

}


// Sends the email using mail() function
function send_email ($email, $subject, $body, $headers)
{
    // Send email to the admin
    if (mail($email, $subject, $body, $headers)) {
        return true;
    } else {
        return false;
    }
}





?>