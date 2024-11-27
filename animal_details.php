<?php
include 'translations.php'; // Include the translation logic

// Assuming you passed the animal name in the URL
$animalName = isset($_GET['name']) ? $_GET['name'] : 'Unknown';

// Sample data for demonstration
$animals = [
    'Fluffy' => ['species' => 'Cat', 'age' => '2 years', 'breed' => 'Persian', 'personality' => 'Playful and curious', 'special_needs' => 'None'],
    'Bingo' => ['species' => 'Dog', 'age' => '3 years', 'breed' => 'Golden Retriever', 'personality' => 'Loving and energetic', 'special_needs' => 'None'],
    'Whiskers' => ['species' => 'Rabbit', 'age' => '1 year', 'breed' => 'Lop', 'personality' => 'Calm and quiet', 'special_needs' => 'None'],
    'Rex' => ['species' => 'Dog', 'age' => '4 years', 'breed' => 'German Shepherd', 'personality' => 'Loyal and strong', 'special_needs' => 'None'],
    'Luna' => ['species' => 'Cat', 'age' => '5 months', 'breed' => 'Siamese', 'personality' => 'Curious and playful', 'special_needs' => 'None'],
    'Cleo' => ['species' => 'Parrot', 'age' => '3 years', 'breed' => 'Macaw', 'personality' => 'Talkative and colorful', 'special_needs' => 'None']
];

// Check if the animal exists
if (isset($animals[$animalName])) {
    $animal = $animals[$animalName];
} else {
    $animal = null;
}
?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>"> <!-- Language attribute is dynamic -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $translations[$lang]['animal_name']; ?> - <?php echo $animalName; ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="logo">
            <h1>AnimalShelter99</h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.php"><?php echo $translations[$lang]['home']; ?></a></li>
                <li><a href="#"><?php echo $translations[$lang]['adopt']; ?></a></li>
                <li><a href="upload_animal.php"><?php echo $translations[$lang]['upload_pet']; ?></a></li>
                <li><a href="#"><?php echo $translations[$lang]['about_us']; ?></a></li>
                <li><a href="#"><?php echo $translations[$lang]['contact']; ?></a></li>
            </ul>
        </nav>
        <!-- Language selection buttons -->
        <div class="language-switch">
            <a href="?lang=en&name=<?php echo urlencode($animalName); ?>">
                <img src="flags/Flag_of_the_United_Kingdom_(1-2).svg.png" alt="English">
            </a>
            <a href="?lang=nl&name=<?php echo urlencode($animalName); ?>">
                <img src="flags/Flag_of_the_Netherlands.svg.webp" alt="Dutch">
            </a>
        </div>
    </header>

    <section class="animal-details">
        <?php if ($animal): ?>
            <img src="https://via.placeholder.com/350x350" alt="Animal Image">
            <div>
                <h2><?php echo $animalName; ?></h2>
                <p><strong><?php echo $translations[$lang]['species']; ?>:</strong> <?php echo $animal['species']; ?></p>
                <p><strong><?php echo $translations[$lang]['age']; ?>:</strong> <?php echo $animal['age']; ?></p>
                <p><strong><?php echo $translations[$lang]['breed']; ?>:</strong> <?php echo $animal['breed']; ?></p>
                <p><strong><?php echo $translations[$lang]['personality']; ?>:</strong> <?php echo $animal['personality']; ?></p>
                <p><strong><?php echo $translations[$lang]['special_needs']; ?>:</strong> <?php echo $animal['special_needs']; ?></p>
            </div>
        <?php else: ?>
            <p><?php echo $translations[$lang]['animal_not_found']; ?></p>
        <?php endif; ?>
    </section>
</body>
</html>
