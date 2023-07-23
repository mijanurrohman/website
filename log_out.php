
<!-------header section start--------->
<?php include('db.php');?>
<!-------header section end---------->
<?php

 if(isset($_POST['log_out'])){
    
    $conn = mysqli_connect('localhost','root','','db_test');
  echo"<script>
    alert('You are log_out successfull');
    window.location.href='index.php';
  </script>";
 }
 else{
    //log_out
 }
   
    
 
     
 

 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
    <title>log_out page</title>
</head>
    
<style>
.bac{
 background-image: url(image/p3.jpeg);
 background-size: cover;
 background-repeat: no-repeat;
 height: 100vh;
}

form {
    margin: auto;
    border: 2px solid red;
    margin-top: 87px;
    align-items: center;
    width: 334px;
    height: 418px;
    border-radius: 7px;
  
}
label {
    font-size: 22px;
    font-family: fantasy;
    margin-top: 18px;
    color: #070110;
    text-shadow: 2px 2px 1px #725b13;
    text-decoration: underline;
    margin-left: 50PX;
}
input[type="submit"] {
    margin-left: 21px;
    width: 259px;
    border-radius: 25px;
    font-family: fantasy;
    margin-top: 129px;
}

input[type="submit"]:hover {
    color: white;
background: black;
border: 2px solid pink;
}
img {
    
    width: 150px;
    margin-left: 89px;
    margin-top: 72px;
    border-radius: 50%;
    box-shadow: 2px 2px 3px #d52846;
    border: 2px solid deeppink;
}
img:hover{
    border:2px solid teal;
}

</style>


<body class="bac">
    <div class="container">
        
            <div class="center">
           
                <form action="log_out.php">
                <div class="img"><img src="image/CANVA.png" alt=""></div>
                <input type="submit" name="log_out" value="log_out">
                </form>
            </div>
    </div>

<?php

 if(isset($_POST['log_out'])){
    echo"
     <script>
      alert('log_out successfull');
      window.location.href='index.php';
     </script>
    ";
 }else{
    //log_out
 }

?>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>


    



