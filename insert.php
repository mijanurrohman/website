
<!-- start-heade--->
<?php include('header.php')?>;
<!--end-header-->
<br><br><br>

<?php
   $conn = mysqli_connect('localhost','root','','db_test');
   if(!$conn){
    echo"NOT CONNECT";
   }
   
 if(isset($_POST['submit'])){
$news=$_POST['news'];
 $name=$_FILES['file']['name'];
 $type=$_FILES['file']['type'];
 $size=$_FILES['file']['size'];
$tmp_loc=$_FILES['file']['tmp_name'];

$store="img/".$name;


move_uploaded_file($tmp_loc,$store);
    
   $sqli="INSERT INTO mijanur(news,image) VALUES('$news','$name')";
   $quer=mysqli_query($conn,$sqli);
  if(isset($quer)){
   echo" <script> alert(' data inserted');
    window.location.href='index.php';
   </script>";
  }else{
    echo"  <script> alert('not einserted');
     window.location.href='insert.php';
    </script>";
  }
  /*
       $insert= "INSERT INTO my_portfull('news','image')VALUES ('$news',' $name',)";
       if(mysqli_query($conn,$insert)){
        echo "data inserted";
      }else{
       echo "data not inserted";
      }
      
 echo 'uploaded';
}else{
  echo'error';
*/

}



 
//if(mysqli_query( $conn,  $insert)){
  //echo 'data_inserted';
//}else{
 //echo 'not';
//}

     
  //$insert= "INSERT INTO my_portfull('news','image')VALUES ('$news',' $name',)";
     



  ?>




  
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>my_website</title>



  </head>
  <style>
  div.form{
  margin: auto;
   border: 2px solid red;
   border-radius: 10px;
   width: 400px;
   height: 400px;
   align-items:center;
 
}
#news{
  margin: auto;
  padding: 0;
}
 div.from .from textarea {
    margin-top:20px;
    margin-left:70px;
    background: azure;
    border: 2px solid pink;
    border-radius: 7px;
    margin: auto;
}
textarea {
    margin-top: 20px;
    margin-left: 70px;
}
input[type="submit"] {
    width: 113px;
    font-weight: bold;
    background: #dd978b;
    border-radius: 9px;
    height: 35px;
}
input[type="submit"]:hover {
  border: pink;background: black;
  color: white;
}
textarea {
    margin-top:20px;
    margin-left:70px;
    background: azure;
    border: 2px solid pink;
    border-radius: 7px;
}
textarea {
    margin-top: 20px;
    margin-left: 70px;
}
input[type="file"] {
    border: 2px solid black;
    width: 240px;
    margin-left: 14px;
    margin-top: 50px;
    border-radius: 10px;
    background: #dd8585;
    color: white;
}
input[type="file"]:hover{
  border: 2px solid pink;
  background: tomato;
  color: black;
}
</style>
  <body class="bg-primary" >
  <div class="form">
  <form action="insert.php" method="POST" enctype="multipart/form-data">
<textarea name="news" cols="30"name="news" rows="10" required style="margin-left: 70px;margin-top:20px;"></textarea> <br> 
<input type="file" name="file"multiple> 
  <input type="submit" name="submit" value="submit">
</form>


  </div>


  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
  </body>
  </html>

  

 






