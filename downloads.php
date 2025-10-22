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
  <title><?php echo $xml->downloads->title; ?> | Diablo II: Revenge</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <?php include('header.php'); ?>

  <main class="content no-video">
    <section class="downloads-section">
      <div class="downloads-container">
        <h2>💀 <?php echo $xml->downloads->title; ?> 💀</h2>
        <p class="intro"><?php echo $xml->downloads->intro; ?></p>

        <table class="downloads-table">
          <thead>
            <tr>
              <th>🔥 <?php echo $xml->downloads->table->name; ?></th>
              <th>🪓 <?php echo $xml->downloads->table->description; ?></th>
              <th>⚔️ <?php echo $xml->downloads->table->link; ?></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($xml->downloads->items->file as $file): ?>
            <tr>
              <td><?php echo $file->name; ?></td>
              <td><?php echo $file->desc; ?></td>
              <td><a href="<?php echo $file->url; ?>" target="_blank">⬇️ <?php echo $xml->downloads->table->download; ?></a></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </section>
  </main>

  <?php include('footer.php'); ?>
</body>
</html>
