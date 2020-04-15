 <?php
$servername = "localhost";
$username = "progettodpi2";
$password = "py44yNC8ZSRQ";
$dbname = "my_progettodpi2";
if($_POST["cf"]!=""){
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO OPERATORI (CF, Nome, Cognome, IdBadge) VALUES ('".$_POST["cf"]."','".$_POST["name"]."','".$_POST["surname"]."','".$_POST["id"]."')";
$result = mysqli_query($conn,$sql);

if($result){
	echo "Operatore aggiunto con successo!";
    }else{
    echo "Operatore NON inserito correttamente. <br> Reindirizzamento in 10 secondi";
	header("refresh:10; url=/nuovoOperatore.php");}
}else{
	echo "Operatore NON inserito correttamente. <br> Reindirizzamento in 10 secondi";
	header("refresh:10; url=/nuovoOperatore.php");}

?> 