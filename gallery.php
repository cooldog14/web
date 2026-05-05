<?php
$imageDir = __DIR__ . '/uploads';
$images = glob($imageDir . '/*.{jpg,jpeg,png,gif,webp}', GLOB_BRACE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Gallery</title>
<style>
body { margin: 0; background: #111; }
.grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
  gap: 4px;
  padding: 4px;
}
.grid img {
  width: 100%;
  aspect-ratio: 1;
  object-fit: cover;
  display: block;
}
</style>
</head>
<body>
<div class="grid">
<?php foreach ($images as $img): ?>
  <img src="uploads/<?= htmlspecialchars(basename($img)) ?>" alt="">
<?php endforeach; ?>
</div>
</body>
</html>

/* ill tell my kid this is instagram */