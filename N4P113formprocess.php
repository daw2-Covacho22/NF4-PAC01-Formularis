<html>
    <head>
        <title>Dades Formulari</title>
    </head>
    <body>
<?php
echo '<h1>Dades sobre ' . $_POST['nom'] . '</h1>';
echo "Selector Varibles ";
?>
<select name="id_unidad">
<?php

echo "<option value='$id_unidad'>" . $_POST['nom'] . "</option>";
echo "<option value='$id_unidad'>" . $_POST['cognomun'] . "</option>";
echo "<option value='$id_unidad'>" . $_POST['cognomdos'] . "</option>";
echo "<option value='$id_unidad'>" . $_POST['esport'] . "</option>";
echo "<option value='$id_unidad'>" . $_POST['hobby'] . "</option>";

?>

</select>

<pre>
    <strong>DEBUG:</strong>
<?php
print_r($_POST);
?>
</pre>
</body>
</html>