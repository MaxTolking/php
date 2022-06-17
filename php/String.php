<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <!-- 1 -->

    <form method="post">
            <!-- Введите первое слово <input type="text" name="str_1" value=""><p>
            Введите второе слово <input type="text" name="str_2" value=""><p>
            <input type="submit" name="submit" value="Определить"> -->
    </form> 
    <?php
            /* $first_str = strtolower($_POST['str_1']);
            $second_str = strtolower($_POST['str_2']);
            $check = true;
            foreach (str_split($second_str) as $char) {
                if (substr_count($second_str, $char) > substr_count($first_str, $char)) {
                    $check = false;
                }
            }
            if ($check) {
                echo ('Можно');
            }
            else {
                echo ('Нельзя');
            } */
    ?>

    <!-- 2 -->

    <form method="post">
        <!-- Введите строку: <input type="text" name="str_1" value=""> <p>
        <input type="submit" name="submit" value="Найти палиндром"> -->
    </form>
    <?php
            /* $word = strtolower(str_replace(' ', '', $_POST['str_1']));
            $res = longestP($word);
            echo "Его длина: " . $res . " символов";
        function isPalindrom($word)
        {
            return $word == strrev($word);
        }

        function longestP($str)
        {
            $n = strlen($str);
            $start = 0;
            $max = 1;
            for ($i = 0; $i < $n; $i++) {
                for ($j = $i; $j < $n; $j++) {
                    $flag = false;

                    $flag = isPalindrom(substr($str, $i, $j - $i + 1));
                    if ($flag && ($j - $i + 1) > $max) {
                        $start = $i;
                        $max = $j - $i + 1;
                    }
                }
            }
            echo("Паллиндром максимальной длины: " . substr($str, $start, $max) . "<br>");
            return ($max);
        } */
    ?>

    <!-- 3 -->

    <form method="post">
        <!-- Введите слово <input type="text" name="str_1" value="">
        <input type="submit" name="submit" value="Перевернуть"> -->
    </form>
    <?php
        /* $str = strtolower($_POST['str_1']);
        $str2 = "";
        $count = strlen($str);
            for($i=1; $i<=$count; $i++){
                $str2 .= substr($str, -$i, 1);
            }
            echo ($str2); */
    ?>

    <!-- 4 -->

    <form method="post">
        <!-- Текст <input type="text" name="str_1" value=""> <p>
		Слово <input type="text" name="word" value=""> <p>
        <input type="submit" name="submit" value="Выделить"> <p> -->
    </form>
    <?php
        /* $str = $_POST['str_1'];
        $word = $_POST['word'];
        $rep = sprintf("<font color=#ff0000>%s</font>", $word);
	    $str = str_replace($word, $rep, $str);
        echo ($str); */
    ?>

    <!-- 5 -->

    <form method="post">
        Ключ<input type="text" name="key" value="">
        <input type="radio" name="todo" value="" /> Зашифровать <p>
		Текст<input type="text" name="text" value="">
        <input type="radio" name="todo" value="" /> Расшифровать <p>
        <input type="submit" name="submit" value="Запустить">
        
    </form>
    <?php
        if (isset($_POST['key']) && isset($_POST['text']) && isset($_POST['todo'])) {
            $text = strtoupper($_POST['text']);
            $key = strtoupper(generate_key($text, $_POST['key']));

            switch ($_POST['todo']) {
                case 'encrypt':
                    echo "Шифр: " . encrypt($text, $key);
                    break;
                case 'decrypt':
                    echo("Расшифровка: " . decrypt($text, $key));
                    break;
            }

        }
        function generate_key($str, $key)
        {
            $x = strlen($str);
            for ($i = 0; ; $i++) {
                if ($x == $i) {
                    $i = 0;
                }
                if (strlen($key) == strlen($str)) {
                    break;
                }
                $key .= $key[$i];
            }
            return $key;
        }


        function encrypt($str, $key)
        {
            $chiper = "";

            for ($i = 0; $i < strlen($str); $i++) {
                $x = (ord($str[$i]) + ord($key[$i])) % 26;
                $x += ord('A'); 
                $chiper .= chr($x);
            }
            return $chiper;
        }

        
        function decrypt($chiper, $key)
        {
            $text = " ";

            for ($i = 0; $i < strlen($chiper); $i++) {
                $x = (ord($chiper[$i]) - ord($key[$i]) + 26) % 26;
                $x += ord('A');
                $text .= chr($x);
            }
            return $text;
        }
    ?>
</body>
</html>
