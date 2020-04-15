 <?php
$servername = "localhost";
$username = "progettodpi2";
$password = "py44yNC8ZSRQ";
$dbname = "my_progettodpi2";
if($_POST["id"]!=""){
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO MANSIONI (ID, Descrizione) VALUES ('".$_POST["id"]."','".$_POST["description"]."')";
//$stmt = mysqli_prepare($sql);
//$stmt->bind_param('ss', $_POST['id'], $_POST['description']);
//$stmt->execute();
$result = mysqli_query($conn,$sql);
if($result){
	echo "Mansione inserita con successo!";
    }else{
    echo "Mansione NON inserita correttamente. <br> Reindirizzamento in 10 secondi";
	header("refresh:10; url=/nuovaMansione.php");}
}else{
	echo "Mansione NON inserita correttamente. <br> Reindirizzamento in 10 secondi";
	header("refresh:10; url=/nuovaMansione.php");}

?> 