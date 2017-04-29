<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php
            echo "Hello World"."</br>";
            $a = 2;
            $s1 = 'Hello $a'.'</br>';
            $s2 = "Hello $a"."</br>";
            echo $s1;
            echo $s2;

        echo <<<heredoc
fjghsdklfhgsldkfhgklsdfhgskldfhgkl045ojkfsfj
heredoc;
        echo '</br>';

        $q = "Hello";
        $w = "35";
        $e = 'Herro6';

        settype($q, 'integer');
        settype($w, 'integer');
        settype($e, 'integer');

        var_dump($q);
        var_dump($w);
        var_dump($e);
        ?>
    </h1>
    
</body>
</html>
