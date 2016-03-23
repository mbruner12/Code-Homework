<!DOCTYPTE html>
<html>
<head>
	<meta charset="UTF-8">
</head>
<link rel="stylesheet" type="text/css" href="codehw3.css">
<link href='https://fonts.googleapis.com/css?family=Lato:900,400|Dancing+Script:400,700' rel='stylesheet' type='text/css'>
	<body>

		
<!-- Nav --> 
<section class="nav" id=nav>
	<div class=buttons>
						<h2>
                        <a href=#ch1> Challenge 1 </a>
                        <a href=#ch2> Challenge 2 </a>
                    	</h2>
	</div>
		</section>
		
<!-- Challenge 1 -->

<section class="ch1" id="ch1">
	<h1> Challenge 1 </h1>
<?php
	$books = array (
    array ("PHP and MySQL Web Development", "Luke       
        Welling", "144", "Paperback", 31.63), 
    array("Web Design with HTML, CSS, JavaScript and        
        jQuery","Jon Duckett", "135", "Paperback", 41.23),
    array("PHP Cookbook: Solutions & Examples for PHP Programmers", "David Sklar", "14", "Paperback", 40.88),
    array("JavaScript and JQuery: Interactive Front-End Web Development", "Jon Duckett", "251", "Paperback",
      22.09),
    array("Modern PHP: New Features and Good Practices",
        "Josh Lockhart","7", "Paperback", 28.49),
    array("Programming PHP", "Kevin Tatroe", "26",      
        "Paperback", 28.96),  

	);
	$total = 0;
		$price = $books[0][4];
		$i = 0;
	
		?>
 <table>
	 <tr>
		 <th> Title </th>
		 <th> Author </th>
		 <th> Pages </th>
		 <th> Type </th>
		 <th> Price </th>
	</tr>
<?php 
        foreach($books as $row)
 {
  echo('<tr>');
  echo('<td>');
  echo(implode('</td><td>', $row));
  echo('</td>');
  echo('</tr>');
} 
	  ?>
</table>
	
<!--this for me was the hardest part, I'm still not totally sure why it needs a "for" loop and and if/else statement. Isn't that what the parenthetical after "for" should be?-->
		<?php
	 for ($i= 0; $i <= 5; $i++) {
                if ($i <= 5) {
                $price = $books[$i][4];
					$pricetotal = $total += $price;
				}
				else {
				
                    break;
		}
	}
?>
	
<?php
	echo "<h2>The total is:</h2>";
	echo  "<h2>$pricetotal</h2>"; 
?>
		
</section>
		
<!--Challenge 2 -->

<section class="ch2" id="ch2">	
<h1> Challenge 2 </h1>

    <?php

	function coin_toss ($win = func_get_args) {
		$headCount = 0;
    	$flipCount = 0;
    	$heads = ("<img src='http://random-ize.com/coin-flip/canada-1-cent/canada-1-cent-front.jpg' height=52 width=52>");
		$tails = ("<img src='http://www.jasondunn.com/objects/Canadian-1-Cent-Penny-Tails.png' height=42 width=42>");
		
		echo "<p>Flip a coin until you get heads $win in a row!</p>";
		
		while ($headCount < $win) {
        $flip = mt_rand(0,1);
        $flipCount ++;
        if ($flip){
            $headCount ++;
            echo "$heads";
        }
        else {
            $headCount = 0;
            echo "$tails";
			}
		}	
	echo "<p>It took {$flipCount} flips!</p>";

	}
		echo coin_toss(5);

		?>
		</section>
<div class=footer>
		<h3> Mia Bruner | LIS 697 | Pratt School of Information | Code Homework 3 | March 23, 2016 </h3>
</div>
</body>
</html>