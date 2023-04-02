<?php
    // if (file_exists('new/test.txt')) {
    //     echo 'yes';
    // } else {
    //     echo 'no';
    // }
echo '<pre>';
    // $array = scandir(__DIR__);
    // unset($array[0], $array[1]);
    // print_r($array);

    if (isset($_POST['comment']) && isset($_POST['user'])) {
        $comment = $_POST['user'] . '***' . $_POST['comment'];

        if (file_put_contents('comments.txt', $comment, FILE_APPEND)) {

        } 
    }
$text = file_get_contents('comments.txt');
$comments = explode('|||', $text);

echo '</pre>';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <form action="" method="POST">
                <div class="mb-3">
                        <label for="user" class="form-label">name</label>
                        <input type="text" class="form-control" id="user" name="user">
                    </div>
                    <div class="mb-3">
                        <label for="comment" class="form-label">Comment</label>
                        <input type="text" class="form-control" id="comment" name="comment">
                    </div>
                    </div>
                    <div class="mb3">
                        <button class="btn btn-primary" type="submit">Send</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <?php foreach($comments as $comment): ?>
                    <?php if($comment): ?>
                        <?php explode('***', $comment) ?>
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