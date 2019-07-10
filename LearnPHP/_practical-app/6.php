
<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">
		
		<?php Navigation();?>
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
 

	<?php  

/*  Step1: Make a form that submits one value to POST super global


 */

if(isset($_POST['submit'])) {
    
	$name = array("Krantesh", "Shivam", "Rohit", "Ritesh", "Hola", "Bhola", "Shola", "Tommy");
		
		$minimun = 5;
		$maximun = 10;
	
	$username = $_POST['username'];
	$password = $_POST['password'];
		
	  if(strlen($username) < $minimun ) {
	  
		  echo "Username has to be longer than five";
	  
	  }  
		
		if(strlen($username) > $maximun  ) {
	  
		  echo "Username cannot be longer than 10 ";
	  
	  }  
		
		if(!in_array($username,$name)) {
		
			echo " Sorry you are not allowed";
		
		} else {
		
		echo "Welcome";
		}
		
	//echo "Hello" . $username;   
	//echo "Your Password is " . $password;
	
	
	}
	
?>

<form action="6.php" method="post">
    
<input type="text" name="username" placeholder="Enter Username"><br>
<input type="password"  name="password" placeholder="Enter Password"><br>
<input type="submit" name="submit">
    
    
</form>


</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>