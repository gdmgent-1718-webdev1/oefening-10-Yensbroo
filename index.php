<?php

    $isSubmitted = isset($_REQUEST['submit']) && isset($_POST['form']);
    $formInput = null;



    if($isSubmitted)
    {
        $formField = $_POST['form'];
        foreach($formField as $value) {
            if(!is_string($value)) {
                continue;
            }
            $formInput .= $value . PHP_EOL;
        }  

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php if($isSubmitted && !empty($formInput) && $value != ''): ?>
            <h2><?= $formInput ?></h2>
           
        <?php else :?>
            <form action="" method="POST">
                <div class="form-group row">
                    <label for="input-name">Voornaam:</label>
                    <input class="form-control <?= isset($formField) ? 'is-valid' : 'is-invalid' ?>" type="text" name="form[0]" >
                    <div class="invalid-feedback">Dit veld is leeg</div>
                 </div>
                <div class="form-group row">
                    <label for="input-lastname">Achternaam:</label>
                    <input class="form-control <?= isset($formField) ? 'is-valid' : 'is-invalid' ?>" type="text" name="form[1]">
                    <div class="invalid-feedback">Dit veld is leeg</div>
                </div>
                <div class="form-group row">
                    <label for="input-email">E-mail:</label>
                    <input class="form-control <?= isset($formField) ? 'is-valid' : 'is-invalid' ?>" type="email" name="form[2]">
                    <div class="invalid-feedback">Dit veld is leeg</div>
                </div>
                <div class="form-group row">
                    <label for="input-password">Wachtwoord:</label>
                    <input class="form-control <?= isset($formField) ? 'is-valid' : 'is-invalid' ?>" type="password" name="form[3]">
                    <div class="invalid-feedback">Dit veld is leeg</div>
                </div>
                <div class="form-group row">
                    <label for="input-message">Message:</label>
                    <input class="form-control <?= isset($formField) ? 'is-valid' : 'is-invalid' ?>" type="text" name="form[4]">
                    <div class="invalid-feedback">Dit veld is leeg</div>
                </div>
                <div class="row">
                    <input type="submit" class="btn btn-primary" value="verzenden" name="submit">
                </div>   
            </form>
    </div>
        <?php endif ?>
</body>
</html>