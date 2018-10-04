<!DOCTYPE html>
<head>
	<title>Raspuns</title>
</head>
<body>
	<?php
		/*	Preluam datele transmise din formular.html
			si le salvam in cate o variabila
		*/
		$var_nume 	= $_POST["nume"];
		$var_prenume= $_POST["prenume"];
		$var_an	= $_POST["an"];
		$var_luna	= $_POST["luna"];
		$var_ziua	= $_POST["ziua"];
		$var_adresa	= $_POST["adresa"];
		
		
		
		
		/*	Verificam daca variabilele au fost completate
			si le afisam
		*/
		
		//
		if($var_nume == "")
		{//Nu a completat Numele
			echo "Nu ai completat numele!";
		}
		else
		{
			echo "Nume: ";
			echo $var_nume;
		}
		echo "<br>";
		if($var_prenume == "")
		{//Nu a completat Prenumele
			echo "Nu ai completat prenumele!";
		}
		else
		{
			echo "Prenume: ";
			echo $var_prenume;
		}
		echo "<br>";
		echo "Anul nasterii: ";
		echo $var_an;
		echo "<br>";
		echo "Luna: ";
		echo $_POST["luna"];
		echo "<br>";
		echo "Ziua: ";
		echo $var_ziua;
		echo "<br>";
		echo "Adresa: ";
		echo $var_adresa;
		echo "<br>";


		$dim=$_FILES["fisier"]["size"];
		$nume=$_FILES["fisier"]["name"];
		$nume_temporar = $_FILES["fisier"]["tmp_name"];
		$tip=$_FILES["fisier"]["type"];
		if(($dim<1000000) && ($dim>0)){
		move_uploaded_file($nume_temporar,"./u-f/".$nume);
		echo "Numele fisierului transmis: ".$nume."<br>";
		echo "Dimensiune fisier transmis: ".$dim."<br>";
		echo "Tip fisier: ".$tip.".";
}

		
	?>
</body>
</html>