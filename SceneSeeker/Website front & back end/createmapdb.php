<?php
// SQLite database file path
$dbFilePath = 'maps.db'; // Updated file path

try {
    // Create or open the database file
    $db = new PDO('sqlite:' . $dbFilePath);

    // Set the database to use foreign keys
    $db->exec('PRAGMA foreign_keys = ON;');

    // Create the maps table if it doesn't exist
    $db->exec('
        CREATE TABLE IF NOT EXISTS maps (
            id INTEGER PRIMARY KEY,
            name TEXT
        );
    ');

    // Check if the map ID already exists in the maps table
    $mapid = $_GET['mapid']; // Adjust to retrieve the map ID from the request
    $stmt = $db->prepare('SELECT id FROM maps WHERE id = ?');
    $stmt->execute([$mapid]);
    $existingMap = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$existingMap) {
        // Insert the map into the maps table if it doesn't exist
        $stmt = $db->prepare('INSERT INTO maps (id, name) VALUES (?, ?)');
        $stmt->execute([$mapid, 'Map ' . $mapid]); // You can set the map name as needed
    }

    // Create the players table if it doesn't exist
    $db->exec('
        CREATE TABLE IF NOT EXISTS players (
            id INTEGER PRIMARY KEY,
            map_id INTEGER,
            name TEXT,
            position_x REAL,
            position_y REAL,
            held_item TEXT,
            FOREIGN KEY (map_id) REFERENCES maps (id)
        );
    ');

    echo 'Database and tables created successfully.';
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
?>
