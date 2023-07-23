
<style>
   body.body {
    background: #e3e1db;
}
input[type="button"] {
    background: black;
    color: #ebe9e6;
    font-size: inherit;
    font-family: emoji;
    border-radius: 6px;
    float: right;
    margin-left: 138px;
}

</style>























































<?php include('header.php');?>
 
<br><br>


















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   
    <title>my_website</title>
</head>
<style>
   .body div.container div.div1 {
      background: #cbb1b1;
    margin: 0;
    padding: 0;
    border: 2px solid #efb5b5;
    overflow: hidden;
    width: 450px;
    height: 230px;
    margin-top: 20px;
    margin-left: 10px;
    border-radius: 13px;
    float: left;
    margin-left: 10px;
    margin-top: 12px;
    overflow: hidden;
    box-shadow: 3px 2px 1px #e3b7b7;
}
    
}
@media only screen and (max-width: 900px) {
   .body div.container div.div1 {
   width: 390px;
    height: 250px;
    float: left;
   }
}
     
.body div.container div.div1 img{
         margin: auto;
         height: 150px;
          width: 150px;
          border: 2px solid red;
           border-radius: 15px;
           box-shadow:3px 2px 2px tomato;
           float: left;
           margin-top: 20px ;
           margin-left: 20px;
           

          }

          .body div.container div.div1 div.news {
   width: 290px;
    max-width: 210px;
    float: left;
    height: 150px;
    margin-left: 23px;
    margin-top: 24px;
   
}
@media only screen and (max-width: 1000px) {
   
   .body div.container div.div1 div.news {
   width: 180px;
    max-width: 180px;
    float: left;
    height: 142x;
    margin-left: 23px;
    margin-top: 24px;
   
}
}

.body div.container div.div1 label {
    border: 2px solid black;
    height: 26px;
    width: 90px;
    border-radius: 5px;
    float: left;
    margin-left: 10px;  
    margin-top: 10px;
    text-align: center;
    background: cornsilk;
    font-family: math;
}
.body div.container div.div1 label:hover{
   color: blue;
   background: lightcoral;
   border:2px solid pink ;
}

 
.body div.container  div.div1 img:hover{
            border: 2px solid pink;
          }


          .body div.container div.div1 input#news {
    margin-left: 14px;
    margin-top: 10px;
    
    width: 94px;
    border-radius: 5px;
    height: 27px;
    background: white;
    font-family: math;
}
.body div.container div.div1 input#news:hover{
   color: blue;
   background: lightcoral;
 

}
@media only screen and (max-width: 900px) {

}
   </style>     


          
</style>
<br> <br>

<body class="body">
    

<div class="container"> 
     <?php include ('db.php');?>
     <?php
           
           $sqli="SELECT * from  mijanur";
           $query=mysqli_query($conn,$sqli);
           while($info=mysqli_fetch_array($query)){
             ?>
               <div class="div1">
                   
             <img src="img/<?php echo $info['image'];?>" alt="">
             
             <div class="news"><?php  echo $info ['news'];?></div>
                 <form action="full_news.php"method="POST">
                        
                  <input type="submit" value="Full_news" name="news"id="news" placeholder=" Full_news">
                   <input type="text" name="id" value="<?php echo $info['id'];?>"hidden>
      
             <label for=""><?php echo formatdate2($info['date']); ?></label>
             <label for=""><?php  echo  formatdate3($info ['date']); ?></label>

                 </form>      

               </div>
            <?php
             }
             ?>
  


              </div>
              <!---------------->
         
<!--------------------->  


<br><br><br><br><br><br><br><br><br><br><br><br>

<div class="container fixed-bottom">
<div class="btn">
   <a href="insert.php">
   <input type="button" value="CREATE_MY_PORTFULL">
   </a> 
</div>
</div>

    
  </body>
</html>