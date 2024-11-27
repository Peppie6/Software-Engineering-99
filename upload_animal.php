<?php



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $species = $_POST['species'];
    $age = $_POST['age'];
    $breed = $_POST['breed'];
    $personality = $_POST['personality'];
    $special_needs = $_POST['special_needs'];

    // Handle file upload
    $upload_dir = 'uploads/';
    $image_path = '';

    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $image_path = $upload_dir . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $image_path);
    }

    // Save data (this is just an example, you can also save it to a database)
    $data = [
        'name' => $name,
        'species' => $species,
        'age' => $age,
        'breed' => $breed,
        'personality' => $personality,
        'special_needs' => $special_needs,
        'image' => $image_path,
    ];

    // Save to a JSON file (you can replace this with a database)
    $json_file = 'animals.json';
    $animals = [];

    if (file_exists($json_file)) {
        $animals = json_decode(file_get_contents($json_file), true);
    }

    $animals[] = $data;
    file_put_contents($json_file, json_encode($animals));

    echo "Animal uploaded successfully!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <title>Upload Animal</title>
    
</head>
<body>
    <h1>Upload an Animal</h1>
    <form action="upload_animal.php" method="post" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>
        
        <label for="species">Species:</label>
        <input type="text" id="species" name="species" required><br>
        
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required><br>
        
        <label for="breed">Breed:</label>
        <input type="text" id="breed" name="breed" required><br>
        
        <label for="personality">Personality:</label>
        <textarea id="personality" name="personality" required></textarea><br>
        
        <label for="special_needs">Special Needs:</label>
        <textarea id="special_needs" name="special_needs"></textarea><br>
        
        <label for="image">Upload Image:</label>
        <input type="file" id="image" name="image" accept="image/*" required><br>
        
        <button type="submit">Upload</button>
    </form>
</body>
</html>
