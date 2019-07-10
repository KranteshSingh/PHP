<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */

echo rand(1000,9999);
echo "<br>";
echo strlen("How Are you?");
echo "<br>";
$number = [32,434,434,6554,6535623,5655343];
echo max($number);

	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>