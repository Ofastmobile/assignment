<?php
include_once("post.php");
if(isset($_GET["post"])) {
    $id =  htmlspecialchars($_GET["post"]);
    $post_title = $posts[$id]["title"];
    $post_body = $posts[$id]["body"];
    $author = $posts[$id]["author"];
    $pix = $posts[$id]["pix"];
} else {
    // die("You did not click on any post post");
    header("Location: index.php?empty=Please, select a Post");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROJECT 1</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>PROJECT 1 PREMIUM  COURSE</h1>
    <div class="container">
        
        <div style="width:50%" class="post">
            <h3>Post Tittle: <?php echo  $post_title; ?></h3>
            <?php echo $pix;?>
            <p>Post Description: <?php echo $post_body;?></p>
            <small>Author: <?php echo $author;?></small>
           

        <br> <br>
        <form action="">
            <label>Email</label>
            <input type="email" name="email" placeholder="Your email">
            <label>Comment</label>
            <textarea name="comment" id="" cols="40" rows="10" placeholder="Your Comment Here!" style="padding: 3px;" ></textarea>
            <button>Send Comment</button>
            <!-- <input type="submit" name="comment" value="Send Comment"> -->
        </form>
        <a href="index.php">Go Back</a>
        </div>
    </div>
    <footer><p>Copyright Ofatmobile &copy <?php echo date("Y");?></p></footer>
</body>
</html>
