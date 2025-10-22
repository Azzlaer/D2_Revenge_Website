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
    <title>Reglas PvP - Diablo II: Revenge</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include('header.php'); ?>

    <main class="content rules">
        <section class="rules-section">
            <h1>⚔️ <?php echo $xml->rules->title; ?> ⚔️</h1>
            <p class="intro"><?php echo nl2br($xml->rules->intro); ?></p>

<article class="rules-block">
    <h2>⚔️ <?php echo $xml->rules->classes->title; ?> ⚔️</h2>
    <div class="class-container">
        <!-- Hechicera -->
        <div class="class-card sorceress">
            <h3>🧙‍♀️ Hechicera</h3>
            <ul>
                <li>RP: 12</li>
                <li>Prohibido usar Mana Shield</li>
                <li>Prohibido Combustion</li>
            </ul>
        </div>

        <!-- Paladín -->
        <div class="class-card paladin">
            <h3>🛡️ Paladín</h3>
            <ul>
                <li>Auras Prohibidas: Plegaria, Meditación, Purificación, Ola de Frío, Vigor y Resistencias</li>
                <li>Prohibido Holy Bolt</li>
                <li>Hammers: Máximo DR 18</li>
                <li>Smiths: Vigor permitido</li>
            </ul>
        </div>

        <!-- Bárbaro -->
        <div class="class-card barbarian">
            <h3>💪 Bárbaro</h3>
            <ul>
                <li>RP: 35</li>
                <li>OW: 75</li>
                <li>Todos los Gritos Permitidos</li>
            </ul>
        </div>

        <!-- Nigromante -->
        <div class="class-card necromancer">
            <h3>💀 Nigromante</h3>
            <ul>
                <li>RP con Teleport: 0</li>
                <li>RP sin Teleport: 27</li>
                <li>Prohibido Prisión Ósea</li>
                <li>Solo Maldición: Reducción de Resistencias</li>
                <li>Único Gólem: Arcilla</li>
            </ul>
        </div>

        <!-- Asesina -->
        <div class="class-card assassin">
            <h3>🗡️ Asesina</h3>
            <ul>
                <li>RP con Teleport: 0</li>
                <li>RP sin Teleport: 27</li>
                <li>OpenWounds: 95%</li>
            </ul>
        </div>

        <!-- Druida -->
        <div class="class-card druid">
            <h3>🐺 Druida</h3>
            <ul>
                <li>RP con Teleport: 0</li>
                <li>RP sin Teleport: 35</li>
                <li>Invocaciones: 1 Espíritu y 1 Oso</li>
                <li>Escudo Elemental: 0% Absorción</li>
            </ul>
        </div>

        <!-- Amazona -->
        <div class="class-card amazon">
            <h3>🏹 Amazona</h3>
            <ul>
                <li>Repostar: 27</li>
                <li>Prohibido Misiles Lentos</li>
                <li>Señuelo y Valkiria Permitidos</li>
            </ul>
        </div>
    </div>
</article>

        </section>
    </main>

    <?php include('footer.php'); ?>
</body>
</html>
