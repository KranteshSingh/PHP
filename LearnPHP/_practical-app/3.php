<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP

	Step 2: Make a forloop  that displays 10 numbers

	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

 if(3>4){
	 echo "No";
 }
 else if(4>5){
	 echo "No";
 }
 else{
	 echo "I love PHP"."<br>";
 }
 
 

 for($i=0;$i<10;$i++){

	echo $i."<br>";
 }

 $number = 30;
 switch($number){

case 30: echo "this is what we found";
break;
case 2: echo "No this is not what we are looking for";
break;
case 4: echo "How you doing";
break;
case 15: echo "Ï am Okay";
break;
case 19: echo "How you doing Again";
break;

default: echo "Nothing matched";
 }
	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>