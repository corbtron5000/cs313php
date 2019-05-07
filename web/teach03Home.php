<!DOCTYPE html>
<html lang="en-US">

    <head>
        <meta charset="utf-8">
        <meta name="Teach03" content="width=device-width, initial-scale=1">
        <title>CS313 Jonathan Carlson</title>
        <meta name = "description" content="CS313 Assignments for Jonathan Carlson.">
        <link rel="stylesheet" href="normalize.css">
        <link id="styles" rel="stylesheet" href="teach03.css">
    </head>
    
    <header>
    </header>
    
    <body>
    
        <form action="teach03.php" method="post"> 
            
            <p>Name:</p>    
            <input type="text" name="name"><br> 
            
            <p>E-mail:</p>  
            <input type="text" name="email"><br> 
            
            <!-- Majors radio buttons -->
            <?php 
                echo "<p>Major</p>";
                
                $majors = array("Computer Science", "Web Design and Development", "Computer information Systems", "Computer Engineering");
                
                foreach($majors as $i)                     
                    echo "<input type='radio' name='major' value='$i'> $i <br>"; 
            
                echo "<p>Comments</p><textarea name='comments'></textarea><br>";
                
                //Continental checkbox options
                echo "<p>Places you have visited:</p>";
            
                $places = array("North America", "South America", "Europe", "Asia", "Austrialia", "Africa", "Antarctica");    
            
                // In order to have this work, your name must include "[]" at the end!
                foreach($places as $i) {
                    echo "<input type='checkbox' name='Continent[]' value='$i'> $i <br>"; 
                }
            ?>
 
            <input type="submit" name="submit">
        
        </form>  
        
    </body>
        
    <footer>
    </footer>
    
</html>