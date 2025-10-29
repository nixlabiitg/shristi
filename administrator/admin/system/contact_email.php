<?php
    if ($_POST) {
        $visitor_name = "";
        $visitor_email = "";
        $visitor_phone = "";
        $visitor_subject = "";
        $visitor_message = "";
    
        if (isset($_POST['name'])) {
            $visitor_name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        }
    
        if (isset($_POST['email'])) {
            $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['email']);
            $visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
        }
    
        if (isset($_POST['phone'])) {
            $visitor_phone = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
        }
    
        if (isset($_POST['subject'])) {
            $visitor_subject = htmlspecialchars($_POST['subject']);
        }
    
        if (isset($_POST['contact_message'])) {
            $visitor_message = htmlspecialchars($_POST['message']);
        }
    
    
        $recipient = "";
    
        $headers  = 'MIME-Version: 1.0' . "\r\n"
            . 'Content-type: text/html; charset=utf-8' . "\r\n"
            . 'From: ' . $visitor_email . "\r\n";
    
        $email_content = "<html><body style='align-items:center; justify-content:center;'>";
        $email_content .= "<table style='font-family: Arial;'><thead><tr><td style='background: #eee; padding: 10px; font-weight:bold;' colspan='2'>Mail From Contact Form : WEBSITE</td><thead></tr>";
        $email_content .= "<tbody><tr><td style='background: #eee; padding: 10px;'>Visitor Name</td><td style='background: #fda; padding: 10px;'>$visitor_name</td></tr>";
        $email_content .= "<tr><td style='background: #eee; padding: 10px;'>Visitor Email</td><td style='background: #fda; padding: 10px;'>$visitor_email</td></tr>";
        $email_content .= "<tr><td style='background: #eee; padding: 10px;'>Visitor Phone</td><td style='background: #fda; padding: 10px;'>$visitor_phone</td></tr>";
        $email_content .= "<tr><td style='background: #eee; padding: 10px;'>Mail Subject</td><td style='background: #fda; padding: 10px;'>$visitor_subject</td></tr>";
        $email_content .= "<tr><td style='background: #eee; padding: 10px;'>Visitor Message</td><td style='background: #fda; padding: 10px;'>$visitor_message</td></tr></tbody></table>";
        $email_content .= '</body></html>';  
    
        // echo $email_content;
    
        if (mail($recipient, "Mail From Website Contact Form", $email_content, $headers)) {
            echo '<script>alert("Message sent")</script>';
            echo '<script>location.replace("https://")</script>';
        } else {
            echo '<p>We are sorry, contact email did not go through.</p>';
        }
    }
?>