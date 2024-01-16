<?php    
    
    
    $servername = "localhost";
    $database = "winkel";
    $username = "root";
    $password = "";

    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);


    $sqlProducten = "SELECT * FROM producten";
    $alleProducten = $conn->query($sqlProducten);

    $product = $alleProducten->fetchAll();
    
    echo "<ul>";
    
    
   foreach($product as $row) { 
    echo "<li>".$row['titel']. " " .$row[3]. "</li>";
}
    echo "</ul>";
?>