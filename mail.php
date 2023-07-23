

<?php
    if(isset($_POST['sent'])){
    
      
   $name=$_POST['name'];
   $email=$_POST['email'];
   $subject=$_POST['subject'];
   $message=$_POST['message'];

   $mailheader="from:".$name."<".$email.">\r\n";
   $recip="mijanurrohma057@gmail.com";  
   mail( $recip,$subject,$message,$mailheader)
    or die('Error');
    echo"
    <script> alert('  message sent'); </script>";
    
    // mail(to,subject,message,headers,parameters);{ sentex}
       
    }else{
      echo" <script>
      alert('Not Sent');
      
      </scrpt> ";
    }

   ?>
