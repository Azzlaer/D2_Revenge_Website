<?php
$lang = $_SESSION['lang'] ?? 'es';
$xml = simplexml_load_file("languages/$lang.xml");
?>
<header class="infernal-header">
    <div class="logo">
        <span>Diablo II: Revenge</span>
    </div>

    <input type="checkbox" id="menu-toggle" />
    <label for="menu-toggle" class="menu-icon">☰</label>

    <nav class="nav-menu">
        <ul>
            <li><a href="index.php">🏠 <?php echo $xml->menu->home; ?></a></li>
            <li><a href="about.php">⚔️ <?php echo $xml->menu->about; ?></a></li>
            <li><a href="downloads.php">💾 <?php echo $xml->menu->downloads; ?></a></li>
            <li><a href="donations.php">💰 <?php echo $xml->menu->donations; ?></a></li>
            <li><a href="tools.php">🛠️ <?php echo $xml->menu->tools; ?></a></li>
			<li><a href="pvp_rules.php">⚔️ <?php echo $xml->menu->pvp; ?></a></li>
			<li><a href="server_rules.php">📜 <?php echo $xml->menu->serverrules; ?></a></li>

        </ul>
    </nav>

    <div class="lang-selector">
        🌐
        <form action="set_language.php" method="post" id="langForm">
            <select name="lang" id="langSelect" onchange="document.getElementById('langForm').submit();">
                <option value="es" <?php if($lang == 'es') echo 'selected'; ?>>Español 🇪🇸</option>
                <option value="en" <?php if($lang == 'en') echo 'selected'; ?>>English 🇺🇸</option>
            </select>
        </form>
    </div>
</header>
