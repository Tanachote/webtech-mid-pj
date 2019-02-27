<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Country</title>
</head>
<body>
    <table>
    <thead>
    <tr>
    <td>Head</td>
    </tr>
    </thead>
    </table>
    <tbody>
    <?php foreach($countries as $c):?>
    <tr>
        <td> 
        <?= $c->Name; ?>
        </td>
    </tr>
<?php endforeach ?>
    </tbody>
</body>
</html>