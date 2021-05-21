<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Изменение столбца из JSON файла</title>
</head>
<body>
    <p>Было:</p>
    <pre>
        <?php
        $text = file_get_contents('./pages_name.json');
        $json = json_decode($text , true);
        var_dump($json);?>
    </pre>
    <?php
    $text = file_get_contents('./pages_name.json');
    $json = json_decode($text , true);
    $searchedProduct = 4;
    
    foreach ($json as &$nameProduct){
    if($nameProduct['id'] === $searchedProduct){
        $nameProduct['name'] = "Product4";
        }
    }
    echo "<p>Стало:</p>";
    echo "<pre>";
    var_dump($json);
    echo "</pre>";
    file_put_contents('./pages_name.json', json_encode($json));    
    ?>
    
</body>
</html>