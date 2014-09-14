<?php

session_start();

include('header.inc.html');

?>



<?php
require('book_functions.inc.php');
require('mysqli_connect.php');

$book_id=$_GET['book_id'];

list($check, $data)= GetBookDetail($dbc, $book_id);

$books= GetBooks($dbc);

print "<div class='container'>
<div class='row'>
<div class='book-detail-container'>";

if($check)
{

	print "<div class='book-detail-image col-md-4'>
		<img src=/images/$data[imagename]></img>
	</div>

	<div class='col-md-6'>
		<h1>$data[book_name]</h1>
		<p>$data[description]</p>
	
		<a href=/read_online.php?book_id=$book_id class='book-button'>Read online</a>
		<a href=/download.php?book_id=$book_id class='book-button'>Download</a>

		<p class='available-on'>Coming soon on: </p>

		<ul id='storeOptions'>
<li>
<img class='alignnone size-full wp-image-1001' title='amazon-kindle' src='/img/amazon-kindle.jpg' alt='' height='' style=''/>
</li>


<li>
<img class='alignnone size-full wp-image-1005' title='google-play-books' src='/img/googlePlayBooks.png' alt='Google Play Books' />
</li>

<li>
<img class='alignnone size-full wp-image-1002' title='ibooks' src='/img/ibooks.jpg' alt='' />
</li>

<li class='center-store'>
<img class='alignnone size-full wp-image-1003' title='kobo' src='/img/kobo.jpg' alt=''/>
</li>

<li>
<img class='alignnone size-full wp-image-1006' title='m1' src='/img/m1-learning.png' alt='M1 Learning Centre'  />
</li>



</ul>

	</div>";

	print "
	<div class='col-md-2'>
	<div class='like-header'>
	You may like
	</div>
	<ul class='sidebar-books'>";

	 $i=0;
	foreach($books as $row)
	{
		if($i==2)
			break;

		print "<li class='sidebar-book'><a href=/book_details.php?book_id=$row[book_id]><img height=180 width=86 src=/images/$row[imagename]></img></a>";
		$i = $i + 1;
	}

	print "</ul></div>";

}

print '</div></div>';

print "<div class='row'>";
print "<div class='col-md-12'>
		<h3>Other books</h3>
		</div>";


print '</div></div>';


include('footer.inc.html'); 


  ?>