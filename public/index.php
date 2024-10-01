<?php
// Főoldal
include_once 'src/controllers/ContentController.php';
$contentController = new ContentController();
$contents = $contentController->getAllContent();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/styles.css">
    <title>PHP CMS</title>
</head>
<body>
    <h1>Üdvözöllek a PHP CMS rendszerben!</h1>
    <div class="content-list">
        <?php foreach ($contents as $content): ?>
            <h2><?php echo $content['title']; ?></h2>
            <p><?php echo $content['body']; ?></p>
        <?php endforeach; ?>
    </div>
</body>
</html>
