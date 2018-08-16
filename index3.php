<html>
   <head>
      <title>The jQuery Example</title>
      <script type = "text/javascript" 
         src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
		
      <script type = "text/javascript" language = "javascript">
         $(document).ready(function() {
            $("#driver").click(function(event){
				
               $.ajax({
                   url:'http://localhost/jquery/response.php',
                   type : 'POST',
                   data :  {'key':'sunil'},
                   dataType : 'json',
                   success:function(neha) {
                       console.log(neha.Arabic.three.sunil[4]);
                      $('#stage').html('<p> Name: ' + neha.name + '</p>');
                    //   $('#stage').append('<p>Age : ' + neha.age + '</p>');
                    //   $('#stage').append('<p> Sex: ' + neha.sex + '</p>');
                   }
               });
					
            });
         });
      </script>
   </head>
	
   <body>
      <p>Click on the button to load result.json file −</p>
		
      <div id = "stage" style = "background-color:#eee;">
         STAGE
      </div>
		
      <input type = "button" id = "driver" value = "Load Data" />
   </body>
</html>