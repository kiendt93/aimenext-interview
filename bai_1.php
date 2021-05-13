<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="lib/boostrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">

    <title>Bài 1</title>
</head>
<body>
<div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom">Bài 1</h2>
    <p>
        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            Xem đề bài
        </a>
        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
            Xem source code
        </a>
    </p>
    <div class="collapse pb-2" id="collapseExample">
        <div class="card card-body">
            <h4>Đề bài</h4>
            Cho một số nguyên dương viết chương trình cộng từng số trong số nguyên dương<br>
            đã cho ở trên đến khi chỉ còn một chữ số duy nhất ví dụ:<br>
            Input: 9875<br>
            9875 => 9+8+7+5 = 29<br>
            29 => 2+9 = 11<br>
            11 => 1+1 = 2<br>
            => Output: 2<br>
        </div>
    </div>
    <div class="collapse pb-2" id="collapseExample2">
        <div class="card card-body">
            <h4>Source code</h4>
            <code>
                <pre>
                if(isset($_POST['numberInput'])){
                    $numberInput = $_POST['numberInput'];
                    echo sumNumber($numberInput);
                }
                function sumNumber($num){
                    $array  = array_map('intval', str_split($num));
                    if(count($array) == 1){
                        echo "=> ";
                        return $array[0];
                    }else{
                        $total = array_sum($array);
                        $numItems = count($array);
                        $i = 0;
                        foreach ($array as $k => $num){
                            if(++$i === $numItems) {
                                echo $num.' = '.$total;
                            }else{
                                echo $num.' + ';
                            }
                        }
                        return sumNumber($total);
                    }
                }
            </pre>
            </code>
        </div>
    </div>
    <div class="card card-body">
        <h4>Câu trả lời</h4>
        <form name="form" action="bai_1.php" method="post">
            <div class="mb-3">
                <label for="exampleInput" class="form-label">Nhập dữ liệu đầu vào</label>
                <input type="number" required min="0" step="1" class="form-control" id="exampleInput" name="numberInput" placeholder="Nhập vào một số lớn hơn 0" value="<?= isset($_POST['numberInput']) ? $_POST['numberInput'] : '' ?>">
            </div>
            <button type="submit" class="btn btn-primary">Thực hiện</button>
        </form>
        <div class="pt-2">
            <?php
            if(isset($_POST['numberInput'])){
                $numberInput = $_POST['numberInput'];
                echo sumNumber($numberInput);
            }
            function sumNumber($num){
                $array  = array_map('intval', str_split($num));
                if(count($array) == 1){
                    echo "=> ";
                    return $array[0];
                }else{
                    $total = array_sum($array);
                    $numItems = count($array);
                    $i = 0;
                    foreach ($array as $k => $num){
                        if(++$i === $numItems) {
                            echo $num.' = '.$total.'<br>';
                        }else{
                            echo $num.' + ';
                        }
                    }
                    return sumNumber($total);
                }
            }
            ?>
        </div>
    </div>
    <p style="text-align: right">
        <a class="btn btn-secondary mt-2" href="index.php">
            Quay lại
        </a>
    </p>
</div>

<script src="lib/jquery-3.5.1.min.js"></script>
<script src="lib/boostrap/js/bootstrap.min.js"></script>
</body>
</html>
