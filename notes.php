<?php
$noteDir = __DIR__ . '/notes';
$notes = glob($noteDir . '/*.txt');
sort($notes);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Notes</title>
<style>
body {
  margin: 0;
  background: #111;
  color: #e0e0e0;
  font-family: 'Courier New', Courier, monospace;
  display: flex;
  justify-content: center;
  padding: 60px 20px;
}
.notes {
  max-width: 600px;
  width: 100%;
}
.note {
  margin-bottom: 3em;
}
.note time {
  display: block;
  font-size: 0.75em;
  color: #666;
  margin-bottom: 0.4em;
}
.note p {
  margin: 0;
  line-height: 1.6;
  white-space: pre-wrap;
}
</style>
</head>
<body>
<div class="notes">
<?php foreach ($notes as $file): ?>
  <div class="note">
    <p><?= htmlspecialchars(file_get_contents($file)) ?></p>
  </div>
<?php endforeach; ?>
</div>
</body>
</html>
