<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Bai 1:</p>
    <?php
    for($i = 0; $i < 20; $i ++) {
        for($j = (20 - $i); $j < 20; $j ++) {
            echo "*";
        }
        echo "<br>";
    }
    ?>

    <p>Bai 2:</p>
    <table border="1px">
    <tr>
    <?php
    for($i = 1; $i < 10; $i ++) {
            echo "<td>";
        for($j = 1; $j <= 10; $j ++) {
            echo "$i x $j = " . ($i * $j);
            echo "<br>";
        }
        echo "</td>";
    }
    ?>
    </tr>
    </table>

    <p>Bai 3:</p>
    <?php
    $a = 5;
    $b = 0;
    $c = 10;

    function tinhGiaithua($n) {
        $giai_thua = 1;
        if ($n == 0 || $n == 1) {
            return $giai_thua;
        } else {
            for($i = 2; $i <= $n; $i ++) {
                $giai_thua *= $i;
            }
            return $giai_thua;
        }
    }

    // tính giai thừa
    echo ("Giai thừa của " . $a . " là: " . tinhGiaithua ( $a ) . "<br>");
    echo ("Giai thừa của " . $b . " là: " . tinhGiaithua ( $b ) . "<br>");
    echo ("Giai thừa của " . $c . " là: " . tinhGiaithua ( $c ) . "<br>");
    ?>

    <p>Bai 4:</p>
    <?php
    function isPrimeNumber($n) {
        // so nguyen n < 2 khong phai la so nguyen to
        if ($n < 2) {
            return false;
        }
        // check so nguyen to khi n >= 2
        $squareRoot = sqrt($n);
        for ($i = 2; $i <= $squareRoot; $i++) {
            if ($n % $i == 0) {
                return false;
            }
        }
        return true;
    }
    
    $n = 111;
    echo ("Tất cả các số nguyên tố nhỏ hơn $n là: <br>");
    if ($n >= 2) {
        echo "2";
    }
    for ($i = 3; $i < $n; $i+=2) {
        if (isPrimeNumber($i)) {
            echo (" " . $i);
        }
    }
    ?>

</body>
</html>
