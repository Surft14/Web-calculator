<?php
    require'blocks/header.php';
?>
    <div class="container mt-2">
        <h1>Введите два числа</h1>
        <form action="Answer.php" method="post">
            <br><input type="number" name="X" placeholder="Введите первое число"><br>
            <br><label for = "operator">Выборите оператор:</label>
            <select id="operator" name="oper">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select><br>
            <br><input type="number" name="Y" placeholder="Введите второе число"><br>
            <br><input type="submit" value="Решить" class="btn btn-success">
        </form>
    </div>
<?php
    require'blocks/footer.php';
?>
