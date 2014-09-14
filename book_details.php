<?php

session_start();

include('header.inc.html');

?>



<?php
require('book_functions.inc.php');
require('mysqli_connect.php');

$book_id=$_GET['book_id'];

list($check, $data)= GetBookDetail($dbc, $book_id);

print "<div class='row'>";

if($check)
{

	print "<div class='book-detail-image col-md-4'>";

	print "<img src=/images/$data[imagename]></img>";
	print '</div>';


	print "<div class='col-md-8'>";

	print "<h1>$data[book_name]</h1>";

	print "<p>$data[description]</p>";

	print "<a href=/read_online.php?book_id=$book_id class='book-button'>Read online</a>";


	print "<a href=/download.php?book_id=$book_id class='book-button'>Download</a>";

	print '</div>';



}






print "</div>";

include('footer.inc.html'); 


  ?>