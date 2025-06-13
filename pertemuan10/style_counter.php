<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Counter</title>
    <style>
        body {
            background: #f0f4f8;
            font-family: Arial, sans-serif;
            display: flex;
            height: 100vh;
            align-items: center;
            justify-content: center;
        }

        .counter-container {
            background: #fff;
            padding: 2rem 3rem;
            border-radius: 12px;
            box-shadow: 0 4px 24px rgba(0, 0, 0, 0.08);
            text-align: center;
        }

        .counter-title {
            font-size: 1.5rem;
            color: #333;
            margin-bottom: 1rem;
        }

        .counter-number {
            font-size: 2.5rem;
            color: #0078d7;
            font-weight: bold;
        }

        img {
            margin-top: 1rem;
            border-radius: 8px;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <div class="counter-container">
        <div class="counter-title">Visitor Counter</div>
        <?php
        $filename = 'counter.txt';
        $file = fopen($filename, 'r+');
        $hit = fread($file, filesize($filename));
        echo "<div class='counter-number'>Anda pengunjung ke-$hit</div>";
        echo '<img src="../assets/plakton aroo.jpg" alt="Description of Image" width="300" height="200">';
        fclose($file);

        $file = fopen($filename, 'w+');
        $hit++;
        fwrite($file, $hit, strlen($hit));
        fclose($file);
        ?>
    </div>
</body>

</html>