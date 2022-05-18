<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "homeWorkDatabase";

$connection = new mysqli($servername, $username, $password, $database);
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }
    // echo "Connected successfully";
  
// $createDatabaseSql = "CREATE DATABASE homeWorkDatabase";
//     if ($connection->query($createDatabaseSql) === TRUE) {
//        echo "Database created successfully";
//     } else {
//        echo "Error creating database: " . $connection->error;
//     }

// $createSightsTableSql = "CREATE TABLE places (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     title VARCHAR(60) NOT NULL,
//     comment VARCHAR(60) NOT NULL
// )";
    
//     if ($connection->query($createSightsTableSql) === TRUE) {
//       echo "Table places created successfully";
//     } else {
//       echo "Error creating table: " . $connection->error;
//     }
    
// $tableDataSql = "INSERT INTO places (title, comment)
//  VALUES ('Gūtmaņala', 'pēc tilpuma lielākā ala Baltijā');";
// $tableDataSql .= "INSERT INTO places (title, comment)
//  VALUES ('Kalējala', 'garākā');";
// $tableDataSql .= "INSERT INTO places (title, comment)
//   VALUES ('Siguldas Velnala', 'viena no populārākajām');";
// $tableDataSql .= "INSERT INTO places (title, comment)
//  VALUES ('Ērgļu klintis', 'Baltijā monolītākā smilšakmens klinšu siena');";
// $tableDataSql .= "INSERT INTO places (title, comment)
//  VALUES ('Zvārtes iezis', 'Bsmilšakmens un dolomīta nogulumiezis');";
// $tableDataSql .= "INSERT INTO places (title, comment)
//  VALUES ('Dzilnas iezis', 'Bsmilšakmens un dolomīta nogulumiezis');";

// if ($connection->multi_query($tableDataSql) === TRUE) {
//     echo "New records created successfully";
//   } else {
//     echo "Error: " . $tableDataSql . "<br>" . $connection->error;
//   }

$dataFromSql = "SELECT title, comment FROM places LIMIT 6";
$result = $connection->query($dataFromSql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Apskates vieta: " . $row["title"]. " - " . $row["comment"]. "<br>";
  }
} else {
    echo "0 results";
}

// $updateInfoSql = "UPDATE places SET comment='Smilšakmens un dolomīta nogulumiezis' WHERE id=5";

// if ($connection->query($updateInfoSql) === TRUE) {
//      echo "Record updated successfully";
// } else {
//      echo "Error updating record: " . $connection->error;
// }

// $updateInfoSql = "UPDATE places SET comment='Smilšakmens un dolomīta nogulumiezis' WHERE id=6";

// if ($connection->query($updateInfoSql) === TRUE) {
//      echo "Record updated successfully";
// } else {
//      echo "Error updating record: " . $connection->error;
// }




$connection->close();

?>