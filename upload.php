<!DOCTYPE html>
 <html>
 <head>
	 <title>Untitled</title>
	 <meta charset="UTF-8"/>
	 <link rel="stylesheet" href="" type="text/css"/>
	 <style>
	 input{
	 margin:0 auto;
	 pidding:100px;
	 }
	 img{
	 width:50%;
	 height:50%;
	 
	 }
	 center{
	 font-size:42px;
	 color:green;
	 }
	 
	 </style>
 </head>
	 <body>
	
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
	  echo "<center>
	  
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
	 
	 
	
	 </body>
 </html>