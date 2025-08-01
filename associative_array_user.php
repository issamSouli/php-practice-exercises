<!--Create an associative array called $user.
Add te following key-value pairs:
"name" → your name
"age" → your age
"email" → your email
"country" → your country
Use echo to print a sentence like:
👉 "My name is [name], I am [age] years old, I live in [country], and my email is [email]."-->

<?php

$user = [
    "name" => "issam",
    "age" => "29",
    "email" => "issamsoulimani25@gmail.com",
    "country" => "morroco",
];

echo "My name is {$user["name"]}, I am {$user["age"]} years old, i live in {$user["country"]}, and my email is : {$user["email"]}";

?>