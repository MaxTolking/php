<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        /* Массивы */
            /* 1 */
            /* $arr = [];
            for($i = 0; $i < 10; $i++){
                $arr[] = $i & 1;
            echo'<pre>',var_dump($arr),'</pre>';
            }   */ 

            /* 2 */
            /* $arr = array();
            $n = 50;
            $i = 0;
            while($i < $n){
                $arr[$i] = $i * $i;
                echo "$i^2 = $arr[$i]<br>";
                $i++;
            } */

            /* 3 */
            /* $a = array(1, 2, 3, 4, 5, 6, 7);
            echo "Сумма = " . array_sum($a) . "\n";
            echo "Произведение = " . array_product($a) . "\n"; */

            /* 4 */
            /* $a = array(1, 1, 1, 2, 3, 3, 4, 4, 5, 6, 7, 7, 7, 7, 8);
            $b = array();
            sort ($a);
            foreach ($a as $k => $v){
                $b[$v][] = $v;
            } 
                echo 'Найденные значения : <br>';
            foreach($b as $k => $v){
                echo 'значение - '.$k.' встречается '.count($v).' раз(а) <br> ';
            } */

            /* 5 */

            /* $k = 5;
            $arr = [];
            for ($i=0; $i<= $k-1; ++$i) {
            $arr[$i] = rand(0, 100);
            }
                echo "Вывод массива из $k элементов: <br>";
            foreach ($arr as $key => $value) {
                echo "$value <br>";
            }
                echo 'Максимальное значение:' . max($arr) . '<br>';
                echo 'Минимальное значение:' . min($arr) . '<br>';
            $mini = array_search(min($arr), $arr);
            $maxi = array_search(max($arr), $arr);
            $min = min($arr);
            $max = max($arr);
            $arr[$mini] = $max;
            $arr[$maxi] = $min;
                echo "Рокировка произведена: <br>";
            foreach ($arr as $key => $value) {
                echo "$value <br>";
            } */

            /* 6 */

            /* for ($i=0; $i<=10; $i++){
                $arr[$i]=mt_rand(1,50);
            }
            $arr1=&$arr;
            echo "Исходный массив: <br>";
            print_r($arr);
                echo "<p> Первый способ: <br>";
                    sort($arr1);
                    print_r($arr1);
                echo "<p> Второй способ: <br>";
                    for($i=0;$i<count($arr)-1;$i++){
                        for($k=$i+1;$k < count($arr);$k++){
                            if($arr[$i]>$arr[$k]){
                                $temp=$arr[$i];
                                $arr[$i]=$arr[$k];
                                $arr[$k]= $temp;
                            }
                        }
                    }
                print_r($arr); */
    ?>  
        <!-- 7 -->
        <!-- <form method="post">
            <input type="text" name="array">
            <input type="submit">
        </form> -->
        <?php
            /* $arr = !empty($_POST['array']) ? explode(' ', $_POST['array']) : [];
            $result = true;
            $flag = false;
             
            for($i = 0; $i + 2 < count($arr); $i++) {
                if($arr[$i] > $arr[$i + 1]) {
                    if($flag || $arr[$i] > $arr[$i + 2]) {
                        $result = false;
                        break;
                    } else {
                        $flag = true;
                    }
                }
            } 
            echo $result ? 'Yes' : 'No'; */
        ?>  

        <!-- 8 -->

        <?php
            /* $input = array(1, 1, 1, 2, 2, 3, 4, 5, 5, 6, 7, 8);
            $result = array_unique($input);
            print_r($result); */
        ?>

        <!-- 9 -->

        <?php
            /* $array=array(2, 1, 3, 6, 5, 8);
            $offset = rand(1,count($array)-1);
                for($i=0;$i<$offset;$i++){
                    $a = array_shift ($array);
                     $array[] = $a;
                }
            print_r($array); */
        ?>
        
        <!-- 10 -->

        <?php
            /* $arr1 = array(1, 3, 5, 7, 9);
            $arr2 = array(2, 4, 6, 8, 10);
            $res_arr = array_merge($arr1, $arr2);
            asort($res_arr);
            print_r($res_arr); */
        ?>

        <!-- 11 -->

        <?php
            /* $array = [1, -1, 2, -2, 3, -3];
            $array1 = [];
            foreach ($array as $v) {
                $array1[] = $v;
                if ($v < 0) {
                    $array1[] = 0;
                }
            }
            print_r($array1); */
        ?>

        <!-- 12 -->

        <!-- <form method="post">
            Введите число <input type="number" name="n" value="">
            <input type="submit" name="submit" value="Запустить">
        </form> -->
        <?php
            /* function inclineWord($number, $word1, $word2, $word3)
            {
                $number %= 100;
                //до 20
                if ($number < 20) {
                    if ($number == 1) {
                        return $word1;
                    }
                    elseif (($number < 5) && ($number != 0)) {
                        return $word2;
                    }
                    else {
                        return $word3;
                    }
                }
                else {
                    //если больше 20 то только по последней цифре.
                    $number %= 10;
                    if ($number == 1) {
                        return $word1;
                    }
                    elseif (($number < 5) && ($number != 0)) {
                        return $word2;
                    }
                    else {
                        return $word3;
                    }
                }
            }
            
            function smallNumberToText($number, $isFemale)
            {
                $spelling = array(
                    0 => 'ноль', 10 => 'десять', 100 => 'сто',
                    1 => 'один', 11 => 'одиннадцать', 20 => 'двадцать', 200 => 'двести',
                    2 => 'два', 12 => 'двенадцать', 30 => 'тридцать', 300 => 'триста',
                    3 => 'три', 13 => 'тринадцать', 40 => 'сорок', 400 => 'четыреста',
                    4 => 'четыре', 14 => 'четырнадцать', 50 => 'пятьдесят', 500 => 'пятьсот',
                    5 => 'пять', 15 => 'пятнадцать', 60 => 'шестьдесят', 600 => 'шестьсот',
                    6 => 'шесть', 16 => 'шестнадцать', 70 => 'семьдесят', 700 => 'семьсот',
                    7 => 'семь', 17 => 'семнадцать', 80 => 'восемьдесят', 800 => 'восемьсот',
                    8 => 'восемь', 18 => 'восемнадцать', 90 => 'девяносто', 900 => 'девятьсот',
                    9 => 'девять', 19 => 'девятнадцать'
                );
                $femaleSpelling = array(
                    1 => 'одна', 2 => 'две'
                );
                $hundred = floor($number / 100);
                $dec = floor(($number % 100) / 10);
                $firstNumber = $number % 10;
                if ($number == 0) {
                    return null;
                }
                if ($hundred) {
                    $key = $hundred * 100;
                    $strNum[] = $spelling[$key];
                }
                if ($dec == 1) {
                    $key = $number % 100;
                    $strNum[] = $spelling[$key];
                }
                elseif ($dec != 0) {
                    $key = $dec * 10;
                    $strNum[] = $spelling[$key];
                }
                if ($dec != 1 && $firstNumber != 0) {
                    if ((($firstNumber == 1) or ($firstNumber == 2)) and ($isFemale == 1)) {
                        $strNum[] = $femaleSpelling[$firstNumber];
                    }
                    else {
                        $strNum[] = $spelling[$firstNumber];
                    }
                }
                return implode(' ', $strNum);
            }
            function numberToText($number)
            {
                if ($number == 0) {
                    return 'Ноль';
                }
                //Миллионы
                $triad = floor($number / 1000000);
                if ($triad) {
                    $strNum[] = smallNumberToText($triad, 0);
                    $strNum[] = inclineWord($triad, 'миллион', 'миллиона', 'миллионов');
                }
                //тысячи
                $triad = floor(($number % 1000000) / 1000);
                if ($triad) {
                    $strNum[] = smallNumberToText($triad, 1);
                    $strNum[] = inclineWord($triad, 'тысяча', 'тысячи', 'тысяч');
                }
                //Меньше тысячи
                $triad = $number % 1000;
                if ($triad) {
                    $strNum[] = smallNumberToText($triad, 0);
                }
                return implode(' ', $strNum);
            }
            
            if (isset($_POST['n'])) {
                echo "<p>";
                echo (numberToText($_POST["n"]));
            } */
        ?>
</body>
</html>
  