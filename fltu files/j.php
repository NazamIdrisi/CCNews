
<!DOCTYPE html>
<html>
  <head>
    <title>Whatever your title is</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   </head>
    
    <style>
    #fileBrowser{
  display: none;
  }

#image{
  width: 200px;
  height: 200px;
  }
    </style>
    
    <script>
    
        
        //NOTE: this code is jquery, go to JQuery.com and find the download then link it in a script tag

$("#activateFile").on('click', function(){
   $("#fileBrowser").click();
  });

//if you want a finish edit button then use this otherwise put this code in the fileBrowser change event handler below KEEP THE readURL(this) OR IT WON'T WORK!

$("#finishEdit").on('click', function(){
  
    var imgData = document.getElementById('image').src;
  
   //imageData is the variable you use $_POST to get the data in php
   $.post('phpscriptname.php', {imageData:imgData}, function(data){ 
     
        //recieve information back from php through the echo function(not required)
     
     });
  });


$("#fileBrowser").change(function(){
    readURL(this);
  });

function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
	reader.onload = function (e) {
	  $('#image').attr('src', e.target.result)
    };
	  		
  reader.readAsDataURL(input.files[0]);
  }
}
    </script>
  <body>
    
    <img id="image" src="somesource.png" alt="somesource"/>
    <!-- NOTE: you can use php to input the users current image in the source attribute -->
    <br/>
    <br/>
    
    <!-- position and style these however you like -->
    
    <input type="file" id="fileBrowser"> <!-- this is display none in css -->
    <button id="activateFile">Choose files</button>
    <br/>
    <br/>
    <button id="finishEdit">Done</button>
    
  </body>
</html>