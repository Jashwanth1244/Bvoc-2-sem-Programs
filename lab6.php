<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
echo "<h1> refresh page</h1>"; 
$file = 'count.txt'; 
$c = file_get_contents($file); 
file_put_contents($file,$c+1); 
echo "the number of users visited :".$c; 
?>
</body>
</html>