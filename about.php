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
    <title><?php echo $xml->about->title; ?> | Diablo II: Revenge</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include('header.php'); ?>


        <!-- Capa oscura sobre el video -->
        <div class="video-overlay"></div>

        <!-- Contenido principal -->
        <section class="about-section">
            <div class="about-container">
                <h2>🔥 <?php echo $xml->about->title; ?> 🔥</h2>

                <div class="about-description">
                    <p><?php echo nl2br($xml->about->description); ?></p>
                </div>

                <div class="divider">
                    <span>☠ <?php echo $xml->about->notes_title; ?> ☠</span>
                </div>

                <div class="server-info">
                    <ul>
                        <li>💥 <?php echo $xml->about->multi_host; ?></li>
                        <li>❄ <?php echo $xml->about->drop_exp; ?></li>
                        <li>🕸 <?php echo $xml->about->terror_zones; ?></li>
                        <li>🏆 <?php echo $xml->about->events; ?></li>
                        <li>🏅 <?php echo $xml->about->tournaments; ?></li>
                        <li>💫 <?php echo $xml->about->spells; ?></li>
                        <li>🎲 <?php echo $xml->about->runewords; ?></li>
                        <li>♦ <?php echo $xml->about->corrupted_items; ?></li>
                        <li>🪙 <?php echo $xml->about->balance; ?></li>
                        <li>🥊 <?php echo $xml->about->pvp; ?></li>
                        <li>💎 <?php echo $xml->about->autopick; ?></li>
                        <li>🔹 <?php echo $xml->about->charmzone; ?></li>
                        <li>🪩 <?php echo $xml->about->stash; ?></li>
                    </ul>
                </div>

                <div class="divider">
                    <span>🔗 Conéctate con la comunidad</span>
                </div>

                <div class="links">
                    <p>🌐 <a href="https://www.d2revenge.com" target="_blank">www.d2revenge.com</a></p>
                    <p>💬 <a href="https://chat.whatsapp.com/InviGjYOlHk78wvPnFcYFO" target="_blank">WhatsApp</a></p>
                    <p>🎧 <a href="https://discord.com/invite/9x5VrBXKfH" target="_blank">Discord</a></p>
                </div>
            </div>
        </section>
    </main>

    <?php include('footer.php'); ?>
</body>
</html>
