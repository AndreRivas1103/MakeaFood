<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valor de las Hamburguesas</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<h1 >Suma</h1>
<form name="Sumar" method="POST" action="precio.php">
    Numero uno: <input type="TEXT" name="n1"> <br>
    Numero dos: <input type="TEXT" name="n2"> <br>
                <input type="submit" name="sumar" value="sumar">

</form>

<?php
if (isset($_POST['sumar']))
{
$res= $_POST['n1']+ $_POST['n2'];
echo "El resultado es: ".$res;

}

?>

</body>
</html>