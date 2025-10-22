<?php
session_start();
header("Cache-Control: no-cache, must-revalidate");
$lang = $_SESSION['lang'] ?? 'es';
$xml = simplexml_load_file("languages/$lang.xml");
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diablo II: Revenge</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <?php include('header.php'); ?>

    <!-- 🎥 Fondo de video infernal -->
    <div class="video-background">
        <video autoplay muted loop playsinline id="bgVideo">
            <source src="assets/video/diablo_bg.mp4" type="video/mp4">
            <source src="assets/video/diablo_bg.webm" type="video/webm">
            Tu navegador no soporta videos HTML5.
        </video>
    </div>

    <!-- 🕸️ Contenido principal -->
    <main class="home">
        <section class="hero">
            <div class="hero-content">
                <h1 class="infernal-title"><?php echo $xml->content->welcome; ?></h1>

                <div class="media-card">
                    <div class="flame-border">
                        <!-- 🔥 Facebook Embed -->
                        <div class="media-frame">
                            <iframe 
                                src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FD2Revenge%2F&tabs=timeline&width=500&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                                width="500" height="500"
                                style="border:none;overflow:hidden"
                                scrolling="no"
                                frameborder="0"
                                allowfullscreen="true"
                                allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
                            </iframe>
                        </div>

                        <!-- ⚔️ YouTube Embed -->
                        <div class="media-frame">
                            <iframe width="560" height="315"
                                src="https://www.youtube.com/embed/-LmTqRBLoKg?autoplay=1&mute=1&controls=1&loop=1&playlist=-LmTqRBLoKg"
                                title="Diablo II: Revenge Trailer"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin"
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>

                <div class="welcome-text">
                    <p><?php echo $xml->content->description; ?></p>
                </div>
            </div>
        </section>
    </main>


    <script src="assets/js/main.js"></script>
</body>
</html>
