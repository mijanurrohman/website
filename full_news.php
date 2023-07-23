


<?php include('header.php')?>;
<br><br><br><br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<style>
    .footer {
    background: burlywood;
}
.head {
    text-align: center;
    font-style: normal;
    font-weight: bold;
}
div.h4:hover{
    color: #d11250;
}
h4 {
    font-size: large;
    font-weight: 900;
    text-shadow: 10px,30px,burlywood;
    text-shadow: 5px,3px,3px, red;
    text-shadow: -2px -3px 1px #d11250;
    color: #1d2828;
    /* margin-top: 25px; */
    padding-top: 10px;
}
h4:hover {
    font-size: large;
    font-weight: 900;
    text-shadow: 10px,30px,burlywood;
    text-shadow: 5px,3px,3px, black;
    text-shadow: -2px -3px 1px #d11250;
    color: #1d2828;
    /* margin-top: 25px; */
    padding-top: 10px;
}
.copy p{
    text-align: center;
   
    color: cornflowerblue;
}

    div.head h1{

    }
    /*---image----*/


    .div1 {
    background-color: pink;
    height: 800px;
    overflow: hidden;
}
p.news {
    
    margin-left: auto;
    text-align: center;
    
    width: 300px;
    height: 400px;
    float: left;
    margin-left: 22px;
    font-size: 24px;
    color: tomato;
}




img {
    width: 300px;
    height: 220px;
    margin-top: 30px;
    float: left;
    border-radius: 10px;
    margin-left: 240px;
}



@media only screen and (max-width:700px) {
    img {
    width: 300px;
    height: 230px;
    margin-top: 30px;
    float: left;
    border-radius: 10px;
    margin-left: 120px;
}  
}
@media only screen and (max-width: 500px) {
    img {
    width:200px;
    height: 250px;
    margin-top: 30px;
    float: left;
    border-radius: 10px;
    margin-left: 30px;
    margin-left: 140px;
}  
}
  
img:hover{
   
   
  
    border: 2px solid tomato;
    box-shadow: 2px 3p 2px blue;
    float: left;
    border-radius: 10px;
   
}

@media only screen and (max-width: 700px) {
    p.news {
    
    margin-left: auto;
    text-align: center;
    
    width: 400px;
    height: 400px;
    float: left;
    margin-left: 22px;
    font-size: 24px;
    color: black;
}
}
@media only screen and (max-width: 500px) {
    p.news {
    
    margin-left: auto;
    text-align: center;
    
    width: 300px;
    height: 400px;
    float: left;
    margin-left: 22px;
    font-size: 24px;
    color: black;
}
}
p.news {
    
    margin-left: auto;
    text-align: center;
    
    width: 500px;
    height: 400px;
    float: left;
    margin-left: 22px;
    font-size: 24px;
    color: black;
}
p.news:hover{
    
    margin-left: auto;
    text-align: center;
    
    width: 500px;
    height: 400px;
    float: left;
    margin-left: 22px;
    font-size: 24px;
    color: tomato;
}
 .div1{
        background-image: url(image/p.jpeg);
        background-size: cover;
        background-repeat: no-repeat;
        width:100%;

        height: 100vh;
       

    } 

    /*----- back to start--------*/
      
    .back {
    font-size: large;
    font-family: fantasy;
    width: 100px;
    float: left;
   
}
div.delate {
    font-size: large;
    font-family: fantasy;
    width: 100px;
    float: right;
    
}
div.delate:hover {
    color: blue;

}
p.p {
    font-size: 7px;
}

    
    /*-------end------*/
</style>
<body class="background">
    




<?php

          include('db.php');
            $id=$_POST['id'];
           $sqli= "SELECT * FROM mijanur where id=$id";
           $query=mysqli_query($conn,$sqli);
           while($info=mysqli_fetch_array($query)){
            ?>
             <div class="div1"> 
             <p class="img"><img src="img/<?php echo $info['image'];?>" alt=""></p>

             <p class="news">  <?php echo$info['news'];?></p> 
            
            </div>
            

            <?php
           }

        
          




                         
         
      ?>
       <div class="container">
       <div class="back">
        <p> back to <a href="home.php">Home</a></p>
     </div>
       </div>
       <div class="container">
       <div class="delate">
        <p>  Nice Portfull </p>
     </div>
       </div>
   
   

<br><br><br>

<div class="footer">
    <div class="container">
        <div class="head">
            <h4> THIS IS A HISTORY NOW </h4>

        </div>
        <div class="copy">
             <p>thank you @ all copy right bit.COM  </p> 
        </div>
    </div>
</div>
</html>


