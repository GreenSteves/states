<!-- AT 15:35 in the video
https://vimeo.com/566152061?share=copy -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>States</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">States</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="sitebuilder.php">Re-Generate Pages</a></li>
        <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container"><div class="row"><div class="col-md-12">

<body>
<div class="table-responsive">
<table class="table table-hover table-striped table-bordered"><tr>

<?php

// https://en.wikipedia.org/wiki/List_of_states_and_territories_of_the_United_States

// For example
// https://en.wikipedia.org/wiki/New_Hampshire

// https://jaxcode.com/stateflags/Alabama.svg.png


$states = array("Alabama","Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "Florida", "Georgia", "Hawaii", 
"Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi", 
"Missouri", "Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Carolina","North Dakota","Ohio", "Oklahoma", "Oregon", 
"Pennsylvania", "Rhode Island", "South Carolina", "South Dakota","Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington", "West Virginia", "Wisconsin", 
"Wyoming");

$counter = 1;

foreach ($states as $state) {
// State Name as Text

// State Name with underscore if multiple words
$stateUnderscore = preg_replace("/\s+/","_", $state);

// lowecase state name with underscore if multiple words
$stateLowercase = strtolower($stateUnderscore);

$flagURL = "https://jaxcode.com/stateflags/{$stateUnderscore}.svg.png";
$wikiURL = "https://en.wikipedia.org/wiki/{$stateLowercase}";
$pageURL = "./pages/{$stateLowercase}.html";

echo "<td>";
echo "<img src=\"{$flagURL}\" class=\"img-responsive\" alt=\"{$state} Flag\" width=\"150\" height=\"100\">";
echo "<br>";
echo "<a href=\"{$pageURL}\">{$state}</a>";
echo "<br>";
echo "<br>";
echo "</td>";

if ($counter%5== 0) {
    echo "</tr>";
    if ($counter < 50) {
        echo "<tr>";
    }
}
$counter++;

// echo $flagURL."<br>";

// $file_name = "./pages/page_".$i.".html";
//     echo $file_name."<br>";

}

?>


</tr>
</table>
</div>


</div></div></div>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>
