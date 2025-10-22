<?php
session_start();
$lang = $_SESSION['lang'] ?? 'es';
$xml = simplexml_load_file("languages/$lang.xml");
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donaciones - Diablo II: Revenge</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include('header.php'); ?>

    <main class="content donations">
        <section class="donations-section">
            <h1>💰 <?php echo $xml->donations->title; ?> 💀</h1>
            <p class="intro"><?php echo nl2br($xml->donations->intro); ?></p>

            <div class="donation-items">
                <ul>
                    <li>💫 <?php echo $xml->donations->items->rename; ?></li>
                    <li>🔥 <?php echo $xml->donations->items->characters; ?></li>
                    <li>🧙 <?php echo $xml->donations->items->spells; ?></li>
                    <li>💎 <?php echo $xml->donations->items->runes; ?></li>
                    <li>🗺️ <?php echo $xml->donations->items->tickets; ?></li>
                    <li>⚗️ <?php echo $xml->donations->items->craft; ?></li>
                    <li>🔑 <?php echo $xml->donations->items->keys; ?></li>
                </ul>
            </div>

            <div class="contact">
                <p><?php echo $xml->donations->contact_text; ?></p>
                <a href="<?php echo $xml->donations->contact_link; ?>" target="_blank" class="btn-hellfire">💬 WhatsApp</a>
            </div>
        </section>
    </main>

    <?php include('footer.php'); ?>
    <script src="assets/js/main.js"></script>
</body>
</html>
