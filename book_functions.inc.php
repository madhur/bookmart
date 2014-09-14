<?php


function GetBooks($dbc)
{
		$q = "SELECT book_id, book_name, author, description, filename, imagename from books";

		$r = mysqli_query($dbc, $q);

		$results=array();

		while($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
		{

			array_push($results, $row);

		}

		return $results;
}

function GetBookDetail($dbc, $book_id)
{
		$q = "SELECT book_id, book_name, author, description, filename, imagename from books where book_id=".$book_id;

		$r = mysqli_query($dbc, $q);		

		if(mysqli_num_rows($r)==1)
		{
			$row = mysqli_fetch_array($r, MYSQLI_ASSOC);

			return array(true, $row);
		}
		else
			return array(false, null);
				
}

function truncateString($string) {
    if (strlen($string) > 10) {
        $string = substr($string, 0, 300) . "...";
    }
    return $string;
}

?>