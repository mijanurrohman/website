         
         


         <?php include('header.php') ?>

         <?php include('db.php') ?>  

         <br>

         <br>
         <br>



<br>
          <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<!--link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"---->
 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.2.0/css/fontawesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css">
  <title>my_website</title>
</head>
<style>

*{
     margin: 0;
     padding: 0;
   }
   body {
    background: beige;
}
   .body{
    background-color: #557474;
   }

   header.main_header{
    background: red;
    height: 300px;
   }

  
@media only screen and (max-width: 1005px) 
     {  header.main_head div.header div.ul{
        
        display:block ;
      
    }



     }

    @media only screen and (max-width: 1000px) {
        header.main_head div.header {
            display: block;
            position: relative;
          
        

        }
        header.main_head div.header div.ul{
            margin-top: 40px;
            display:none ;
          
        }


        header.main_head div.header div.span{
                  display: block;
            color: black;
             float: inline-end;
             font-size: xx-large;
             margin-top: 20px;
             padding-right: 50px;
             color: blue;

        }
        header.main_head div.header div.span:hover{
            color: rgb(233, 17, 17);
          
           border-radius: 7px;
        }
      
        header.main_head div.header div.ul{
            width: 400px;
            height: 130px;
            background: tomato;
            
        }
        
        header.main_head div.header div.row ul{
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-end  ;
            
        }
        
      }


       
/*   -------footer_design--------   */


 div.container{
   
    margin: auto;

}
div.container div.row{
   background: tomato;
   display: flex;
   flex-wrap: wrap;
   border-radius: 7px;
   height
}
         
div.container div.row div.footer-col h1 {
    background: black;
    color: rgb(182, 8, 8);
    font-size: x-large;
    
    text-align: center;
      text-shadow: -3px -1px azure;
    height: 50px;
    padding-top: 8px;
     border: 2px solid orange;
     font-family: auto;

   }

   div.container div.row div.footer-col h1:hover{
          background: orangered;
          color: blue;
          text-shadow: -3px -1px azure;
          border: 2px solid pink;
          padding-left: 3px;


   }
   div.container div.row div.footer-col{
       width: 25%;
       padding: 0 15px;
       margin-top: 30px;
   }

   div.container div.row div.footer-col ul li{
       list-style: none;
       margin-bottom: 10px;
   }
      div.container div.row div.footer-col ul li a{
        text-decoration: none;
        text-transform: capitalize;
        color: aliceblue;
        font-weight: 300px;
        display: block;
        transition: all 0.3s ease;
    }
      

    div.container div.row div.footer-col ul li a:hover{

         color: blue;
         padding-left: 8px;

    }   
    div.container div.row div.footer-col ul div.social_link a {
        display: inline-block;
        height: 40px;
        width: 40px;
        background: rgba;
        background-color: rgba(255,255,300,0.4);
        margin: 0 10px 0 10;
        margin: 0 10px 0 10px;
        text-align: center;
        line-height: 40px;
        border-radius: 50px;
        transition: all 0.5s ease;
        border: 2px solid rgb(26, 3, 7);
    }


    div.container div.row div.footer-col ul div.social_link a:hover{
        background: orangered;
        color: blue;
        border: 2px solid rgb(202, 16, 26);

    }
 
   /*---------responsive---------*/
   @media only screen and (max-width: 900px) {
    div.container div.row div.footer-col{
      width: 600px;
      color: blueviolet;
      display: block;
      display: list-item;
      height: 300px;
    }
    div.container d
    div.row div.footer-col ul li{
        width: 400px;
        background: red;
        display: list-item;
    }

      

    }
   
/*-----icon-------*/

    i.fa-brands.fa-whatsapp {
    font-size: 25px;
    color: antiquewhite;
}
i.fa-brands.fa-facebook {
    font-size: 23px;
    color: unset;
}
i.fa.fa-.fa-envelope.fa-3x\.icon {
    font-size: 23px;
    color: blue;
}










div#demo{
     background:  red;
     height: 70px;
     width:200px;
     border-radius: 7px;
     text-align: center;
     line-height: 0 17px;
}
span.span{
     
     color: rgb(26, 6, 3);
    border-radius: ;
    height: 30px;
    width: 200px;
    font-size: xx-large;
}


div.demo{
    background: red;
    font-weight: 500px;
    font-size: x-large;
    color: blue;
}
/*--------end--------------*/
/*--------start--------*/

