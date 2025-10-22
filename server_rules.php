<?php
session_start();
$lang = $_SESSION['lang'] ?? 'es';
$xml = simplexml_load_file("languages/$lang.xml");
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
  <meta charset="UTF-8">
  <title>🔥 Reglas del Servidor | Diablo II: Revenge 🔥</title>
  <!-- NO cambiar el style.css principal -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- Añadimos el nuevo CSS solo para esta página -->
  <link rel="stylesheet" href="assets/css/server_rules_style.css">
</head>
<body>

  <?php include('header.php'); ?>

  <main class="server-rules-wrapper">
    <section class="infernal-rules">
      <div class="infernal-rules-overlay"></div>

      <div class="infernal-rules-content">
        <h1>🔥 <?php echo $xml->serverrules->title; ?> 🔥</h1>
        <p class="infernal-intro"><?php echo nl2br($xml->serverrules->intro); ?></p>

        <div class="infernal-rules-grid">
          <?php
          $rules = explode("👹", nl2br($xml->serverrules->text));
          foreach ($rules as $r) {
            $r = trim($r);
            if ($r) {
              echo "<div class='infernal-rule-card'><span>👹</span><p>$r</p></div>";
            }
          }
          ?>
        </div>

        <p class="infernal-warning">⚠️ <?php echo $xml->serverrules->warning; ?></p>
      </div>
    </section>
  </main>

  <?php include('footer.php'); ?>
</body>
</html>
