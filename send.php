<?php 

  
session_start();
	include("connection.php");
	include("functions.php");
	    $user_data = check_login($con);
        $user_name= $_POST['owner_name'];
        $user_id=$_POST['owner_id'];
        $sender=$user_data['user_name'];
        


      if(isset($_POST['submit_m'])){
        $recept=$_POST['m_id'];
        $response=$_POST['response'];
      }  
      if(isset($_POST['submit'])){
        $recept=$_POST['m_id'];
        $response=$_POST['response'];
      }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/send.css">
</head>
<body>
 
    
 
<div class="login-box">
  <h2>Message</h2>
  <form  method="POST" >
    <div class="user-box">
     <textarea placeholder="please describe the product then your message"   name="message"  cols="30" rows="5" required ></textarea>
     <input type="hidden" name="id" value="<?php echo $user_id; ?>">
     <input type="hidden" name="name" value="<?php echo $user_name; ?>">
     <input type="hidden" name="sender" value="<?php echo $sender; ?>">
     <input type="hidden" name="response" value="<?php echo "$response"; ?>">
     <input type="hidden" name="m_id" value="<?php echo "$recept"; ?>">
    </div>
   <input type="submit" style="width: 60px;position:absolute;left:170px;margin-top:15px ; border-radius:5px" name="submit" value="send">
  </form>
</div>
</body>
</html>
<?php
  if(isset($_POST['submit'])){  
    $choice=$_POST['choix'];
    $message=$_POST['message'];  
    $tab=explode(" ",$message);
    for ($i=1;$i<=count($tab);$i++){
      if ($i%3==0){
         $tab[$i]=$tab[$i].'<br>';}
}
$message=implode(" ",$tab);
    echo $message;
    $un= $_POST['name'];
    $ui=$_POST['id'];
    $sen=$_POST['sender'];
   mysqli_query($con,"insert into message values(' ','$ui','$un','$sen','$message',NOW(),'non')");
if ($response=='O'){
  mysqli_query($con,"update  message set etat='oui' where id='$recept' ");

}
mysqli_close($con);

  header("location:message.php");
    
    
}
 

?>