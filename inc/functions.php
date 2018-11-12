<?php

//Quotes:  Created a multidimensional array of 5 quotes using '$quotes' as the outer most part of the array
//used for format reference - https://www.youtube.com/watch?v=NB3zMWwRJQ0, Codecourse, Published on Nov 14, 2016
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

// Created getRandomQuote function used to invoke array using the 'rand' build-in function
//Subtracted 1 as there are 5 variables and first key in '$quotes' starts with zero
//reference:  https://www.youtube.com/watch?v=NB3zMWwRJQ0, Codecourse, Published on Nov 14, 2016
function getRandomQuote($array) {

    $getQuote = $array[rand(0, count($array) - 1)];
    return $getQuote;

}

//Created printQuote function that passes into getRandomQuote function and stored in '$ranQuote' variable
//Created empty string per instruction: Is this even needed for the code?

function printQuote($array) {
    $ranQuote = getRandomQuote($array);
    $startString = "";

//Using HTML template, created variables to hold the $ranQuote 'quote' and 'source'
//Square brackets used because 'quote' and 'source' exist in array
//Strings wrapped in HTML <p> tags per template, <p> tag omitted in $sourceHTML string because 'quote' and 'source' alone do not complete all quotes to be displayed
$quote = $ranQuote ['quote'];
$quoteHTML = "<p class=\"quote\"> $quote </p>";
$source = $ranQuote ['source'];
$sourceHTML = "<p class=\"source\"> $source";

//Conditional statement to add 'citation' to 'quote' if included in quote
//Used 'array_key_exists' built-in function to conditionally append 'citation' and 'year' to string
if(array_key_exists('citation', $ranQuote)) {
    $citation = $ranQuote ['citation'];

//Include <span> tag in string for proper quote formatting when displayed
    $citationHTML = "<span class=\"citation\"> $citation</span>";

//A new string, $sourceHTML, concatenated using given HTML template appending '$citationHTML' to 'quote'
    $sourceHTML = $sourceHTML . $citationHTML;

}
//Conditional statement to add 'year' to quote if included
    if(array_key_exists('year', $ranQuote)) {
        $year = $ranQuote ['year'];
        $yearHTML = "<span class=\"year\"> $year </span>";

//A new string, concatenated, using given HTML template appending '$yearHTML' to 'quote'
        $sourceHTML = $sourceHTML . $yearHTML;

    }
    //Close statement with appropriate HTML tag
       $sourceHTML = $sourceHTML . "</p>";

//Concatenated string to display complete HTML string
    $startString = $quoteHTML . $sourceHTML;

    //Displays quotes randomly to screen
    return $startString;

}


