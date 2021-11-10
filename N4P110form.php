<html>
    <head>
        <title>Formulari</title>
</head>
<body>
    <h1>Formulari</h1>
    <form action="N4P111formprocess.php" method="post">
        <table>
            <tr>
                <td>Nom</td>
                <td><input type="text" name="nom" /></td>
            </tr>
            <td>Tipus de pelicula<br/></td>
            <td>
                <select name="movie_type">
                    <option value="">Selecciona el tipus de pelicula...</option>
                    <option value="Accio">Acció</option>
                    <option value="Drama">Drama</option>
                    <option value="Comedia">Comedia</option>
                    <option value="Ciencia-Ficcio">Ciencia Ficció</option>
                    <option value="Guerra">Suspens</option>
                    <option value="Otros">Altres</option>
                </select>
            </td>
            <tr>
                <td colspan="2" style="text-align: center;">
                <input type="submit" name="submit" value="Afegir"/></td>
            </tr>
        </table>
    </form>
</body>
</html>