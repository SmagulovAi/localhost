<?php
    if (isset($_GET['number1']) && isset($_GET['number2']) && isset($_GET['operator'])) {
        switch ($result) {
            case '-':
                echo $_GET['number1'] - $_GET['number2'];
                break;
        }
    }
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
                        <label for="number1" class="form-label">Number 1</label>
                        <input type="number" class="form-control" id="number1" name="number1" value="<?= $_GET['number1'] ?? '' ?>">
                    </div>
                    <div class="mb-3">
                        <label for="operator" class="form-label">Operator</label>
                        <!-- <input type="text" class="form-control" id="operator" name="operator"> -->
                        <select class="form-select" aria-label="Default select example" id="operator" name="operator">
                            <option selected>+</option>
                            <option>-</option>
                            <option value="2">*</option>
                            <option value="3">/</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="number2" class="form-label">Number 2</label>
                        <input type="number" class="form-control" id="number2" name="number2" value="<?= $_GET['number2'] ?? '' ?>">
                    </div>
                    <div class="mb3">
                        <button class="btn btn-primary" type="submit">Result</button>
                    </div>
                    <?php if (isset($result)) : ?>
                        <div class="mb-3 mt-2">
                            <label for="number" class="form-label">Result</label>
                            <input type="number" class="form-control" id="result" name="Result" value="<?= $result ?>">
                    <?php endif ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>