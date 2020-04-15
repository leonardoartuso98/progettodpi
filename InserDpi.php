<!DOCTYPE html>
<html>
<head>
<title>Nuovo DPI</title>
</head>
<h2>
INSERIMENTO NUOVO DPI
</h2>
<body>

<form action="uploadimage.php" method="post" enctype="multipart/form-data" autocomplete="off">
	ID:<br>
    <input type="text" name="id" maxlength="6" autofocus required><br>
	DESCRIZIONE:<br>
    <input type="text" name="description" required><br>
	USO:<br>
    <input type="text" name="use" required><br>
	CATEGORIA:<br>
    <input type="text" name="category" required><br>
    Seleziona l'immagine da associare (jpeg, jpg, png):
    <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
    <input type="submit" value="CONFERMA" name="submit">
</form>

</body>
</html>
