<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Personal Profile Creator</title>
        <style>
            @import url("css/styles.css");
        </style>
        <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">    
    </head>
    <body>
         <h1 id="phpTitle">Personal Profile Creator</h1>
         <br>
        <?php
            echo "<div id='phpPictureBack'>";
                echo "<img id='phpPicture' src='img/guest.jpg' width='20%' height='20%'/><br>";
            
                echo "<div id='phpName'>";
                    echo "<h2>Name</h2>";
                    if(isset($_POST['firstName']) && $_POST['firstName'] != ""){
                        echo $_POST['firstName'];
                    }
                    else{
                        echo 'N/a';
                    }
                    echo ' ';
                    if(isset($_POST['lastName'])  && $_POST['lastName'] != ""){
                        echo $_POST['lastName'];
                    }
                    else{
                        echo 'N/a';
                    }
                    echo '<br>';
                echo "</div>";
            echo "</div>";

            echo '<div id="phpRest">';
                echo '<fieldset>';
                echo '<legend><h4>Date of Birth</h4></legend>';
                if(isset($_POST['month']) && $_POST['month'] != ""){
                    echo $_POST['month'];
                    echo ', ';
                }
                else{
                    echo 'N/a';
                }
                echo ' ';
                
                if(isset($_POST['year']) && $_POST['year'] != ""){
                    echo $_POST['year'];
                }
                else{
                    echo 'N/a';
                }
                echo '</fieldset>';
                
                echo '<fieldset>';
                echo '<legend><h4>Age</h4></legend>';
                if(isset($_POST['age']) && $_POST['age'] != ""){
                    echo $_POST['age'];
                }
                else{
                    echo 'N/a';
                }
                echo '</fieldset>';
                
                echo '<fieldset>';
                echo '<legend><h4>Gender</h4></legend>';
                if(isset($_POST['gender']) && $_POST['gender'] != ""){
                    echo $_POST['gender'];
                }
                else{
                    echo 'N/a';
                }
                echo '</fieldset>';
                
                echo '<fieldset>';
                echo '<legend><h4>Location</h4></legend>';
                
                if(isset($_POST['city']) && $_POST['city'] != ""){
                    echo $_POST['city'];
                    echo ', ';
                }
                else{
                    echo 'N/a, ';
                }
                
                if(isset($_POST['state']) && $_POST['state'] != ""){
                    echo $_POST['state'];
                }
                echo '</fieldset>';
            echo '</div>';
        ?>
    </body>
</html>
