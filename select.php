 <?php  
 $connect = mysqli_connect("localhost", "root", "", "depozit");  
 $output = '';  
 $sql = "SELECT * FROM depozit ORDER BY Id DESC";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="10%">Id</th>  
                     <th width="40%">Nume</th> 
					 <th width="15%">Rand</th>
                     <th width="15%">Coloana</th>  
                     <th width="20%">Data</th>  
                </tr>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["Id"].'</td>  
                     <td class="Nume" data-id1="'.$row["Id"].'" contenteditable>'.$row["Nume"].'</td>  
                     <td class="Rand" data-id2="'.$row["Id"].'" contenteditable>'.$row["Rand"].'</td>
<td class="Coloana" data-id2="'.$row["Id"].'" contenteditable>'.$row["Coloana"].'</td>
<td class="Data" data-id2="'.$row["Id"].'" contenteditable>'.$row["Data"].'</td>    					 
                     <td><button type="button" name="delete_btn" data-id3="'.$row["Id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td Id="Nume" contenteditable></td>  
                <td Id="Rand" contenteditable></td> 
<td Id="Coloana" contenteditable></td>
<td Id="Data" contenteditable></td>				
                <td><button type="button" name="btn_add" Id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '<tr>  
                          <td colspan="4">Data not Found</td>  
                     </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>  