.head {
    border: 2px solid;
    margin: auto;
    padding: 0;
    background: #557474;
    border-radius: 7px;
    height: 400px;
}
h2 {
    background: black;
    color: aqua;
    text-align: center;
    font-family: auto;
    text-decoration-style: dashed;
    height: 39px;
    margin-top: 0px;
}
h2:hover {
  color: black;
  background: tomato;
  border: 2px solid pink;

}
label {
    margin-left: 100px;
    margin-top: 14px;
    color: black;
    font-family: -webkit-body;
    font-weight: bolder;
    font-size: 18px;
}
input#name {
    border: inset;
    width: 275px;
    margin-left: 15px;
}
input#email {
  border: inset;
    width: 275px;
    margin-left: 15px;
}
input#subject {
  border: inset;
    width: 275px;
    margin-left: 8px;
}
input#subject:hover{
  border: inset;
    width: 275px;
    margin-left: 8px;
}
textarea#message {
    width: 450px;
    max-width: 277px;
    margin-top: 10px;
    border: inset;
    height: 400px;
    max-height: 100px;
    color: darkolivegreen;
    margin-left: 10px;
}
input[type="submit"] {
    margin: -2px;
    border: 2px solid red;
    width: 353px;
    text-align: center;
    margin: auto;
    padding: auto;
    justify-content: center;
    margin-top: 22px;
    border-radius: 20px;
    margin-left: 106px;
    background: black;
    color: #dfd7d7;
    font-family: auto;
    font-weight: 900;
    font-size: 24px;
}
input[type="submit"]:hover{
  color: black;
  background: tomato;
  border:2px solid pink;
}



</style>
<body>
          
 <div class="container">
  <div class="head">
    <div class="h1">
      <h2> Contact_Me</h2></div>
      <div class="label"><br>

      <form action="foot.php" method="POST">
      <label for="">Name:</label>
        <input type="text" name="name" id="name"required><br>
        <label for="">Email:</label>
        <input type="text" name="email" id="email"required><br>
        <label for="">Subject:</label>
        
        <input type="text" name="subject" id="subject"required><br>
        <label for="">message:</label>
        <textarea name="message" id="message" cols="30" rows="10"required></textarea>

          <br>
        <input type="submit" value="Sent" name="sent" placeholder="Sent">

      </form>
      
      </div>
  </div>
 </div>



   <?php
    if(isset($_POST['sent'])){
       
      
   $name=$_POST['name'];
   $email=$_POST['email'];
   $subject=$_POST['subject'];
   $message=$_POST['message'];

   $mailheader="from:". $name."<".$email.">\r\n";
   $recip="mijanurrohma057@gmail.com";  
   mail($recip , $subject,$message, $mailheader)
    or die('Error');
    echo"message sent";
    
    // mail(to,subject,message,headers,parameters);{ sentex}
       
    }else{
      echo" <script>
      alert('Not Sent');
      
      </scrpt> ";
    }

   ?>




  <br><br>


          <!-----footer_design---->
          <footer class="main_footer fixed-buttom">
                 <div class="container">
                  <div class="row">
                    <div class="footer-col">
                      <h1> COMPANY</h1>
                      <ul>
                       <li><a href=""> about_us</a></li>
                       <li><a href="">our_service</a></li>
                       <li><a href="">primary_policy</a></li>
                       <li><a href="">affiliate proggram</a></li>
                        </ul>
                    </div>
             
                    <div class="footer-col">
                      <h1> GET_HELP</h1>
                      <ul>
                       <li><a href=""> FAQ</a></li>
                       <li><a href="">shipping</a></li>
                       <li><a href="">returns</a></li>
                       <li><a href="">order status</a></li>
                        </ul>
                    </div>
             
                    <div class="footer-col">
                      <h1> ONLINE_ SHOP</h1>
                      <ul>
                       <li><a href=""> watch</a></li>
                       <li><a href=""> bag</a></li>
                       <li><a href="">dress</a></li>
                       <li><a href="">shoes</a></li>
                        </ul>
                    </div>
             
             
                    <div class="footer-col">
                      <h1> FOLLOW_US</h1>
                      <ul>
                        <div class="social_link">
                          <a href="https://web.facebook.com/"><i class="fa-brands fa-facebook"></i></i></a>
                          <a href="https://web.facebook.com/"><i class="fa-brands fa-whatsapp"></i></a>
                        
                          <a href="https://duckduckgo.com/?q=google&ia=web"><i class="fa fa- fa-envelope fa-3x.icon"></i></a>
                        </ul>
                    </div>
             
             
             
                    
                  </div>
                 </div>
             
                </footer>
             
  
   
</body>
</html>