<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>list</title>
    <style>
        body{ 
            text-align: center; 
        }
    </style>
</head>
<body>
       <h1>La liste de tous les etudiants :</h1>

       <?php
       require_once "config.php";

       $query="SELECT * FROM demo";

       $result=mysqli_query($conn,$sql);

        while($row=mysqli_fetch_assoc($res)){

            echo "<table border: 1px solid; ><tr><th>username:</th></tr>";
            echo "<tr><td>";
            echo $row['username'];
            echo "</td></tr></table>";

       }
       ?>
       <a href="welcom.php" >Cancel</a>
</body>
</html>
