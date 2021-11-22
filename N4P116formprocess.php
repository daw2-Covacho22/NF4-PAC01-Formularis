<html>
 <head>
  <title>Multipurpose Form</title>
  <style type="text/css">
  <!--
td {vertical-align: top;}
  -->
  </style>
 </head>
 <body>
 <h1>Comentario</h1>
<?php

//connect to MySQL
$db = mysqli_connect('localhost', 'root', 'Root') or 
    die ('Unable to connect. Check your connection parameters.');

// make sure you're using the right database
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));


// function to generate ratings
function generate_ratings($rating){
  $movie_rating = '';
  for ($i = 0; $i < $rating; $i++) {
      $movie_rating .= '<img src="star.png" alt="star" width="25" height="25"/>';
  }
  
  return $movie_rating;
}
?>
    <table>
      <tr>
      <td>Movie Name</td>
      <td><input type="text" name="movie_name"
        value="<?php echo $movie_name; ?>"/></td>
      </tr><tr>
      <td>Movie Type</td>
      <td><select name="movie_type">
<?php
// select the movie type information
$query = 'SELECT
        movietype_id, movietype_label
    FROM
        movietype
    ORDER BY
        movietype_label';
$result = mysqli_query($db, $query) or die(mysqli_error($db));
?>
    <td>Usuari</td>
    echo '<td>' . $_POST['user'] . '</td>';
    echo '</tr><tr>';
    echo '<tr>';
    echo '<td>Calificació:</td>';
    echo '<td>' . $_POST['rating'] . '</td>';
    echo '</tr><tr>';
    echo '<td>Opinió:</td>';
  
echo '<td>' . nl2br($_POST['extra']) . '</td>';
echo '</tr>';
echo '</table>';

<?php
$query = 'SELECT 
      reviews 
	      review_movie_id INTEGER UNSIGNED NOT NULL, 
        review_date     DATE             NOT NULL, 
        reviewer_name   VARCHAR(255)     NOT NULL, 
        review_comment  VARCHAR(255)     NOT NULL, 
        review_rating   TINYINT UNSIGNED NOT NULL  DEFAULT 0, 

        KEY (review_movie_id)';
$result = mysqli_query($db, $query) or die(mysqli_error($db));



echo "Relationship created successfully";

echo '<pre>';
print_r($_POST);
echo '</pre>';


?>
 </body>
</html>
