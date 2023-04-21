
<?php 
    require_once 'sample.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>下のボタンを押すとアラートが表示されます</h1>
    <button onclick="clickBtn()">ボタンを押してください</button>
    <h2><?= $num1 ?></h2>
    <script src="sample.js"></script>
</body>
</html>