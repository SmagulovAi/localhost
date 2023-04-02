<?php

if (isset($_POST['comment']) && isset($_POST['name'])) {
    $comment = ['time' => time(), 'name' => $_POST['name'], 'comment' => $_POST['comment'],];

    if (!file_exists('comments_json.txt')) {
        file_put_contents('comments_json.txt', json_decode());
    }
    
}

$text = file_get_contents('comments.txt');
$comments = explode("|||", $text);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script ></script>
</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary">Send</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-12">
                <?php foreach($comments as $comment): ?>
                    <?php if($comment): ?>
                        <?php $comment = explode('***', $comment) ?>
                        <div class="alert alert-success">
                            <b><?= $comment[0] ?></b><br>
                            <?= $comment[1] ?>
                        </div>
                    <?php endif; ?> 
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</body>

</html>