<?php
include_once("post.php");
if(isset($_GET["empty"])) {
    $error =  htmlspecialchars($_GET["empty"]);
}else{
    $error = "";
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
    <span id="error"><?php echo $error;?></span>
    <div class="container">
        <?php foreach($posts as $post): ?>
        <div class="post">
            <h3>Post Tittle: <?php echo $post["title"]; ?></h3>
            <?php echo $post["pix"];?>
            <p>Post Description: <?php echo $post["body"];?></p>
            <p>Author: <?php echo $post["author"];?></p>
            <a href="readmore.php?post=<?php echo $post["id"]; ?>">Continue</a>
        </div>
        <?php endforeach; ?>
    </div>
    <footer><p>Copyright Ofatmobile &copy <?php echo date("Y");?></p></footer>
</body>
</html>
