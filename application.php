
<?php 

$message  = ''; 
$msg ='';
  
$name= $email =$subject = $message ="";
if($_POST["name"] != "" and $_POST["email"] != ""){
	
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "|----------|  |--------------|\n";
$message .= "Full Name           : ".$_POST['name']."\n";
$message .= "Email             : ".$_POST['email']."\n";
$message .= "subject            : ".$_POST['subject']."\n";
$message .= "message             : ".$_POST['messag']."\n";
$message .= "|--------------- I N F O | I P -------------------|\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "|----------- Unknown  --------------|\n";

$send = "inboxresult360@gmail.com";
$subject = "TW-Scrap Application";
{
mail("$send", "$subject", $message);   
}
 echo " <p><span class='error'> Your Application has been Sent!</span></p> ";
}else{
header ("Location: index.html");


}
	
?> 



    

<!DOCTYPE html>
<html lang="en">
<head>
   

  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T-W Scrap Metals</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
	
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">



    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

    <script src= 

"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> 

    </script> 

    <script src= 

"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"> 

    </script> 

    <script src= 

"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"> 

    </script> 
<style>
* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.containerr {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}


        form { 

            box-shadow: 10px 10px 40px grey; 

            padding: 50px; 

            margin: 20px; 

        } 

    </style> 
<body>
    <section >
        <nav>
		
            <a href="index.html"> <img src="images/twscrap.png">  </a>
                  		
						<div class="menu-bar">
						<ul>
           <li><a href="" ><i class="fa fa-phone" style="color:blue;"></i> 
				 </li> </a> Have Any Questions? <br>(209) 589-7764 
             <li><a href=""><i class="fa fa-map-marker" style="color:blue;"></i> </li> </a>
             
			 Visit Us Daily <br> 1009 Bay Ridge Ave,Brooklyn,NY 11219 USA 
         </ul>
			</div>  
			<br>
			 
                <div class ="nav-links" id="navLinks">
                

          
            <ul>
                <li><a href="index.html">  Home </a></li>
                <li><a href="about-us.html"> About Us </a></li>
                <li><a href="our-services.html"> What We Sell</a></li>
                <li><a href="contact.html"> Contact</a></li>
            </ul>
      
      
        </nav>
     </section>

	 <section class="header3">
	 <div class="text-box">
	  <h1>We sell Metals at <br>The Best Prices!</h1>
       <br>
        <a href="" class="hero-btn">T&W Scrap L.L.C</a>
</div>

	 
<br>

  
 
    </section>
	


<div class="row">
  <div class="column">
    <img src="images/contact2.png" alt="Snow" style="width:100%">
  </div>
  <div class="column">
  <div class="texted-box">
     <form method="post" action=""   enctype="multipart/form-data"    class="w-75 mx-auto"> 

        <h1 class="text-success text-center"> 

           T-W Scrap Metals

        </h1> <br>

          

        <h2 class="text-success text-center"> 

           Contact Us

        </h2> 

          <br>

        <div class="form-group"> 

            <input type="text" name="name"

                class="form-control"

                placeholder="Name" required=""> 

        </div> 

          

        <div class="form-group"> 

            <input type="text" name="email"

                class="form-control"

                placeholder="Email address" required=""> 

        </div> 

          

        <div class="form-group"> 

            <input type="text" name="subject"

                class="form-control"

                placeholder="Subject" required=""> 

        </div> 

          

        <div class="form-group"> 

            <textarea name="messag"

                class="form-control"

                placeholder="Write your message here..."

                required=""> 

            </textarea> 

        </div> 

          

 

          

        <div class="submit text-center"> 

            <input type="submit" name="submit"

                class="btn btn-success "

                value="SEND MESSAGE"> 

        </div> 
		
		
    <?php if(!empty($Mes)){ ?> 

        <p class="text-success text-center"> 

            <?php echo $Mes; ?> 

        </p> 

    <?php } ?> 


    </form> 
		</div>
  </div>
</div>


      

   
	
<div class="containerr">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    
  </div>
  
  
  <div class="row">
    <div class="column">
    
    <p>
	<div class="mapouter"><div class="gmap_canvas">
	<iframe width="730" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=1009%20Bay%20Ridge%20Ave%20Brooklyn,%20NY%2011219%20USA%20&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net">fmovies</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:730px;}</style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a>
	<style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:730px;}</style></div></div>

	</p>
    <a href="" class="hero-btn">LOCATION</a>


    </div>
    <div class="column">
     <h2>Give us a call or drop by anytime, <br> we endeavour to answer all enquiries within 24 hours on business days. <br>
	We will be happy to answer your questions.:</h2>
    </div>
  </div>
</div>



  <section class="footer">
         <div class="container text-center">
             <div class="row">
                <div class="col-md-3 footer-image">
                    <h1>Download App</h1>
                    <img src="images/twscrap.png">
                     <p> <i class="fa fa-facebook-official"></i>
                
                     <i class="fa fa-linkedin"></i>
                   
                     <i class="fa fa-twitter"></i></p>
            </div>
                 <div class="col-md-3">
                     <h1>Quick Links</h1>
					   <p>Home</p>
                     <p>About Us</p>
                     <p>What We Sell</p>
                     <p>Contacts</p>
                   
                 </div>
                 <div class="col-md-3">
                     <h1>Contact</h1>
                     <p>Visit Us Daily 1009 Bay Ridge Ave ,Brooklyn,NY 11219 USA</p>
                     <p>Have Any Questions? (209) 589-7746  </p>
                     <p>Mail Us info@twscrap.com</p>
                     <p>Affiliates</p>

                 </div>
				 <div class="col-md-3">
                     <h1>About Us</h1>
                     <p>At T&W Scrap L.L.C 
					<br> we pride ourselves in providing excellent service and rates.
					<br> We Buy scrap metals. All of our scales are certified and our weighing
					<br> process is held to the highest standard to make sure our clients get the most out of their scraps.</p>
                    
                 </div>
                 
                 
              
        
               
         </div>
         <hr>
       
             <p class="copyrightt">Copyright © <script>document.write(new Date().getFullYear())</script> T&W Scrap L.L.C. All Rights Reserved.</p>
         </div>

     </section>
    

 <script>  
	function loginMessage() {
        var e=document.getElementById("username").value;  
    var p=document.getElementById("email").value;  
    
		var error = document.getEementById("errormsg");

        
    
    if(e==''||p==''){  
        error.innerHTML = "<span style='color: red;'>"+
						"Please Fill in your username</span>";
    }  

		 else {
			error.innerHTML = "<span style='color: green;'>"+
						"Thank You for Your message, It has been Sent!</span>";
		}
	}
</script>





<script>

    var navLinks = document.getElementById("navLinks");

    function showMenu(){
        navLinks.style.right ="0";
    }

    function hideMenu(){
        navLinks.style.right ="-200px";
    }
	
	
	<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
</script>
</body>
</html>
 