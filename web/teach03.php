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
    
    <body>
        <?php
            $name = htmlspecialchars($_POST["name"]);
            $email = htmlspecialchars($_POST["email"]);
            $major = htmlspecialchars($_POST["major"]);
            $comments = htmlspecialchars($_POST["comments"]);
            echo "<p>Your name is: " . $name . "<br>";
            echo "mailto: " . $email . "<br>"; 
            echo "You are studying " . $major . "<br>";
            echo "Your additional comments: " . "'" . $comments . "'<br>";
            echo "Continents you have visited: ";
            if(!empty($_POST['Continent'])){
                foreach($_POST['Continent'] as $selected){
                    echo $selected.", ";
                }
            }
            echo "</p>";
        ?>
    </body>
    
</html>