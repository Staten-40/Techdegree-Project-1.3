
<?php include 'inc/functions.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Random Quotes</title>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/styles.css">

    <!--Random Color Generator:  Randomly generates any background color on the hexadecimal color wheel-->
    <!--modified code from http://thisinterestsme.com/random-rgb-hex-color-php/ -->
    <?php
    $red = rand(0, 255);
    $blue = rand(0, 255);
    $green = rand(0, 255);
    $color = "rgb($red, $blue, $green);";

    ?>

    <!--With <style> tag, used $color to output random color to the screen -->
     <style>
        body {

            background-color: <?php echo $color; ?>
        }


    </style>
</head>
<body>

        <div class="container">
            <div id="quote-box">
                <!--Called the printQuote function within the 'quote-box' HTML element.-->
                <?php echo printQuote($quotes) ?>
                <!--<p class="quote">Every great developer you know got there by solving problems they were unqualified to solve until they actually did it</p><p                       class="source">Patrick McKenzie<span class="citation">Twitter</span><span class="year">2016</span></p>
            </div>-->

        </div>
    <button id="loadQuote" onclick="window.location.reload(true)" >Show another quote</button>
  </div>
</body>
</html>