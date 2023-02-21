<form method="post" action="j.php">
  <label for="date">Date:</label>
  <input type="text" id="date" name="date">
  <label for="title">Title:</label>
  <input type="text" id="title" name="title">
  <label for="content">Content:</label>
  <textarea id="content" name="content"></textarea>
  <input type="submit" name="submit" value="Submit">
</form>
 <?php
// Read the news updates from the file
$news = file_get_contents("new.txt");

// Split the news updates into an array
$news_array = explode("\n", $news);

// Loop through the news updates and display them
foreach ($news_array as $id => $news_item) {
  if (empty($news_item)) {
    continue; // Skip empty lines
  }

  // Split the news update into its parts
  list($date, $title, $content) = explode("|", $news_item);

  // Output the news update HTML
  echo "<div class='news-item'>";
  echo "<h3>$title</h3>";
  echo "<p><em>$date</em></p>";
  echo "<p>$content</p>";
  echo "<a href='process.php?delete=$id' class='delete'>Delete</a>";
  echo "</div>";
}
?>