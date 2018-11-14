<?php 
	function db_connect(){
		$conn = mysqli_connect("localhost", "root", "", "book_shop");
		if(!$conn){
			echo "Can't connect database " . mysqli_connect_error($conn);
			exit;
		}
		return $conn;
	}

	function select_books($conn, $x){
		$row = array();
		$query = "SELECT book_image_name, book_title, book_price, book_author FROM books WHERE book_category_id = $x";
		$result = mysqli_query($conn, $query);
		if(!$result){
		    echo "Can't retrieve data " . mysqli_error($conn);
		    exit;
		}
		for($i = 0; $i < mysqli_num_rows($result); $i++){ 
		// mysqli_num_rows($result) = total num of best seller books
			array_push($row, mysqli_fetch_assoc($result));
		}
		return $row;
	}

	function select_all_books($conn){
		$row = array();
		$query = "SELECT book_isbn, book_id, book_category_id, book_image_name, book_title, book_price, book_author FROM books";
		$result = mysqli_query($conn, $query);
		if(!$result){
		    echo "Can't retrieve data " . mysqli_error($conn);
		    exit;
		}
		for($i = 0; $i < mysqli_num_rows($result); $i++){ 
		// mysqli_num_rows($result) = total num of books
			array_push($row, mysqli_fetch_assoc($result));
		}
		return $row;
	}

	function select_contact($conn){
		$row = array();
		$query = "SELECT name, email, phone, message, contact_id FROM contact";
		$result = mysqli_query($conn, $query);
		if(!$result){
		    echo "Can't retrieve data " . mysqli_error($conn);
		    exit;
		}
		for($i = 0; $i < mysqli_num_rows($result); $i++){ 
		// mysqli_num_rows($result) = total num of best seller books
			array_push($row, mysqli_fetch_assoc($result));
		}
		return $row;
	}

?>