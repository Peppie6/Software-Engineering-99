<?php
session_start();

if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
} elseif (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'en'; // Default language
}

$lang = $_SESSION['lang'];

$translations = [
    'en' => [
        'home' => 'Home',
        'adopt' => 'Adopt',
        'upload_pet' => 'Upload Pet',
        'about_us' => 'About Us',
        'contact' => 'Contact',
        'animal_name' => 'Animal Name',
        'species' => 'Species',
        'age' => 'Age',
        'breed' => 'Breed',
        'personality' => 'Personality',
        'special_needs' => 'Special Needs',
        'animal_not_found' => 'Animal not found!'
    ],
    'nl' => [
        'home' => 'Thuis',
        'adopt' => 'Adopteren',
        'upload_pet' => 'Dier Uploaden',
        'about_us' => 'Over Ons',
        'contact' => 'Contact',
        'animal_name' => 'Dier Naam',
        'species' => 'Soort',
        'age' => 'Leeftijd',
        'breed' => 'Ras',
        'personality' => 'Persoonlijkheid',
        'special_needs' => 'Bijzondere Behoeften',
        'animal_not_found' => 'Dier niet gevonden!'
    ],
];
?>
