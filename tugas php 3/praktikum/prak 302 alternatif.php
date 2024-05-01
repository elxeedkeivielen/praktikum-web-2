<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial- scale=1.0">
    <title>PRAK 302</title>
    <style>
        .tab {
            width: 20px;
            height: 20px;
            display: inline-block;
        }

        .indent {
            display: inline-block;
        }

        table {
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Tinggi:</td>
                <td><input type="number" name="tinggi" min="1" required></td>
            </tr>
            <tr>
                <td>Alamat Gambar:</td>
                <td><input type="url" name="url" value="https:/a/cdn0.iconfinder.com/data/icons/web-and-mobile-icons-volume-2/128/52-512.png" required></td>
            </tr>
        </table>
        <input type="submit" value="Cetak">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $tinggi = (int)$_POST['tinggi'];
        $url = $_POST['url'];

        $a = 1;
        while ($a <= $tinggi) {
            echo str_repeat("<span class='indent' style='width: 20px;'></span>", $a - 1);
            $c = $tinggi;
            while ($c >= $a) {
                echo "<img src='" . htmlspecialchars($url, ENT_QUOTES) . "' class='tab'>";
                $c--;
            }
            echo '<br>';
            $a++;
        }
    }
    ?>
</body>

</html>
