<?php
    if (isset($_GET['string1'])) {
        $string2 = lcfirst($_GET['string1']);
        $string2 = str_replace('water', 'wine', $string2);
        // $string2 = str_shuffle
    }
    // if (isset($_GET['string1'])) {
    //     $string2 = str_replace('water', 'wine', $_GET['string1']);
    // }
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
                <form action="">
                    <div class="mb-3">
                        <label for="string1" class="form-label">string 1</label>
                        <textarea class="form-control" id="string1" name="string1"><?= $_GET['string1'] ?? '' ?></textarea>
                    </div>
                    <div class="mb3">
                        <button class="btn btn-primary" type="submit">Result</button>
                    </div>
                    <?php if (isset($string2)) : ?>
                        <div class="mb-3 mt-2">
                            <label for="string2" class="form-label"></label>
                            <textarea class="form-control" id="string2" name="string2"><?= $string2 ?></textarea> 
                        </div>
                    <?php endif ?>
                    <div class="mb-3">
                        <label for="string1" class="form-label">string 1</label>
                        <textarea class="form-control" id="string1" name="string1"><?= $_GET['string1'] ?? '' ?></textarea>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>