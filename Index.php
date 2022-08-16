<?php

// Challenge 1 - Traffic light system

    echo "Challenge 1 - Traffic light system". "<br>";

$trafficlight = "green";

switch ($trafficlight) {
    case 'red':
        echo "stop";
        break;
    case 'yellow':
        echo "slow down";
        break;
    case 'green':
        echo "go";
        break;
}

echo "<br>";
echo "<br>";

// Challenge 2 - Amusement park

    echo "Challenge 2 - Amusement park". "<br>";

$age = "35";

if($age <2) {
        echo "Free";
    } elseif ($age>=2 && $age<=12) {
        echo "Free";
    } elseif ($age>=2 && $age<=12) {
        echo "Pay R20";
    } elseif ($age>=13 && $age<=17) {
        echo "Pay R30";
    } elseif ($age>=18 && $age<=25) {
        echo "Pay R40";
    } elseif ($age>=26 && $age<=64) {
        echo "Pay R60";
    } elseif ($age>=65) {
        echo "Pay R30";    
}

echo "<br>";
echo "<br>";

// Challenge 3 - Personalised greeting

    echo "Challenge 3 - Personalised greeting". "<br>";

$name = "Palesa";

switch ($name) {
    case 'Lelo':
        echo "Hey Lelo, it's been a while since we last spoke.";
        break;
    case 'Mbali':
        echo "Good day Mbali, so glad to see you again!";
        break;
    case 'Palesa':
        echo "Palesa, your affirmation for the day: Be kind to yourself.";
        break;
    case 'Nini':
        echo "Hello Nini, let's get to work.";
        break;
    case 'Paballo':
        echo "Paballo you have 11 days to complete the form.";
        break;
    default:
        echo "Unknown user";
        break;
}
?>