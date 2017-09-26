<?php
$nomedabanda = $_POST["nomedabanda"];
$linkimagem = $_POST["linkimagem"];

$integrantenome1 = $_POST["nome1"];
$integrantenasc1 = $_POST["nascimento1"];
$integranteinst1 = $_POST["instrumento1"];

$integrantenome2 = $_POST["nome2"];
$integrantenasc2 = $_POST["nascimento2"];
$integranteinst2 = $_POST["instrumento2"];

$integrantenome3 = $_POST["nome3"];
$integrantenasc3 = $_POST["nascimento3"];
$integranteinst3 = $_POST["instrumento3"];

$biografia = $_POST["bio"];
$backgroundcolor = $_POST["backgroundcolor"];
$textcolor = $_POST["textcolor"];

$cores['Azul'] = 'blue';
$cores['Amarelo'] = 'yellow';
$cores['Branco'] = 'white';
$cores['Verde'] = 'green';
$cores['Vermelho'] = 'red';
$cores['Preto'] = 'black';

?>

<!DOCTYPE html>
<html>
<head>
    <title>Banda</title>
</head>
<body bgcolor=<?php echo '"'.$cores["$backgroundcolor"].'"' ?> text=<?php echo '"'.$cores["$textcolor"].'"' ?>>
<center>
<h1><?php echo $nomedabanda ?></h1>
<img src=<?php echo '"'.$linkimagem.'"' ?> title=<?php echo '"'.$nomedabanda.'"' ?> alt='capa bana'>
</center>
<hr>
<h2>Biografia:</h2>
<p>
    <?php echo $biografia ?>
</p>
<hr>
<h2>Integrante:</h2>
<center>
<table border="1">
    <thead>
        <th>Nome</th>
        <th>Data de nascimento</th>
        <th>Instrumento</th>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $integrantenome1 ?></td>
            <td><?php echo $integrantenasc1 ?></td>
            <td><?php echo $integranteinst1 ?></td>
        </tr>
        <tr>
            <td><?php echo $integrantenome2 ?></td>
            <td><?php echo $integrantenasc2 ?></td>
            <td><?php echo $integranteinst2 ?></td>
        </tr>
        <tr>
            <td><?php echo $integrantenome3 ?></td>
            <td><?php echo $integrantenasc3 ?></td>
            <td><?php echo $integranteinst3 ?></td>
        </tr>
    </tbody>
</table>
</center>

</body>
</html>