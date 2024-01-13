<!DOCTYPE html>
 <html>
 <head>
	 <title>Let's 🌴 upload🚩 your pic😃😃</title>
	 <meta charset="UTF-8"/>
	 <link rel="stylesheet" href="" type="text/css"/>
	 <style>
	 input{
	 margin:0 auto;
	 pidding:100px;
	 }
	 #justsend{
	 height:140px;
	 width:100%;
	 margin:10px;
	 opacity:0.9;
	 margin-top:50px;
	 font-size:50px;
	 
	}

	
#photo{
height:300px;
	width:100%;
	padding:0px;
	background:white;
	margin-top:200px;
	opacity:0.1;
}
	 #hover{
	 width:100%;
	 height:300px;
	 background-color: #BFFBAD ;
	 opacity:0.6;
	 position:absolute;
	 z-index:-1;
	 top:380px;
	 font-size:96px;
	 border-radius:10px;
	  color:black;
	 }
	 
	 h1{
	 font-size:60px;
	 color:red;
	 font-weight:normal;
	 font-family-screm real;
	 margin:0 auto;
	 margin-top:50px;
	 float:left;
	 }
	 
	 #h2{
	 margin:0;
	 padding:0;
	 font-size:55px;
	 float:left;
	 margin:10px;
	 position:relative;
	 top:110px;
	 }
	 
	 
	 #h22{
	 margin:0;
	 padding:0;
	 font-size:55px;
	 float:left;
	 margin:10px;
	 position:relative;
	 top:40px;
	 }
	 p{
	 font-size:19px;
	 background-color: #FFFFC7;
	 }
	 
	 img{
	 width:65%;
	 height:65%;
	 border-radius:35px 0px 35px 0px;
	 box-shadow:0px 5px 37px 7px blue;
	 }
	 center{
	 font-size:18px;
	 color:green;
	 font-weight:normal;
	 }
	 
	 </style> 
	
 </head>
	 <body>
	 
	
	 <h1>Click hear 👇👇Upload Your Pic</h1><h2 id= "h2">1.</h2>
	 <div id= "hover">touch here <p style= "font-size:27px; float:right; margin-right:250px;margin-top:60px;">to select image</p> <br><b style = "font-size:90px;">🌁🌅🌇⛵🚢🌚🌈🌛</b></div>
	 <form method= "post" action= "imgup.php" enctype= "multipart/form-data">
	 <input type= "file"name= "file" id"files" multiple=" " id="photo">
	 <br><h2 id= "h22">2.</h2>
	 <input type= "submit" value= "CLICK HEAR TO UPLOAD" name= "submit" id="justsend"></form>
	
	 
	 
	 <?php
if(isset($_POST["submit"]))
{
     $name=$_FILES['file']['name'];
	 $type=$_FILES['file']['type'];
	 $size=$_FILES['file']['size'];
	 $tmp=$_FILES['file']['tmp_name'];
	 
	 if($name==''){
	 echo "<script>alert('😛कृपया पहले फ़ाइल सेलेक्ट करे।👐')</script>";
	 }
	 if(($type=="image/jpeg")|| ($type=="image/jpg")||
	 ($type=="image/png")||
	 ($type=="image/gif")
	 ){
	 
	 if(file_exists('images/'.$_FILES['file']['name']))
	 { echo "file $name <center>😛😛यह फ़ाइल पहले से ही उपलोड है कृपया दुशरे फ़ाइल का चयन करें।
	 👈👈👈</center>";
	  exit();
	  }
	  
	  if($size<=500000000){
	  move_uploaded_file($tmp,"images/$name");
	  echo "<center><br><br><br>
	  
	🙏 धन्यवाद!! 🙏आपका फ़ाइल अपलोड हो गया है ।<br> <br><img src='images/$name'><br>
	 यह फ़ाइल कुछ दिनों के अंदर वेबसाइट 👏👆👆पर दिखने लगे गा ।
	  
	  </center>";
	  }
	 else{
	 echo"<script>alert('your file size is too large')</script>";}}
	 else{
	 echo "<center>$type 😁कृपया दुशरे फ़ाइल का चयन करें ।👈</center> ";
	 }
	 
	 
	 
	 
	 }
	 ?>
	 <center>
	 <p>if you have any photos regarding this site, which can be uploaded on this site, just upload that photo one by one by clicking TOUCH HEAR and select one photo ,then click on  UPLOAD button<br>👍👍👍thanking you......</p>
	 
	</center>
	 
	 
	 </body>
 </html>