document.getElementById('langSelect').addEventListener('change', function() {
  const lang = this.value;
  fetch('set_language.php', {
    method: 'POST',
    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
    body: 'lang=' + lang
  }).then(() => {
    location.reload();
  });
});
