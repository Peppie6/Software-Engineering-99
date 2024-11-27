<?php
// Include the translation logic
include 'translations.php'; 

// Set default language to English if not set
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'en';

// Sample data for the animal cards, you can translate these too if needed
$animals = [
    ['name' => 'Fluffy', 'species' => 'Cat', 'age' => '2 years', 'description' => 'A playful cat with lots of energy.'],
    ['name' => 'Bingo', 'species' => 'Dog', 'age' => '3 years', 'description' => 'A friendly and loving dog.'],
    ['name' => 'Whiskers', 'species' => 'Rabbit', 'age' => '1 year', 'description' => 'A calm and quiet rabbit.'],
    ['name' => 'Rex', 'species' => 'Dog', 'age' => '4 years', 'description' => 'A strong and loyal dog.'],
    ['name' => 'Luna', 'species' => 'Cat', 'age' => '5 months', 'description' => 'A curious kitten.'],
    ['name' => 'Cleo', 'species' => 'Parrot', 'age' => '3 years', 'description' => 'A colorful and talkative parrot.']
];
?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>"> <!-- Language attribute is dynamic -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Shelter 99</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="logo">
            <div class="logo-icon">🐾</div>
            <h1>AnimalShelter99</h1>
        </div>
        <nav>
            <ul>
                <li><a href="#"><?php echo $translations[$lang]['home']; ?></a></li>
                <li><a href="#"><?php echo $translations[$lang]['adopt']; ?></a></li>
                <a href="upload_animal.php"><?php echo $translations[$lang]['upload_pet']; ?></a>
                <li><a href="#"><?php echo $translations[$lang]['about_us']; ?></a></li>
                <li><a href="#"><?php echo $translations[$lang]['contact']; ?></a></li>
            </ul>
        </nav>
        <div class="language-switch">
            <!-- Language selection buttons -->
            <a href="?lang=en">
                <img src="flags/english-flag.png" alt="English">
            </a>
            <a href="?lang=nl">
                <img src="flags/dutch-flag.png" alt="Dutch">
            </a>
        </div>
    </header>

    <section class="cards-container">
        <?php
        // Loop through the animals array to display 6 cards
        foreach ($animals as $animal) {
            echo '<div class="card">';
            echo '<a href="animal_details.php?name=' . urlencode($animal['name']) . '&lang=' . $lang . '">';
            echo '<img src="https://via.placeholder.com/200x200" alt="Animal Image">';
            echo '<h2>' . $animal['name'] . '</h2>';
            echo '<p><strong>' . $translations[$lang]['species'] . ':</strong> ' . $animal['species'] . '</p>';
            echo '<p><strong>' . $translations[$lang]['age'] . ':</strong> ' . $animal['age'] . '</p>';
            echo '<p>' . $animal['description'] . '</p>';
            echo '</a>';
            echo '</div>';
        }
        ?>
    </section>
</body>
</html>
