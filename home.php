<?php

session_start();

include('header.inc.html');

?>
<div class="container">
<div class='row'>
<div class="panel panel-primary">
	
	Our Books
</div>

<?php
require('book_functions.inc.php');
require('mysqli_connect.php');

$results = GetBooks($dbc);





foreach($results as $row)
{


print "<div class='book-col col-md-4 col-xs-12 col-sm-6 col-lg-3'>";

print '<div class="book-panel panel panel-default">
  <div class="panel-body">';
    

echo "<div class='book-detail'><a href=/book_details.php?book_id=$row[book_id]><img height=270 width=180 src=/images/$row[imagename]></img></a></div>";

//echo "<div class='book-text'>";
//echo truncateString($row['description']);
//echo "</div>";

echo "<a href='/book_details.php?book_id=$row[book_id]' class='book-button'>View ebook</a>";


print '</div>
</div>';

print "</div>";



}


print "</div>";
print "</div>";

include('footer.inc.html'); 


  ?>