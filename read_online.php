<?php

session_start();

include('header.inc.html');

?>



<?php
require('book_functions.inc.php');
require('mysqli_connect.php');

$book_id=$_GET['book_id'];

list($check, $data)= GetBookDetail($dbc, $book_id);


?>


		
		<div id="main" >
		  <select id="toc"></select>
		          <div id="prev" onclick="Book.prevPage();" class="arrow">‹</div>
		          <div id="area"></div>
		          <div id="next" onclick="Book.nextPage();"class="arrow">›</div>
		          <div id="loader"><img src="/img/loader.gif"></div>
		        
		        </div>



 <script src="/js/epub.js"></script>
 <script src="/js/zip.js"></script>  

 <script src="/js/zip-fs.js"></script> 
  <script src="/js/zip-ext.js"></script> 
   <script src="/js/mime-types.js"></script> 

        <script>
            "use strict";
             EPUBJS.filePath = "/js/";
            
            <?php print "var Book = ePub('/books/$data[filename].epub');"; ?>
            
   
            Book.getMetadata().then(function(meta){

                document.title = meta.bookTitle+" – "+meta.creator;
                
            });

            Book.getToc().then(function(toc){

              var $select = document.getElementById("toc"),
                  docfrag = document.createDocumentFragment();

              toc.forEach(function(chapter) {
                var option = document.createElement("option");
                option.textContent = chapter.label;
                option.ref = chapter.href;

                docfrag.appendChild(option);
              });

              $select.appendChild(docfrag);

              $select.onchange = function(){
                  var index = $select.selectedIndex,
                      url = $select.options[index].ref;
                  
                  Book.goto(url);
                  return false;
              }

            });
            
            Book.ready.all.then(function(){
              document.getElementById("loader").style.display = "none";
            });

            Book.renderTo("area");

        </script>
<?php
include('footer.inc.html'); 


  ?>