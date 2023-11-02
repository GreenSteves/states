<p>Click Button to Generate US States Pages.</p>
<form action="sitebuilder.php" method="POST">

<button type="subit" name="makesite">Generate States Websites</button>
</form>

<?php

if(isset($_POST["makesite"])) {

// https://en.wikipedia.org/wiki/List_of_states_and_territories_of_the_United_States

$states = array("Alabama","Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "Florida", "Georgia", "Hawaii", 
"Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi", 
"Missouri", "Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Carolina","North Dakota","Ohio", "Oklahoma", "Oregon", 
"Pennsylvania", "Rhode Island", "South Carolina", "South Dakota","Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington", "West Virginia", "Wisconsin", 
"Wyoming");

foreach ($states as $state) {
// Build all Pages

// State Name with underscore if multiple words
$stateUnderscore = preg_replace("/\s+/","_", $state);
// lowecase state name with underscore if multiple words
$stateLowercase = strtolower($stateUnderscore);

$flagURL = "https://jaxcode.com/stateflags/{$stateUnderscore}.svg.png";
$wikiURL = "https://en.wikipedia.org/wiki/{$stateLowercase}";
$pageURL = "./pages/{$stateLowercase}.html";

$file_name = "./pages/".$stateLowercase.".html";
$myFile = fopen($file_name, "w") or die("Unable to open file!");

$website_text = <<<EOT
    <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>$state</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  </head>
  <body>
<h1>$state</h1>
<img src="$flagURL" class="img-responsive" alt="$state Flag" width="150" height="100">
<br><br>
<iframe src="$wikiURL" height="1000" width="800" title="$state Wikipedia Page"></iframe>

  <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </body>
</html>
EOT;

fwrite($myFile,$website_text);
fclose($myFile);

echo ".";
}
echo "<br>";
echo "Sitebuilder Complete! Page have been generated.<br>";
echo "<a href=\"index.php\">Click to Go to State Gallery Page</a>"; 
}
unset($_POST["makesite"]);
?>
