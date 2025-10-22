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
    <title><?php echo $xml->menu->tools; ?> - Diablo II: Revenge</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include('header.php'); ?>

    <main class="content tools">
        <section class="tools-section">
            <h1>🛠️ <?php echo $xml->tools->title; ?> 🔥</h1>
            <p class="intro"><?php echo nl2br($xml->tools->intro); ?></p>

            <table class="tools-table">
                <thead>
                    <tr>
                        <th>🔮 <?php echo $xml->tools->table->name; ?></th>
                        <th>🌐 <?php echo $xml->tools->table->link; ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($xml->tools->items->tool as $tool): ?>
                        <tr>
                            <td><?php echo $tool->name; ?></td>
                            <td><a href="<?php echo $tool->url; ?>" target="_blank"><?php echo $tool->url; ?></a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </main>

    <?php include('footer.php'); ?>
    <script src="assets/js/main.js"></script>
</body>
</html>
