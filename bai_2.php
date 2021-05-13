<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="lib/boostrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">

    <title>Bài 2</title>
</head>
<body>
<div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom">Bài 2</h2>
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
            Viết thuật toán sắp xếp mảng sau đây:<br>
            ['J', 'MI', 'KX', 'HA', 'MC', 'YM', 'SQ', 'GQ', 'XH', 'VR', 'VE', 'KA', 'NF', 'GX', 'EQ', 'QV', 'RH', 'PH', 'LT', 'TH', 'TT', 'DX', 'ZB', 'EX', 'EM', 'GV', 'QF', 'HH', 'NA', 'YC', 'QZ', 'AJ', 'GY', 'QI', 'GH', 'BE', 'RB', 'QP', 'AP', 'RO', 'HF', 'AN', 'ZZ', 'DC', 'NL', 'GT', 'IT', 'CF', 'VO', 'NO', 'EV', 'PN', 'FX', 'LH', 'DB', 'PR', 'XI', 'CE', 'DQ', 'HC', 'ID', 'D', 'F', 'QD', 'EY', 'XA', 'Q', 'VC', 'SB', 'ZE', 'QS', 'YS', 'OQ', 'VA', 'AC', 'NV', 'EZ', 'XP', 'BP', 'XD', 'DI', 'MF', 'QA', 'YB', 'CT', 'VV', 'HM', 'RV', 'G', 'PS', 'AM', 'IN', 'LL', 'DV', 'LR', 'BS', 'SO', 'PO', 'LA', 'YV', 'YP', 'GI', 'VX', 'IG', 'CO', 'PZ', 'RM', 'FB', 'HG', 'OY', 'YH', 'FE', 'KY', 'FA', 'GB', 'RP', 'CL', 'MQ', 'EP', 'TX', 'XM', 'RN', 'YE', 'FH', 'RC', 'DT', 'ZG', 'BF', 'X', 'DF', 'XK', 'BG', 'XR', 'BV', 'NP', 'NY', 'EF', 'RZ', 'TZ', 'QL', 'TB', 'DR', 'DP', 'SS', 'KL', 'KM', 'ZX', 'DY', 'NG', 'EN', 'AF', 'LC', 'GR', 'BC', 'B', 'EL', 'NR', 'IR', 'RY', 'OZ', 'NZ', 'LN', 'BM', 'DL', 'VD', 'GM', 'ZD', 'OT', 'PV', 'QE', 'YK', 'KF', 'GA', 'NC', 'DA', 'AK', 'FI', 'IV', 'ZM', 'YQ', 'V', 'KT', 'BX', 'QT', 'MH', 'DE', 'KE', 'RX', 'SH', 'KZ', 'KP', 'LS', 'FY', 'CS', 'HP', 'II', 'FT', 'YN', 'HI', 'CR', 'A', 'MO', 'NS', 'TF', 'BD', 'PA', 'BU', 'CC', 'OE', 'AI', 'KS', 'KC', 'MN', 'CM', 'XN', 'HK', 'GL', 'L', 'HT', 'DK', 'ZH', 'TE', 'AW', 'LI', 'RF', 'DG', 'GC', 'ER', 'KB', 'NN', 'DN', 'AA', 'PF', 'PB', 'GD', 'DS', 'TA', 'AU', 'HE', 'CI', 'HV', 'BL', 'ZV', 'TI', 'FO', 'IC', 'QM', 'CJ', 'IX', 'W', 'U', 'OF', 'CZ', 'AS', 'QH', 'GP', 'RL', 'VB', 'AQ', 'XF', 'NE', 'QO', 'IO', 'NQ', 'TN', 'LY', 'MG', 'MB', 'XS', 'S', 'IB', 'XX', 'AR', 'SI', 'OV', 'OL', 'BJ', 'MR', 'YD', 'TM', 'KI', 'EA', 'SY', 'ET', 'AE', 'BB', 'FZ', 'VG', 'FQ', 'T', 'DM', 'HB', 'O', 'SF', 'IE', 'XQ', 'RQ', 'IY', 'OA', 'CU', 'CQ', 'HZ', 'XO', 'DH', 'EB', 'RK', 'BI', 'IP', 'IF', 'ZR', 'SZ', 'FP', 'LG', 'AH', 'ZS', 'KV', 'BQ', 'MP', 'CB', 'SX', 'BZ', 'MT', 'NH', 'QR', 'XV', 'HR', 'FV', 'VZ', 'BO', 'ZQ', 'CV', 'DD', 'OI', 'PM', 'CW', 'AO', 'OR', 'TR', 'XE', 'VT', 'EI', 'TY', 'XL', 'QQ', 'LK', 'PC', 'ZA', 'ZL', 'CK', 'BH', 'XB', 'IM', 'ES', 'PX', 'OB', 'FC', 'Z', 'NK', 'DU', 'CG', 'AB', 'DZ', 'ST', 'YF', 'TO', 'VL', 'VQ', 'BW', 'TK', 'HX', 'EO', 'RE', 'CX', 'ZO', 'ME', 'PG', 'RA', 'H', 'FK', 'KN', 'CP', 'BA', 'QC', 'ZN', 'GG', 'ED', 'RS', 'PP', 'VK', 'OH', 'MZ', 'KD', 'IL', 'BT', 'MM', 'LM', 'SA', 'AY', 'HN', 'LF', 'R', 'QK', 'KH', 'EE', 'EG', 'TD', 'PK', 'MK', 'AV', 'SE', 'HQ', 'LB', 'GO', 'M', 'SN', 'VS', 'OS', 'CA', 'TL', 'FM', 'AX', 'EH', 'DO', 'RG', 'FR', 'ZY', 'ZI', 'KG', 'LP', 'TC', 'YL', 'GS', 'YZ', 'PD', 'ZT', 'KR', 'IH', 'QX', 'TS', 'HD', 'KO', 'YA', 'IA', 'MX', 'I', 'EC', 'HO', 'PT', 'LX', 'IK', 'TG', 'BK', 'QG', 'SL', 'CN', 'YX', 'OK', 'XG', 'GK', 'NX', 'GF', 'FN', 'YI', 'N', 'OX', 'Y', 'SM', 'IZ', 'LD', 'IS', 'VM', 'SG', 'QY', 'YT', 'ND', 'FG', 'NM', 'VH', 'BY', 'VY', 'OM', 'AT', 'BN', 'FD', 'DW', 'CH', 'AD', 'OC', 'VF', 'PL', 'GE', 'FS', 'RI', 'LZ', 'QN', 'KK', 'ZP', 'XC', 'XT', 'SR', 'PI', 'FF', 'MS', 'YG', 'DJ', 'SC', 'RT', 'OG', 'ZC', 'LE', 'LQ', 'P', 'CY', 'C', 'ON', 'GN', 'EK', 'HL', 'BR', 'MA', 'MD', 'LO', 'SP', 'VN', 'NB', 'QB', 'AL', 'OP', 'TP', 'E', 'AZ', 'ML', 'TQ', 'TV', 'YY', 'AG', 'HY', 'OD', 'IQ', 'SV', 'LV', 'HS', 'VP', 'OO', 'KQ', 'GZ', 'K', 'SK', 'NI', 'YO', 'ZF', 'SD', 'YR', 'ZK', 'PE', 'MV', 'PQ', 'RR', 'RD', 'CD', 'XY', 'PY', 'FL', 'VI', 'NT', 'XZ', 'MY']<br>
            theo đúng thứ tự [‘A’→’Z’,’AA’→’ZZ’] (không sử dụng thư viện có sẵn).<br>
        </div>
    </div>
    <div class="collapse pb-2" id="collapseExample2">
        <div class="card card-body">
            <h4>Source code</h4>
            <code>
                <pre>
            if(isset($_POST['dataInput'])){
                $dataInput = explode(",", $_POST['dataInput']);
                $numItems = count(sortArray($dataInput));
                $i = 0;
                foreach (sortArray($dataInput) as $k => $item){
                    if(++$i === $numItems) {
                        echo $item;
                    }else{
                        echo $item.', ';
                    }
                }
            }
            function sortArray($arr){
                $count = count($arr);
                for ($i = 0; $i < $count; $i++) {
                    for ($j = $i + 1; $j < $count; $j++) {
                        if (strlen($arr[$i]) > strlen($arr[$j])) {
                            $temp = $arr[$i];
                            $arr[$i] = $arr[$j];
                            $arr[$j] = $temp;
                        }elseif ($arr[$i] > $arr[$j] && strlen($arr[$i]) == strlen($arr[$j])) {
                            $temp = $arr[$i];
                            $arr[$i] = $arr[$j];
                            $arr[$j] = $temp;
                        }
                    }
                }
                return $arr;
            }
            </pre>
            </code>
        </div>
    </div>
    <?php
    $defaultData = "'J', 'MI', 'KX', 'HA', 'MC', 'YM', 'SQ', 'GQ', 'XH', 'VR', 'VE', 'KA', 'NF', 'GX', 'EQ', 'QV', 'RH', 'PH', 'LT', 'TH', 'TT', 'DX', 'ZB', 'EX', 'EM', 'GV', 'QF', 'HH', 'NA', 'YC', 'QZ', 'AJ', 'GY', 'QI', 'GH', 'BE', 'RB', 'QP', 'AP', 'RO', 'HF', 'AN', 'ZZ', 'DC', 'NL', 'GT', 'IT', 'CF', 'VO', 'NO', 'EV', 'PN', 'FX', 'LH', 'DB', 'PR', 'XI', 'CE', 'DQ', 'HC', 'ID', 'D', 'F', 'QD', 'EY', 'XA', 'Q', 'VC', 'SB', 'ZE', 'QS', 'YS', 'OQ', 'VA', 'AC', 'NV', 'EZ', 'XP', 'BP', 'XD', 'DI', 'MF', 'QA', 'YB', 'CT', 'VV', 'HM', 'RV', 'G', 'PS', 'AM', 'IN', 'LL', 'DV', 'LR', 'BS', 'SO', 'PO', 'LA', 'YV', 'YP', 'GI', 'VX', 'IG', 'CO', 'PZ', 'RM', 'FB', 'HG', 'OY', 'YH', 'FE', 'KY', 'FA', 'GB', 'RP', 'CL', 'MQ', 'EP', 'TX', 'XM', 'RN', 'YE', 'FH', 'RC', 'DT', 'ZG', 'BF', 'X', 'DF', 'XK', 'BG', 'XR', 'BV', 'NP', 'NY', 'EF', 'RZ', 'TZ', 'QL', 'TB', 'DR', 'DP', 'SS', 'KL', 'KM', 'ZX', 'DY', 'NG', 'EN', 'AF', 'LC', 'GR', 'BC', 'B', 'EL', 'NR', 'IR', 'RY', 'OZ', 'NZ', 'LN', 'BM', 'DL', 'VD', 'GM', 'ZD', 'OT', 'PV', 'QE', 'YK', 'KF', 'GA', 'NC', 'DA', 'AK', 'FI', 'IV', 'ZM', 'YQ', 'V', 'KT', 'BX', 'QT', 'MH', 'DE', 'KE', 'RX', 'SH', 'KZ', 'KP', 'LS', 'FY', 'CS', 'HP', 'II', 'FT', 'YN', 'HI', 'CR', 'A', 'MO', 'NS', 'TF', 'BD', 'PA', 'BU', 'CC', 'OE', 'AI', 'KS', 'KC', 'MN', 'CM', 'XN', 'HK', 'GL', 'L', 'HT', 'DK', 'ZH', 'TE', 'AW', 'LI', 'RF', 'DG', 'GC', 'ER', 'KB', 'NN', 'DN', 'AA', 'PF', 'PB', 'GD', 'DS', 'TA', 'AU', 'HE', 'CI', 'HV', 'BL', 'ZV', 'TI', 'FO', 'IC', 'QM', 'CJ', 'IX', 'W', 'U', 'OF', 'CZ', 'AS', 'QH', 'GP', 'RL', 'VB', 'AQ', 'XF', 'NE', 'QO', 'IO', 'NQ', 'TN', 'LY', 'MG', 'MB', 'XS', 'S', 'IB', 'XX', 'AR', 'SI', 'OV', 'OL', 'BJ', 'MR', 'YD', 'TM', 'KI', 'EA', 'SY', 'ET', 'AE', 'BB', 'FZ', 'VG', 'FQ', 'T', 'DM', 'HB', 'O', 'SF', 'IE', 'XQ', 'RQ', 'IY', 'OA', 'CU', 'CQ', 'HZ', 'XO', 'DH', 'EB', 'RK', 'BI', 'IP', 'IF', 'ZR', 'SZ', 'FP', 'LG', 'AH', 'ZS', 'KV', 'BQ', 'MP', 'CB', 'SX', 'BZ', 'MT', 'NH', 'QR', 'XV', 'HR', 'FV', 'VZ', 'BO', 'ZQ', 'CV', 'DD', 'OI', 'PM', 'CW', 'AO', 'OR', 'TR', 'XE', 'VT', 'EI', 'TY', 'XL', 'QQ', 'LK', 'PC', 'ZA', 'ZL', 'CK', 'BH', 'XB', 'IM', 'ES', 'PX', 'OB', 'FC', 'Z', 'NK', 'DU', 'CG', 'AB', 'DZ', 'ST', 'YF', 'TO', 'VL', 'VQ', 'BW', 'TK', 'HX', 'EO', 'RE', 'CX', 'ZO', 'ME', 'PG', 'RA', 'H', 'FK', 'KN', 'CP', 'BA', 'QC', 'ZN', 'GG', 'ED', 'RS', 'PP', 'VK', 'OH', 'MZ', 'KD', 'IL', 'BT', 'MM', 'LM', 'SA', 'AY', 'HN', 'LF', 'R', 'QK', 'KH', 'EE', 'EG', 'TD', 'PK', 'MK', 'AV', 'SE', 'HQ', 'LB', 'GO', 'M', 'SN', 'VS', 'OS', 'CA', 'TL', 'FM', 'AX', 'EH', 'DO', 'RG', 'FR', 'ZY', 'ZI', 'KG', 'LP', 'TC', 'YL', 'GS', 'YZ', 'PD', 'ZT', 'KR', 'IH', 'QX', 'TS', 'HD', 'KO', 'YA', 'IA', 'MX', 'I', 'EC', 'HO', 'PT', 'LX', 'IK', 'TG', 'BK', 'QG', 'SL', 'CN', 'YX', 'OK', 'XG', 'GK', 'NX', 'GF', 'FN', 'YI', 'N', 'OX', 'Y', 'SM', 'IZ', 'LD', 'IS', 'VM', 'SG', 'QY', 'YT', 'ND', 'FG', 'NM', 'VH', 'BY', 'VY', 'OM', 'AT', 'BN', 'FD', 'DW', 'CH', 'AD', 'OC', 'VF', 'PL', 'GE', 'FS', 'RI', 'LZ', 'QN', 'KK', 'ZP', 'XC', 'XT', 'SR', 'PI', 'FF', 'MS', 'YG', 'DJ', 'SC', 'RT', 'OG', 'ZC', 'LE', 'LQ', 'P', 'CY', 'C', 'ON', 'GN', 'EK', 'HL', 'BR', 'MA', 'MD', 'LO', 'SP', 'VN', 'NB', 'QB', 'AL', 'OP', 'TP', 'E', 'AZ', 'ML', 'TQ', 'TV', 'YY', 'AG', 'HY', 'OD', 'IQ', 'SV', 'LV', 'HS', 'VP', 'OO', 'KQ', 'GZ', 'K', 'SK', 'NI', 'YO', 'ZF', 'SD', 'YR', 'ZK', 'PE', 'MV', 'PQ', 'RR', 'RD', 'CD', 'XY', 'PY', 'FL', 'VI', 'NT', 'XZ', 'MY'";
    $defaultData = str_replace(["'"," "],'',$defaultData);
    ?>

    <div class="card card-body">
        <h4>Câu trả lời</h4>
        <form name="form" action="bai_2.php" method="post">
            <div class="mb-3">
                <label for="exampleInput" class="form-label">Nhập dữ liệu đầu vào</label>
                <textarea placeholder="'J', 'MI', 'KX', 'HA', 'MC', 'YM', 'SQ', 'GQ', 'XH', 'VR', 'VE', 'KA'" class="form-control" name="dataInput" id="" cols="30" rows="10" name="numberInput"><?= isset($_POST['dataInput']) ? $_POST['dataInput'] : $defaultData ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Thực hiện</button>
        </form>
        <div class="pt-2">
            <?php
            if(isset($_POST['dataInput'])){
                $dataInput = explode(",", $_POST['dataInput']);
                $numItems = count(sortArray($dataInput));
                $i = 0;
                foreach (sortArray($dataInput) as $k => $item){
                    if(++$i === $numItems) {
                        echo $item;
                    }else{
                        echo $item.', ';
                    }
                }
            }
            function sortArray($arr){
                $count = count($arr);
                for ($i = 0; $i < $count; $i++) {
                    for ($j = $i + 1; $j < $count; $j++) {
                        if (strlen($arr[$i]) > strlen($arr[$j])) {
                            $temp = $arr[$i];
                            $arr[$i] = $arr[$j];
                            $arr[$j] = $temp;
                        }elseif ($arr[$i] > $arr[$j] && strlen($arr[$i]) == strlen($arr[$j])) {
                            $temp = $arr[$i];
                            $arr[$i] = $arr[$j];
                            $arr[$j] = $temp;
                        }
                    }
                }
                return $arr;
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
