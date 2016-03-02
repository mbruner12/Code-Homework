<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
    <link href='https://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'>
        
    <link rel="stylesheet" type="text/css" href="main.css"/>
        
    <link href='https://fonts.googleapis.com/css?family=Lato:700' rel='stylesheet' type='text/css'>
    </head>
		<body>
<!--  Header Section  -->
            <header>
               
            </header>
 <!--  End Header Section  -->
 <!--  Hero Section  -->
	<section class="hero" id="hero">
		<div class="container">
			<div class="caption">
				<h1> Code Homework # 1 </h1>
                <div id="navcontainer">
                    <ul id="navlist">
                        <li><a href=#challenge1> Challenge 1 </a></li>
                        <li><a href=#challenge2> Challenge 2 </a></li>
                    </ul>
                    
		</div>
	</section>
	<!--  End Hero Section  -->
            
<!--  Challenge 1 Section  -->
	<section class="challenge1" id="challenge1">
		<div class="container">
			<div class="head">
				<h1> Challenge 1: Correct Change </h1>
            </div>
			
					<div class="features_list">
						 <?php
			$due = 341;
			$rendered = 400;
			$returned = $rendered - $due;
			$dollars = (int) ($returned / 100);
			$r2 = $returned - ($dollars * 100);
			$quarters = (int) ($r2 / 25);
			$r3 = $r2 - ($quarters * 25);
			$dimes = (int) ($r3 / 10);
			$r4 = $r3 - ($dimes * 10);
			$nickels = (int) ($r4 / 5);
			$r5 = $r4 - ($nickels * 5);
			$pennies = (int) $r5;
			
				print
					"<p> You are due $returned cents back in change total.</p>";
                    
				print
					"<p> You are due $dollars dollar(s), $quarters quarter(s), $dimes dime(s), $nickels nickel(s), $pennies penny(ies) back in change
					</p>";
	
			?>
			
						
					</div>					
				</div>
	</section>
	<!--  End Challenge 1 Section  -->

<!--  Challenge 2 Section  -->
	<section class="challenge2" id="challenge2">
		<div class="container">
			<div class="head">
				<h1> Challenge 2: 99 Bottles of Beer </h1>
                <p> (scroll) </p>
            </div>
        <div class=features_list>
			<?php
                $bottle = "bottles";
                $count = 99;
            for ($count= 99; $count >= 1; --$count) {
                if ($count == 2) {
                    print
                    " <p> $count $bottle of beer on the wall, $count $bottle of beer! Take one down and pass it around, " . ($count -1) . " bottle of beer on the wall! 
		</p>";
                } elseif ($count == 1) {
                    $bottle = 'bottle';
                    print
                    "<p> $count $bottle of beer on the wall, $count $bottle of beer!
		Take one down and pass it around, no more bottles of beer on the wall! 
		</p>";
                    break;
                } else {
                    echo
                    "<p>$count $bottle of beer on the wall, $count $bottle of beer!
		Take one down and pass it around, " . ($count -1) . " $bottle of beer on the wall! 
		</p>";
                
                }
            }
?>
            </div>
				</div
	</section>
	<!--  End Challenge 2 Section  -->  
            <!--  Footer Section  -->
	<footer>

	</footer>
	<!--  End Footer Section  -->

 
		</body>
</html>