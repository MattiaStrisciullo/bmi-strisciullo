<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Calcolatore BMI</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>






<?php
    if ($_SERVER["REQUEST_METHOD"]=="POST"){

    }

    $nome = $_POST['nome'];
    $peso = $_POST['peso'];
    $altezza = $_POST['altezza'];

    $altezza_metri = $altezza / 100;
    $bmi = $peso / ($altezza_metri * $altezza_metri);

    $categoria = "OBESITÀ";
    $classe = "card-obesita";

    if ($bmi < 18.5) {
        $categoria = "SOTTOPESO";
        $classe = "card-sottopeso";
    } 
    if ($bmi >= 18.5 && $bmi <= 24.9) {
        $categoria = "NORMOPESO";
        $classe = "card-normopeso";
    } 
    if ($bmi >= 25 && $bmi <= 29.9) {
        $categoria = "SOVRAPPESO";
        $classe = "card-sovrappeso";
    }
?>


<?php
echo "
<div class='container'>
        <h1>Calcolatore BMI</h1>
        <form action="bmi.php" method="GET" class="card-form">


        </div>


            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" placeholder="Luca" required>
            </div>
            <div class="form-group">
                <label for="peso">Peso (kg)</label>
                <input type="number" id="peso" name="peso" step="0.1" placeholder="70" required>
            </div>
            <div class="form-group">
                <label for="altezza">Altezza (cm)</label>
                <input type="number" id="altezza" name="altezza" step="1" placeholder="178" required>
            </div>
            <button type="submit" class="btn-calcola">Calcola</button>
            

            <div class="card <?php echo $classe; ?>">
            <h2><?php echo $nome; ?></h2>
            <p>Peso <?php echo $peso; ?> kg - Altezza <?php echo $altezza; ?> cm</p>
            <div><?php echo round($bmi, 2); ?></div>
            <div><?php echo $categoria; ?></div>

            <br>
        <a href="index.php">Calcola di nuovo</a>

        </form>
    </div>"


?>




</body>
</html>