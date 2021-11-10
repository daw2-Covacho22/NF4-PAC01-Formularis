<html>
    <head>
        <title>Formulari de nombres Sara Covacho</title>
    </head>
    <body>
<?php
echo '<h1> Formulari de nombres Sara Covacho </h1>';
$numeroun = $_POST['numeroun'];
$numerodos = $_POST['numerodos'];
$numerotres = $_POST['numerotres'];
$numeroquatre = $_POST['numeroquatre'];
$numerocinc = $_POST['numerocinc'];

echo "La suma total dels nombres afegits son: " . $numeroun + $numerodos + $numerotres + $numeroquatre + $numerocinc;
?>
<pre>
    <strong>DEBUG:</strong>
<?php
print_r($_POST);

?>
</pre>
</body>
</html>