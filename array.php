<?php
    if (isset($_GET['string1']) && isset($_GET['string2'])) {
        $array1 = explode(',', $_GET['string1']);
        $array2 = explode(',', $_GET['string2']);
        $result = array_merge($array1, $array2);
        $result = array_unique($result);
        $result(array_filter($result, function()) {
             if(4 < strlen($result));
        });
        
        $result = implode(';', $result);
        
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
                    <div class="mb-3">
                        <label for="string2" class="form-label">string 2</label>
                        <textarea class="form-control" id="string2" name="string2"><?= $_GET['string2'] ?? '' ?></textarea>
                    </div>
                    <div class="mb3">
                        <button class="btn btn-primary" type="submit">Result</button>
                    </div>
                    <?php if (isset($result)) : ?>
                        <div class="mb-3 mt-2">
                            <label for="result" class="form-label"></label>
                            <textarea class="form-control" id="string2" name="string2"><?= $result ?? '' ?></textarea>
                        </div>
                    <?php endif ?>
                </form>
            </div>
        </div>
    </div>
</body>
</html>