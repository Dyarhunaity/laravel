<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>list</title>
</head>
<body>
    <ul>
    <?php foreach ($tasks as $value) {
        echo "<li>".$value."</li>";
    }; ?>
    </ul>
</body>
</html>