 <?php  
 $connect = mysqli_connect("localhost", "root", "", "depozit");  
 $sql = "DELETE FROM depozit WHERE Id = '".$_POST["id"]."'";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Deleted';  
 }  
 ?>  