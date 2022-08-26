<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai1</title>
</head>
<body>
    <form method="post" action="">
    <div>
        <label for="a">Số a:</label><br>
        <input type="text" name="a" value="" />
    </div>
    <div>
        <label for="b">Số b:</label><br>
        <input type="text" name="b" value="" />
    </div>
    <div>
        <br>
        <input type="submit" name="calculate" value="Tính" />
    </div>
    </form>
    
    <?php
        $result = '';
        if (isset($_POST['calculate']))
        {
            // Bước 1: Lấy thông tin
            $a = isset($_POST['a']) ? (float)trim($_POST['a']) : '';
            $b = isset($_POST['b']) ? (float)trim($_POST['b']) : '';
         
            // Bước 2: Validate thông tin và tính toán
            if ($a == ''){
                $result = 'Bạn chưa nhập số a';
            }
            else if ($b == ''){
                $result = 'Bạn chưa nhập số b';
            }
            else if ($a == 0){
                $result = 'Số a phải nhập khác 0';
            }
            else {
                $result = -($b) / $a;
            }
        }
        echo "x=".$result;
    ?>
</body>
</html>