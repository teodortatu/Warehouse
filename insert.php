 <?php  
 $connect = mysqli_connect("localhost", "root", "", "depozit");  
 $sql = "INSERT INTO depozit(Nume, Rand, Coloana) VALUES('".$_POST["Nume"]."', '".$_POST["Rand"]."','".$_POST["Coloana"]."')";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Inserted';  
 }  
 ?>  