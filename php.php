<html>  
      <head>  
           <title>Warehouse</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
      </head>  
      <body>  
           <div class="container">  
                <br />  
                <br />  
                <br />  
                <div class="table-responsive">  
                     <h3 align="center">Warehouse</h3><br />  
                     <div id="live_data"></div>                 
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      function fetch_data()  
      {  
           $.ajax({  
                url:"select.php",  
                method:"POST",  
                success:function(data){  
                     $('#live_data').html(data);  
                }  
           });  
      }  
      fetch_data();  
      $(document).on('click', '#btn_add', function(){  
           var Nume = $('#Nume').text();  
           var Rand = $('#Rand').text();
		   var Coloana = $('#Coloana').text(); 
		   var Data = $('#Data').text(); 
           if(Nume == '')  
           {  
                alert("Pune nume");  
                return false;  
           }  
           if(Rand == '')  
           {  
                alert("Pune Rand");  
                return false;  
           }
			if(Coloana == '')  
           {  
                alert("Pune coloana");  
                return false;  
           }  		   if(Data == '')  
           {  
                alert("Pune Data");  
                return false;  
           }  
           $.ajax({  
                url:"insert.php",  
                method:"POST",  
                data:{Nume:Nume, Rand:Rand, Coloana:Coloana,Data:Data},  
                dataType:"text",  
                success:function(data)  
                {  
                     alert(data);  
                     fetch_data();  
                }  
           })  
      });  
      function edit_data(id, text, column_name)  
      {  
           $.ajax({  
                url:"edit.php",  
                method:"POST",  
                data:{id:id, text:text, column_name:column_name},  
                dataType:"text",  
                success:function(data){  
                     alert(data);  
                }  
           });  
      }  
      $(document).on('blur', '.Nume', function(){  
           var id = $(this).data("id1");  
           var Nume = $(this).text();  
           edit_data(id, Nume, "Nume");  
      });
$(document).on('blur', '.Rand', function(){  
           var id = $(this).data("id1");  
           var Rand = $(this).text();  
           edit_data(id, Rand, "Rand");  
      });  	  
      $(document).on('blur', '.Coloana', function(){  
           var id = $(this).data("id2");  
           var Coloana = $(this).text();  
           edit_data(id,Coloana, "Coloana");  
      });  
	  $(document).on('blur', '.Data', function(){  
           var id = $(this).data("id2");  
           var Data = $(this).text();  
           edit_data(id,Data, "Data");  
      });  
      $(document).on('click', '.btn_delete', function(){  
           var id=$(this).data("id3");  
           if(confirm("Are you sure you want to delete this?"))  
           {  
                $.ajax({  
                     url:"delete.php",  
                     method:"POST",  
                     data:{id:id},  
                     dataType:"text",  
                     success:function(data){  
                          alert(data);  
                          fetch_data();  
                     }  
                });  
           }  
      });  
 });  
 </script>