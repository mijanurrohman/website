
<!-------header section start--------->
  <?php include('header.php');?>
<!-------header section end---------->
<?php








 if(isset($_POST['submit']))
 {
     $email= $_POST['email'];
     $pass= $_POST['pass'];
     $conn = mysqli_connect('localhost','root','','db_test');
   $sqli="SELECT * FROM registration where email='$email'and password ='$pass'";
     $query=mysqli_query($conn, $sqli);
    if($query){
       
      if( mysqli_num_rows( $query)> 0){
        echo "<script>
       
        window.location.href='home.php';
        </script>";
      }else{
        echo "<script>
        alert('You are Not Registration');
        window.location.href='reg.php';
        </script>";
      }
       
    }else{
      echo "<script>
      alert('Database Error');
      window.location.href='index.php';
      </script>";
    }
   
     

 }else{
 //submit
   
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
  
    <title>Document</title>
 </head>
 <style>
  *{
   
  }
  .bac{
    background-image: url(image/p3.jpeg);
    background-size: cover;
    background-repeat: no-repeat;
    height: 100vh;
  }
  form {
    border: 2px solid red;
    width: 330px;
    height: 300px;
    margin: auto;
    border-radius: 5px;
    margin-top: 104px;
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
input#form {
    margin-left: 16px;
    width: 291px;
    background: #efe7e7;
    box-shadow: 2px 2px 0px lightpink;
}
input[type="submit"] {
    margin-left: 21px;
    width: 83px;
    border-radius: 25px;
    font-family: fantasy;
}
input[type="submit"]:hover {
    color: white;
background: black;
border: 2px solid pink;
}

input[type="button"] {
    margin-left: 21px;
    width: 165px;
    border-radius: 25px;
    font-family: fantasy;
}
input[type="button"]:hover {
color: white;
background: black;
border: 2px solid pink;
}



 </style>
 <body class="bac">
    

 <div class="container">
    <form action="index.php"method="post">

        
        <label for=""> USER-EMAILL</label><br>
      <input type="email" name="email" id="form" placeholder="enter your emaill" required><br>
        
        <label for=""> USER-PASSWORD</label><br>
        <input type="password" name="pass" id="form" placeholder="enter your password"  required><br> <br>
        
          <input type="submit" name="submit" value="login">
        <a href="reg.php"><input type="button" placeholder="Registration" value="Registration"></a><br>

    </form>






       







    </div>





    
 </body>



 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

 </body>
 </html>






