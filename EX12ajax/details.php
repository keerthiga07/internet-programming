<!DOCTYPE html>
<html>
<head>
  <title>Book Details</title>
</head>
<body>
  <h1>Book Details</h1>
  <form method="get">
    <label for="bookId">Enter Book ID:</label>
    <input type="text" id="bookId" name="bookId"><br><br>
    <input type="submit" value="Get Book Details">
  </form><br><br>
  <?php
    if (isset($_GET["bookId"])) {
      $bookId = $_GET["bookId"];
      $xml = simplexml_load_file("library book.xml");
      $book = $xml->xpath("//book[@id='$bookId']")[0];
      if ($book) {
        $title = $book->title;
        $author = $book->author;
        $publisher = $book->publisher;
        $price = $book->price;
        echo "<h2>$title</h2>";
        echo "<p>Author: $author</p>";
        echo "<p>Publisher: $publisher</p>";
        echo "<p>Price: $price</p>";
      } else {
        echo "<p>Book not found</p>";
      }
    }
  ?>
</body>
</html>
