<?php


$servername = "localhost";
$username = "progettodpi2";
$password = "py44yNC8ZSRQ";
$dbname = "my_progettodpi2";

$target_dir = "img/";
$filename = $_FILES["fileToUpload"]["name"];
$target_file_temp = $target_dir . basename($filename);
$imageFileType = strtolower(pathinfo($target_file_temp,PATHINFO_EXTENSION));
$newfilename = $_POST["id"] . "." . $imageFileType;
$imgres = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
$uploadOk = 1;


// Controllo che sia una immagine
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "Il file è un'immagine.<br>";
		$conn = new mysqli($servername, $username, $password, $dbname);
        $uploadOk = 1;
    } else {
        echo "Il file NON è un'immagine.<br>";
        $uploadOk = 0;
        
    }
}

// Controllo formato immagine
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
    echo "Formato immagine non consentito<br>";
    $uploadOk = 0;
}

// Controllo se il file è gia presente
	if (file_exists($target_dir . $newfilename)) {
    echo "Immagine già presente.<br>";
    $uploadOk = 0;
}

//Controllo dimensione file
	if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "File troppo grande<br>";
    $uploadOk = 0;
}

//Controllo risoluzione immagine
	if ($imgres[0]<100 || $imgres[1]<100){
		echo "Risoluzione immagine troppo bassa.<br>";
		$uploadOk = 0;
	}

// Esito controlli
if ($uploadOk == 0) {
    echo "Immagine NON caricata correttamente <br> Reindirizzamento in 10 secondi";
	header("refresh:10; url=/InserDpi.php");
	
// upload file
} else {
	$sql = "INSERT INTO TIPO_DPI (ID, Descrizione, Uso, Categoria, LinkImg) VALUES ('".$_POST["id"]."','".$_POST["description"]."','".$_POST["use"]."','".$_POST["category"]."','/$target_dir$newfilename')";
	$result = mysqli_query($conn,$sql);
    if($result){
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir . $newfilename )) {
        echo "Il DPI " . $newfilename . " è stato caricato con successo.";
    } else {
        echo "nImmagine NON caricata correttamente <br> Reindirizzamento in 10 secondi";
		header("refresh:10; url=/InserDpi.php");
    }}else{
		echo "DPI NON inserito correttamente. <br> Reindirizzamento in 10 secondi";
		header("refresh:10; url=/InserDpi.php");}
}
?>