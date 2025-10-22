<?php
$lang = $_SESSION['lang'] ?? 'es';
$xml = simplexml_load_file("languages/$lang.xml");
?>
<footer>
    <div class="footer-container">
        <div class="footer-flames"></div>

        <div class="footer-logo">
            👹 <span>Diablo II: Revenge</span> 🔥
        </div>

        <div class="footer-socials">
            <a href="https://www.d2revenge.com" target="_blank" title="Sitio Oficial">🌐</a>
            <a href="https://discord.com/invite/9x5VrBXKfH" target="_blank" title="Discord">💬</a>
            <a href="https://chat.whatsapp.com/InviGjYOlHk78wvPnFcYFO" target="_blank" title="WhatsApp">📱</a>
        </div>

        <p class="footer-text">
            © <?php echo date('Y'); ?> Diablo II: Revenge. <?php echo $xml->footer->rights; ?>
        </p>

        <p class="footer-credits">
            ⚔️ <?php echo $xml->footer->credits; ?> ⚔️
        </p>
    </div>
</footer>
