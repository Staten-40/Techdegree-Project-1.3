<?php

// Associative array for quote element
// Five Quotes for Random Quote Generator

$quotes = [
[
    'quote' => 'If you are always trying to be normal, you will never know how amazing you can be.',
    'source' => 'Maya Angelou'
],
[   'quote' => 'A new idea must not be judged by its immediate results.',
    'source' => 'Nikola Tesla'
],
[   'quote' => 'All right, but when they attack the car, save the radio.',
    'source' => 'Nicolas Cage',
    'citation' => 'as Randy in Valley Girl',
    'year' => '1983'
],
[   'quote' => 'Who looks outside dreams; who looks inside awakens.',
    'source' => 'Carl Jung'
],
[   "quote" => "Your life is your message to the world.  Make sure it's interesting.",
    "source" => "Jean Michel Basquiat"
]];

//var_dump(array_keys($quotes));

// getRandomQuote function
//Created variable to retrieve quotes randomly using the rand build-in function
//Subtracted 1 as there are 5 variables and first key in $quotes starts with zero

function getRandomQuote($array) {

$runArray = $array[rand(0, count($array) - 1)];
return $runArray;
}

// printQuote function
//Called getRandomQuote on array and stored in variable


function printQuote($array) {

$ranQuote = getRandomQuote($array);
$startString = "";
$quote = $ranQuote ['quote'];
$quoteHTML = "<p class=\"quote\"> $quote </p>";
$source = $ranQuote ['source'];
$sourceHTML = "<p class=\"source\"> $source";

//Conditional statement to add 'citation' and 'year' to quote if both are included in quote
//Used PHP Manual for proper built-in function to conditionally append 'citation' and 'year' to string
if(array_key_exists('citation', $ranQuote)) {
    $citation = $ranQuote ['citation'];
    $citationHTML = "<span class=\"citation\"> $citation </span>";

//A new string, concatenated, using given HTML template  for 'source' and 'citation'
    $sourceHTML = $sourceHTML . $citationHTML;

}
    if(array_key_exists('year', $ranQuote)) {
        $year = $ranQuote ['year'];
        $yearHTML = "<span class=\"year\"> $year </span>";
        $sourceHTML = $sourceHTML . $yearHTML;

    }
    //Close statement with appropriate HTML tag
       $sourceHTML = $sourceHTML . "</p>";

//Concatenated string to display complete HTML string
    $startString = $quoteHTML . $sourceHTML;

    //Displays quotes randomly to screen
    return $startString;

}


