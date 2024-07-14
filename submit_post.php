<?php
if ($_SERVER['REQUEST_METHOD']=== 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $author = $_POST['author'];
    // Save the post to your database
    // Example: Insert into 'posts' table
    $sql ="INSERT INTO posts (title , content , author) VALUES ('$title', '$content', '$author')";
    // Redirect to a success page or back to the blog page
    header ('Location: blog.html');
    exit;
}
?>