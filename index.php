<?php

// This file is your starting point (= since it's the index)
// It will contain most of the logic, to prevent making a messy mix in the html

// This line makes PHP behave in a more strict way
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL); 

// We are going to use session variables so we need to enable sessions
session_start();

// Use this function when you need to need an overview of these variables

function pre_r( $array ) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

function whatIsHappening() {
    echo '<h2>$_GET</h2>';
    pre_r($_GET);
    echo '<h2>$_POST</h2>';
    pre_r($_POST);
    echo '<h2>$_COOKIE</h2>';
    pre_r($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    pre_r($_SESSION);
}
whatIsHappening();
// TODO: provide some products (you may overwrite the example)
$products = [
    ['name' => 'The Barny Beekeeper Plushie (*only knives included)', 'price' => 39.99, 'image' => 'https://cdn.shopify.com/s/files/1/0617/2305/0205/products/IMG_6952_1280x1280_crop_center.jpg.webp?v=1644607889'],
    ['name' => 'The Barny Beekeeper Plushie Covid PROOF', 'price' => 50.99, 'image' => 'https://cdn.shopify.com/s/files/1/0617/2305/0205/products/IMG_6945_1280x1280_crop_center.jpg.webp?v=1644607872'],
    ['name' => 'The Barny Beekeeper Plushie Deluxe', 'price' => 60.99, 'image' => 'https://cdn.shopify.com/s/files/1/0617/2305/0205/products/IMG_6938_1280x1280_crop_center.jpg.webp?v=1644607867'],
    [ 'name' => 'Murlock Pluche World Of Warcraft Azeroth', 'price' => 68.99, 'image'=> 'https://i.etsystatic.com/17956349/r/il/c2d612/3256107595/il_1588xN.3256107595_6uj9.jpg'],
    [ 'name' => 'Among US Plushie Red', 'price' => 19.97, 'image'=> 'https://media.s-bol.com/JN5J3NkO4682/1200x1200.jpg'],    
    [ 'name' => 'Among US Plushie Deluxe', 'price' => 20.00, 'image'=> 'https://media.s-bol.com/mYJAJjlKqkmG/1200x1200.jpg'],
    [ 'name' => 'Sleeping Snorlax', 'price' => 59.90, 'image'=> 'https://cdn.webshopapp.com/shops/331217/files/391347163/1200x930x3/boti-europe-bv-pokemon-sleeping-snorlax-18-inch-pl.jpg'],
    [ 'name' => 'Winking Pikachu', 'price' => 18.00, 'image'=> 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcSOIWAWv_l865UwVApY2duwE65K0dNmdxzkw9eGyr66JzkzK7bTzTBukrhlBjImbTSr9ny54iRnB3s&usqp=CAc'],
    [ 'name' => 'League of Legend Plush Astronaut Teemo', 'price' => 34.95, 'image'=> 'https://media.s-bol.com/OYyxBxpWMQzQ/550x664.jpg'],
    [ 'name' => 'League of Legend Plush Rammus Poro', 'price' => 34.95, 'image'=> 'https://media.s-bol.com/xkGRJ4lXpzGP/550x546.jpg'],
];

$totalValue = 0;

function validate()
{
    // This function will send a list of invalid fields back
    return [];
}

function handleForm()
{
    // TODO: form related tasks (step 1)

    // Validation (step 2)
    $invalidFields = validate();
    if (!empty($invalidFields)) {
        // TODO: handle errors
    } else {
        // TODO: handle successful submission
    }
}

// TODO: replace this if by an actual check
$formSubmitted = false;
if ($formSubmitted) {
    handleForm();
}

require 'form-view.php';