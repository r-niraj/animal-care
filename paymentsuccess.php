<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks for supporting Animal Care</title>
    <link rel="stylesheet" href="css/donate.css">
</head>

<body>
    <div class="thanksContent">
        <h2>Thanks for supporting Animal Care</h2>
        <p>
            <?php
            if (isset ($_GET['name'])) {
                $name = $_GET['name'];
                echo "Dear $name";
            } ?>,
            <br>
            <br>
            I hope this message finds you well. On behalf of everyone at Animal Care, I want to express our deepest
            gratitude for your incredibly generous donation. Your support means the world to us and to the animals we
            strive
            to protect and care for.
            <br>
            <br>
            Thanks to your contribution, we will be able to continue our vital work in rescuing, rehabilitating, and
            providing a safe haven for animals in need.
            <br>
            <br>
            Your kindness and compassion have made a real difference in the lives of these voiceless creatures, and we
            are
            truly grateful for your commitment to our cause.
            <br>
            <br>
            We believe that every animal deserves love, care, and respect, and your support helps us make that belief a
            reality. Your donation will directly impact the well-being of countless animals, and we cannot thank you
            enough
            for standing with us in our mission to create a better world for them.
            <br>
            <br>
            Please know that your generosity has not gone unnoticed and that your support is deeply appreciated. We are
            honored to have you as a valued supporter of our organization, and we look forward to keeping you updated on
            the
            impact of your donation.
            <br>
            <br>
            Once again, thank you from the bottom of our hearts for your kindness and generosity. Together, we are
            making a
            difference in the lives of animals in need.
            <br>
            With heartfelt thanks, <br /><br>
            Animal Care Team
        </p>
            <br>
            <br>
        <p style="text-align:center;">
            <a href="index.php">Go to homepage</a>
        </p>
    </div>
</body>

</html>