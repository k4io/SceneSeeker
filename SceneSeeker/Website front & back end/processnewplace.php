<?php
try {
    // Create or open the SQLite database
    $db = new PDO('sqlite:places.db');
    
    // Create the 'places' table if it doesn't exist
    $createTableQuery = "CREATE TABLE IF NOT EXISTS places (
        id INTEGER PRIMARY KEY,
        name TEXT,
        description TEXT,
        location TEXT,
        opening_times TEXT,
        created_at DATETIME,
        verified INTEGER DEFAULT 0,
        latitude REAL,
        longitude REAL
    )";
    $db->exec($createTableQuery);

    // Insert data into the 'places' table
    $name = $_POST['name'];
    $description = $_POST['description'];
    $location = $_POST['location'];
    $opening_times = $_POST['opening_times'];
    $created_at = date('Y-m-d H:i:s');
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    $insertQuery = "INSERT INTO places (name, description, location, opening_times, created_at, latitude, longitude) 
                    VALUES (:name, :description, :location, :opening_times, :created_at, :latitude, :longitude)";
    $stmt = $db->prepare($insertQuery);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':location', $location);
    $stmt->bindParam(':opening_times', $opening_times);
    $stmt->bindParam(':created_at', $created_at);
    $stmt->bindParam(':latitude', $latitude);
    $stmt->bindParam(':longitude', $longitude);
    $stmt->execute();

    echo "Place added successfully!";
    sleep(1);
    header('location: ss.php');
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
