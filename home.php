

<?php include ('header.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
    <title>Document</title>
</head>
<style>
     div.carousel-item img{
        width: 100%;
        height: 250px;
        border-radius: 7px;
        border: 2px solid red;

    }
   @media only screen and (max-width: 700px){
    div.carousel-item img{
        width: 100%;
        height: 200px;
        border-radius: 7px;
        border: 2px solid red;

    }
   }
     
   @media only screen and (max-width: 500px){
    div.carousel-item img{
        width: 100%;
        height: 200px;
        border-radius: 7px;
        border: 2px solid  pink;

    }
   }

 /* footer- section */
 

 div.container div.footer {
    background: pink;
    border-radius: 7px;

 }
 div.container div.footer div.head h1{
     text-align: center;
     font-style: normal;
     color: aliceblue;
     font-size: medium;
 }

 div.container div.footer  div.foot h5{

    text-align: center;
     font-style: normal;
     color: rgb(15, 122, 216);
     font-size: small;
 }
 


</style>
<body class=" ">
    <br> <br> <br> <br> 
       <div class="carousel slide" data-bs-ride="carousel" >
        <div class="container">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="image/f.jpg" alt="" width="100% "height="250px"> 
               </div>
                <div class="carousel-item">
                     <img src="image/my.jpg" alt="" width="100% "height="250px"> 
                </div>
    
                <div class="carousel-item">
                    <img src="image/f.jpg" alt="" width="100% "height="250px"> 
               </div>
    
               <div class="carousel-item">
                <img src="image/of.jpg" alt="" width="100% "height="250px"> 
           </div>
            </div>
           </div>
        </div>
       
  <br><br><br>

 <!---- card-section ---->
   
       
  <div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <img src="image/pic.jpg" alt="">
                <div class="card-img-overlay">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, minima impedit. Saepe recusandae, molestiae praesentium iste amet quaerat quidem commodi possimus, exercitationem soluta iusto libero autem reiciendis aspernatur sint neque.
                </div>
            </div>
        </div>
    </div>
  </div>


  <!----end-section---->
  <br><br>
   <!----footer-section---->
   <div class="container ">
    <div class="footer">
        <div class="head">
            <h1>THANK YOU ALL</h1>

        </div>
        <div class="foot">
            <h5>  @ all copy right desure BY BIT.</h5>
        </div>

    </div>
   </div>
    <!----end-section---->
   

</body>
</html>






