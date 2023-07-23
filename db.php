<?php
$conn = mysqli_connect('localhost','root','','db_test');
if(!$conn){
 echo"NOT CONNECT";
}


 function  formatDate1($date){
  return date ('Y-m-d',strtotime($date));
 }

  
  

     function formatDate2($date2)
     {

       return date('g:i a',strtotime($date2));
     }


      function formatDate3($date3){
          return date('l',strtotime($date3));
      }
?>

 