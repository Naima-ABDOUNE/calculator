<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifiez si le formulaire a été soumis

    // Récupérez les valeurs du formulaire
    $num = isset($_POST['num']) ? $_POST['num'] : '';
    $operator = isset($_POST['operator']) ? $_POST['operator'] : '';
    $prevResult = isset($_POST['prevResult']) ? $_POST['prevResult'] : '';
    $prevOperator = isset($_POST['prevOperator']) ? $_POST['prevOperator'] : '';

    // Vérifiez si les valeurs sont numériques
    if (is_numeric($num) && is_numeric($prevResult)) {
        // Effectuez l'opération appropriée en fonction de l'opérateur
        switch ($prevOperator) {
            case '+':
                $result = $prevResult + $num;
                break;
            case '-':
                $result = $prevResult - $num;
                break;
            case '*':
                $result = $prevResult * $num;
                break;
            case '/':
                // Vérifiez si le dénominateur n'est pas zéro
                $result = ($num != 0) ? $prevResult / $num : 'Division par zéro';
                break;
            default:
                // Si aucun opérateur précédent n'est défini, utilisez simplement le nombre saisi
                $result = $num;
        }
    } else {
        $result = 'Opérande non numérique';
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="calc">
        <form action="" method="post">
            <br>
            <input type="text" class="maininput" name="input" value="<?php echo isset($result) ? $result : ''; ?>" readonly> <br> <br>
            <!-- Ajoutez un champ caché pour stocker le résultat précédent -->
            <input type="hidden" name="prevResult" value="<?php echo isset($result) ? $result : ''; ?>">
            
            <!-- Ajoutez un champ caché pour stocker l'opérateur précédent -->
            <input type="hidden" name="prevOperator" value="<?php echo isset($operator) ? $operator : ''; ?>">

            <!-- Boutons numériques ligne 1-->
            <div class="button-row">
                <input type="submit" class="numbtn" name="num" value="7">
                <input type="submit" class="numbtn" name="num" value="8">
                <input type="submit" class="numbtn" name="num" value="9">
                <input type="submit" class="calbtn" name="operator" value="+">
            </div>
            
            <!-- Boutons numériques LIGNE 2 -->
            <div class="button-row">
                <input type="submit" class="numbtn" name="num" value="4">
                <input type="submit" class="numbtn" name="num" value="5">
                <input type="submit" class="numbtn" name="num" value="6">
                <input type="submit" class="calbtn" name="operator" value="-">
            </div>
            
            <!-- Boutons numériques LIGNE 3-->
            <div class="button-row">
                <input type="submit" class="numbtn" name="num" value="1">
                <input type="submit" class="numbtn" name="num" value="2">
                <input type="submit" class="numbtn" name="num" value="3">
                <input type="submit" class="calbtn" name="operator" value="*">
            </div>
            
            <!-- Boutons spéciaux -->
            <div class="button-row">
                <input type="submit" class="c" name="reset" value="C">
                <input type="submit" class="numbtn" name="num" value="0">
                <input type="submit" class="equal" name="calculate" value="=">
                <input type="submit" class="calbtn" name="operator" value="/">
            </div>
        </form>
    </div>
</body>
</html>
