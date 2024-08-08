<?php
    require'blocks/header.php';
?>
<div class="container mt-2">
    <h1>Решение</h1>
    <?php
        include 'function/MathFunction.php';
        $X = $_POST['X'];
        $Y = $_POST['Y'];
        $operator = $_POST['oper'];
        switch ($operator) {
            case '+':
                echo "$X + $Y = ";
                echo plus($X, $Y);
                break;
            case  '-':
                echo "$X - $Y = ";
                echo minus($X, $Y);
                break;
            case '*':
                echo "$X * $Y = ";
                echo multiply($X, $Y);
                break;
            case '/':
                echo "$X / $Y = ";
                echo divide($X, $Y);
                break;
            default:
                echo 'Что то пошло не так';
                break;
        }
    ?>
</div>
<?php
    require'blocks/footer.php';
?>

