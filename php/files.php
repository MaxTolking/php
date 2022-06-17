<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Получить массив книг <input type="submit" name="archive" value="Получить">
        <input type="submit" value="Получить книги в удобочитаемой форме" name="comfort"> <p>
        Состояние: <input type="number" name="status" value="">
        <input type="submit" value="Получить книги с указанным состоянием"> <p>
        
        
        
    </form>
    <p>
    <?php
    class Book
    {
        public $Title;
        public $Author;
        public $Print;
        public $Status;
    }

    class Archive
    {
        public $list = [];
        public function __construct($str)
        {
            $fd = fopen($str, 'r') or die("не удалось открыть файл");
            while (!feof($fd)) {
                $book = new Book();
                $str = explode("|", fgets($fd));
                if (count($str) == 4) {
                    $book->Author = $str[1];
                    $book->Title = $str[0];
                    $book->Print = $str[2];
                    $book->Status = $str[3];
                }
                else {
                    echo "Данные в строке файла указаны не верно";
                }
                $this->list[] = $book;
            }
            fclose($fd);
        }

        public function getArchive()
        {
            print_r($this) ;
        }

        public function getArchiveByStatus($status)
        {
            foreach ($this->list as $i => $book) {
                if ($book->Status == $status) {
                    print_r($book);
                }
            }
        }

        public function getComfortArchive()
        {
            echo("<table border=1px>
            <thead>
            <th>Название</th>
            <th>Автор</th>
            <th>Издательство</th>
            <th>Состояние</th>
            </thead>");
            echo("<tbody>");
            foreach ($this->list as $i => $book) {
                echo '<tr>
                    <td><p>' . $book->Title . '</p>
                    <td><p>' . $book->Author . '</p>
                    <td><p>' . $book->Print . '</p>
                    <td><p>' . $book->Status . '</p>
                </tr>';
            }
        }
    }

    $archive = new Archive("lib.txt");

    if (isset($_POST['archive'])) {
        $archive->getArchive();
    }

    if (isset($_POST['status'])) {
        $archive->getArchiveByStatus($_POST['status']);
    }

    if (isset($_POST['comfort'])) {
        $archive->getComfortArchive();
    }
    ?>
</body>
</html>