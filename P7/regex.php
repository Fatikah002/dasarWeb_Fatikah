<?php 
// Langkah 2
// $pattern = '/[a-z]/'; //Cocokkan huruf kecil.
// $text = 'This is a Sample Text.';

// if (preg_match($pattern, $text)) {
//     echo "Huruf kecil ditemukan";
// } else {
//     echo "Tidak ada huruf kecil";
// }

//Langkah 6
// $pattern = '/[0-9]/'; //Cocokkan satu atau lebih digit.
// $text = 'There are 123 apples.';
// if (preg_match($pattern, $text, $matches)) {
//     echo "Cocokkan: " . $matches[0];
// } else {
//     echo "Tidak ada yang cocok!";
// }

//Langkah 10
// $pattern = '/apple/';
// $replacement = 'banana';
// $text = "I like apple pie.";
// $new_text = preg_replace($pattern, $replacement, $text);
// echo $new_text; //Output: "I like banana pie."

//Langkah14
$pattern = '/go{1,3}d/' ; // Cocokkan "god", "good", "gooood", dll.
$text = 'is gooood.';
if (preg_match($pattern, $text, $matches)){
    echo "Cocokkan: " . $matches[0];
} else{
    echo "Tidak ada yang cocok!";
}
?>