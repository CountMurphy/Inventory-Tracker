
<!DOCTYPE HTML> 
<html> 
<head> 
<title>The Goods</title> 
</head> 
<body> 
<h1>Current Hardware Inventory</h1> 
<br/> 
</body> 
</html> 


<?php 
	
    //Code could easily be called in a loop

    printTable("LED"); 
    printTable("MicroControlers"); 
    printTable("Msc"); 
    printTable("Regulators"); 
    printTable("Resistors"); 
    printTable("Mosfets"); 
    printTable("Battery"); 
    /* 
    +---------------------+ 
    | Tables_in_inventory | 
    +---------------------+ 
    | LED                 | 
    | MicroControlers     | 
    | Msc                 | 
    | Regulators          | 
    | Resistors           | 
    +---------------------+ 
    */ 
function printTable($table) 
{ 
    $sql=new PDO("mysql:host=127.0.0.1;dbname=inventory","user","password"); 
    $query="Describe $table"; 
    $stmt=$sql->prepare($query); 
    $stmt->execute(); 
    $table_fields = $stmt->fetchAll(PDO::FETCH_COLUMN); 
    $query="Select * FROM $table"; 
    $stmt=$sql->prepare($query); 
    $stmt->execute(); 

    echo "<h2>$table</h2><table>"; 
    //populate headers 
    $headerCount=count($table_fields); 
    echo "<tr>"; 
    for($i=1;$i<$headerCount;$i++) //i starts at 1 to ommit the ID column
    { 
        echo"<th>$table_fields[$i]</th>"; 
    } 
    echo"</tr>"; 
    while($results=$stmt->fetch()) { 
        echo "<tr>"; 
        for($i=1;$i<count($table_fields);$i++) 
        { 
            $key=$table_fields[$i]; 
            echo "<td>$results[$key]</td>"; 
        } 
        echo "</tr>"; 
    } 
    echo"</table>"; 
} 
?> 

