<!DOCTYPTE html>
<html>
<head>
	<meta charset="UTF-8">
	</head>
<body>
<h1> Challenge 1 </h1>

<?php
     $a = 0;
    $b = 7;
    $c = 4;
    $d = 7;
    $e = 5;
    $f = 3;
    $g = 2;
    $h = 6;
    $i = 9;
    $j = 9;
    $isbn = "$a$b$c$d$e$f$g$h$i";
function isbncheck($a, $b, $c, $d, $e, $f, $g, $h, $i) {
    $equation = (10 * $a) + (9 * $b) + (8 * $c) + (7 * $d) + (6 * $e) +
        (5 * $f) + (4 * $g) + (3 * $h) + (2 * $i) + (1 * $j);
    $result = (int)($equation / 11);
}

    print
        "<p>Checking if ISBN $isbn is valid...</p>";
    
if ($result = 0) 
    {
    print
					"<p> This is a valid ISBN!
					</p>";
    }
    else {
        print
					"<p> This is a valid ISBN!
					</p>";
         }    
?>
    
    <h1> Challenge 2 </h1>

    <h2> Part A </h2>
<?php
    $heads = ("<img src='http://random-ize.com/coin-flip/canada-1-cent/canada-1-cent-front.jpg' height=52 width=52>");
    $tails = ("<img src='http://www.jasondunn.com/objects/Canadian-1-Cent-Penny-Tails.png' height=42 width=42>");
    $coin = array ($heads, $tails);
    $counter = count($coin);
    $flip = (mt_rand()%$counter);
    $show = "$coin[$flip]";
    
    print "<p>Flipping coin 1 time...</p>";    
         print "$show";
    
     print "<p>Flipping the coin 3 times...</p>";    
        print "$show";
        print "$show";
        print "$show";
    
       print "<p>Flipping the coin 5 times...</p>";    
        print "$show";
        print "$show";
        print "$show";
        print "$show";
        print "$show";
    
     print "<p>Flipping the coin 7 times...</p>"; 
        print "$show";
        print "$show";
        print "$show";
        print "$show";
        print "$show";
        print "$show";
        print "$show";
    
        
     print "<p>Flipping the coin 9 times...</p>"; 
        print "$show";
        print "$show";
        print "$show";
        print "$show";
        print "$show";
        print "$show";
        print "$show";
        print "$show";
        print "$show";

    
        
    ?>
    
     <h2> Part B </h2>
    <p>Flip a coin until you get two heads in a row!</p>
    <?php
    $headCount = 0;
    $flipCount = 0;
    $heads = ("<img src='http://random-ize.com/coin-flip/canada-1-cent/canada-1-cent-front.jpg' height=52 width=52>");
    $tails = ("<img src='http://www.jasondunn.com/objects/Canadian-1-Cent-Penny-Tails.png' height=42 width=42>");
        while ($headCount < 2) {
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

    ?>



</body>
</html>