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
            <input type="text" class="maininput" name="input" > <br> <br>  <!-- JE VAIS AJOUTER ACTION FICH PHP-->
            
            <!-- Boutons numériques ligne 1-->
            <div class="button-row">
                <input type="submit" class="numbtn" name="num" value="7">
                <input type="submit" class="numbtn" name="num" value="8">
                <input type="submit" class="numbtn" name="num" value="9">
                <input type="submit" class="calbtn" name="op" value="+">
            </div>
            
            <!-- Boutons numériques LIGNE 2 -->
            <div class="button-row">
                <input type="submit" class="numbtn" name="num" value="4">
                <input type="submit" class="numbtn" name="num" value="5">
                <input type="submit" class="numbtn" name="num" value="6">
                <input type="submit" class="calbtn" name="op" value="-">
            </div>
            
            <!-- Boutons numériques LIGNE 3-->
            <div class="button-row">
                <input type="submit" class="numbtn" name="num" value="1">
                <input type="submit" class="numbtn" name="num" value="2">
                <input type="submit" class="numbtn" name="num" value="3">
                <input type="submit" class="calbtn" name="op" value="*">
            </div>
            
            <!-- Boutons spéciaux -->
            <div class="button-row">
                <input type="submit" class="c" name="num" value="C">
                <input type="submit" class="numbtn" name="num" value="0">
                <input type="submit" class="equal" name="equal" value="=">
                <input type="submit" class="calbtn" name="op" value="/">
            </div>
        </form>
    </div>
</body>
</html>
