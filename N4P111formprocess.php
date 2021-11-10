<html>
 <head>
  <title>Multipurpose Form</title>
  <style type="text/css">
  <!--
td {
    vertical-align: top;
}
label{
    color:grey;
}
label:hover{
    color:orange;
}
label:hover ~ label{
    color:orange;
}
input[type = "radio"]{ 
    display:none;
}
input[type = "radio"]:checked ~ label{
    color:orange;
}
.clasificacio label{
    direction: rtl;/* right to left */
    unicode-bidi: bidi-override;/* bidi de bidireccional */
}
  -->
  </style>
 </head>
 <body>
 <?php
 echo "<h1>Añadir Opinión Sobre " . $_POST['nom'] . "</h1>";
 ?>

  <form action="N4P116formprocess.php" method="post">
   <table>
    <tr>
     <td>Nom</td>
     <td>
      <?php echo $_POST['nom']; ?>
      <input type="hidden" name="nom" value="<?php echo $_POST['nom']; ?>"/>
     </td>
    </tr>

    <tr>
     <td>Tipus de pelicula</td>
     <td>
      <?php echo $_POST['movie_type']; ?>
      <input type="hidden" name="movie_type"
       value="<?php echo $_POST['movie_type']; ?>"/>
     </td>
    </tr><tr>
    <td>Usuari</td>
    <td><input type="text" name="user" /></td>
    </tr><tr>

     <td class="clasificacio">Calificació
     <input type="radio" id="radio1" name="calificacio" value="5"/>
        <label for="radio1">★</label>
        <input id="radio2" type="radio" name="estrellas" value="4">
        <label for="radio2">★</label>
        <input id="radio3" type="radio" name="estrellas" value="3">
        <label for="radio3">★</label>
        <input id="radio4" type="radio" name="estrellas" value="2">
        <label for="radio4">★</label>
        <input id="radio5" type="radio" name="estrellas" value="1">
        <label for="radio5">★</label>
     </td></tr>

     <td>Opinió Sobre La Pelicula</td>
     
     <td><textarea name="extra" rows="5" cols="60"></textarea></td>
    </tr><tr>
     <td colspan="2" style="text-align: right;">

      <input type="submit" name="submit" value="Envia" />
     </td>
    </tr>
   </table>
  </form>
<?php

echo '<pre>';
print_r($_POST);
echo '</pre>';

?>
 </body>
</html>