<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $author = trim($_POST['author']);
  $message = trim($_POST['message']);

  if ($author && $message) {
    $timestamp = time();
    $line = "$timestamp|" . str_replace('|', '', $author) . "|" . str_replace('|', '', $message) . "\n";
    file_put_contents("forum_data.txt", $line, FILE_APPEND);
  }
}
header("Location: " . $_SERVER['HTTP_REFERER']);
exit;
?>
