<?php
        $notified = $_REQUEST['notified'];
        $about_events = $_REQUEST['about_events'];
        $comments = $_REQUEST['comments'];
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $body='Would you like to be notified of similar events in the future ?<br/>';
        $body.='Answer:'.$notified.'<br/>';
        $body.='Let us know what you think about the event:<br/>';
        $body.=$about_events.'<br/>';
        $body.='Any comments/suggestions that you wish to share with us ?<br/>';
        $body.=$comments;
      // Set your email address where you want to receive emails. 
       $to = 'revathi@pinklemonade.in';
       $subject = 'Feedback submission from PhonePe';
       $send_email = mail($to,$subject,$body,$headers);

       if($send_email) {
           echo 1;
       }
        else{
            echo 0;
        }
  ?>