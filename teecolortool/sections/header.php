<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/base.css">
    <title>Your Page Title</title>
</head>

<?php
$bg_colors = [
    'f2f2f2' => 'White',
    'f3eddf' => 'Natural',
    'e4d8c4' => 'Cream',
    'e4d8c4' => 'Sand',
    'b0a382' => 'Light Olive',
    '7a6a4b' => 'Military Green',
    '43aaab' => 'Teal',
    '397d6a' => 'Royal Pine',
    '1bab60' => 'Kelly Green',
    '162f2a' => 'Forest Green',
    'efbb7a' => 'Antique Gold',
    'eb9c1b' => 'Gold',
    'fec3cd' => 'Light Pink',
    '9c6e70' => 'Mauve',
    'bc1515' => 'Red',
    '980921' => 'Cardinal',
    '661f2a' => 'Maroon',
    'cadfe5' => 'Light Blue',
    '96acbb' => 'Stonewash Denim',
    '56cbd2' => 'Tahiti Blue',
    '1ba8dc' => 'Turquoise',
    '0a3987' => 'Royal Blue',
    '0d325b' => 'Cool Blue',
    '172d49' => 'Indigo',
    '081b3c' => 'Midnight Navy',
    'cfcdd3' => 'Heather Grey',
    'c0bebc' => 'Light Grey',
    '9d9a96' => 'Warm Grey',
    '494a4e' => 'Heavy Metal',
    '17171b' => 'Graphite',
    '111115' => 'Black'
];

$gr_colors = [
    'fedcac' => 'Apricot Cream',
    'd0dfcc' => 'Pale Sage',
    'ff6b81' => 'Blush Pink',
    'f49ac2' => 'Cotton Candy',
    'aad8d3' => 'Baby Blue',
    '69a297' => 'Seafoam Green',
    '7fdff5' => 'Sky Blue',
    '5aa469' => 'Mint Green',
    
    // Additional bright and fruity colors
    'ff6347' => 'Tomato',
    'ff7f50' => 'Coral',
    'ffa07a' => 'Light Salmon',
    'fa8072' => 'Salmon',
    'ff69b4' => 'Hot Pink',
    'ff1493' => 'Deep Pink',
    'ff00ff' => 'Magenta',
    'ff69b4' => 'Hot Pink',
    'ff1493' => 'Deep Pink',
    'ff00ff' => 'Magenta',
    'ff00ff' => 'Fuchsia',
    'ff69b4' => 'Bright Pink',
    'ff1493' => 'Vivid Pink',
    'ff1493' => 'Neon Pink',
    'ff1493' => 'Electric Pink',
    'ff69b4' => 'Bright Purple',
    'ff1493' => 'Vivid Purple',
    'ff1493' => 'Neon Purple',
    'ff1493' => 'Electric Purple',
    '00ffff' => 'Cyan',
    '00bfff' => 'Deep Sky Blue',
    '0000ff' => 'Blue',
    '0000cd' => 'Medium Blue',
    '1e90ff' => 'Dodger Blue',
    '87ceeb' => 'Sky Blue',
    '20b2aa' => 'Light Sea Green',
    
    // Various shades of gray
    'f5f5f5' => 'White Smoke',
    'e0e0e0' => 'Light Gray',
    'bdbdbd' => 'Silver',
    'a9a9a9' => 'Dark Gray',
    '808080' => 'Gray',
    '696969' => 'Dim Gray',
    '000000' => 'Black'
];

// Get a random key from the array
$randomBgColorKey = array_rand($bg_colors);
$randomBgColorValue = $bg_colors[$randomBgColorKey];

$randomGraphicColorKey = array_rand($gr_colors);
$randomGraphicColorValue = $gr_colors[$randomGraphicColorKey];
?>

<style>
    :root {
        --bgColor: #<?php echo $randomBgColorKey; ?>;
        --graphicColor: #<?php echo $randomGraphicColorKey; ?>;
    }
   #content_wrap {
        background-color: var(--bgColor);
    }
    #graphic_wrap svg path,
    #graphic_wrap svg polygon,
    #graphic_wrap svg rect {
        fill: var(--graphicColor);
        opacity: 1;
    }
</style>
<body>