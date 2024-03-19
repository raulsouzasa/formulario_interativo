<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form name="calculo" method="POST" action="">
        Primeiro numero: <input type="number" name="numeroX"><br>
        <br>Segundo numero: <input type="number" name="numeroY"><br>
        <select name="operacao" id="operacao" method="POST"> 
            <option value="somar">Somar</option> 
            <option value="subtrair">Subtrair</option> 
            <option value="multiplicar">Multiplicar</option> 
            <option value="dividir">Dividir</option> 
        </select>
        <input type="submit" name="calcular" value="calcular">
        <?php
            if ($_POST['numeroX'] != "" and $_POST['numeroY'] != "") {
                if ($_POST['operacao'] == "somar") {
                    $x = $_POST['numeroX'];
                    $y = $_POST['numeroY'];
                    echo $x + $y;
                } else if ($_POST['operacao'] == "subtrair") {
                    $x = $_POST['numeroX'];
                    $y = $_POST['numeroY'];
                    echo $x - $y;
                } else if ($_POST['operacao'] == "multiplicar") {
                    $x = $_POST['numeroX'];
                    $y = $_POST['numeroY'];
                    echo $x * $y;
                } else if ($_POST['operacao'] == "dividir") {
                    $x = $_POST['numeroX'];
                    $y = $_POST['numeroY'];
                    echo $x / $y;
                }
            } else {
                echo "Digite os numeros a serem calculados";
            }

        ?>
    </form>
</body>
</html>