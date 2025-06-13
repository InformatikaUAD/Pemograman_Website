<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // open counter.txt file
    $filename = 'counter.txt';
    $file = fopen($filename, 'r+');

    // get the current count and save it to a variable $hit
    $hit = fread($file, filesize($filename));


    // show up
    echo ("Anda pengunjung ke-$hit");
    // close the file
    fclose($file);

    // open the file again to update the count
    $file = fopen($filename, 'w+');

    // increment the count by 1
    $hit++;
    // save
    fwrite($file, $hit, strlen($hit));

    fclose($file);
    ?>
</body>

</html>