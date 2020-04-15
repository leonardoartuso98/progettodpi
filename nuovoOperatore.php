<!DOCTYPE html>
<html>
<head>
<title>Nuovo Operatore</title>
</head>
<h2>
INSERIMENTO NUOVO OPERATORE
</h2>
<body>

<form action="new_operatore.php" method="post" autocomplete="off">
	CODICE FISCALE:<br>
    <input type="text" name="cf" minlength="16" maxlength="16" autofocus required><br>
	NOME:<br>
    <input type="text" name="name" required><br>
	COGNOME:<br>
    <input type="text" name="surname" required><br>
	ID BADGE:<br>
    <input type="text" name="id" required><br><br>
    <input type="submit" value="CONFERMA" name="submit">
</form>

</body>
</html>