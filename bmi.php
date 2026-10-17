<?php
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

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Il tuo BMI</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Il tuo BMI</h1>
        
        <div class="card <?php echo $classe; ?>">
            <h2><?php echo $nome; ?></h2>
            <p>Peso <?php echo $peso; ?> kg - Altezza <?php echo $altezza; ?> cm</p>
            <div><?php echo round($bmi, 2); ?></div>
            <div><?php echo $categoria; ?></div>
        </div>

        <br>
        <a href="form.html">Calcola di nuovo</a>
    </div>
</body>
</html>