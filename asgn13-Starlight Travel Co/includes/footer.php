<footer>
<div>
<h3>Starlight Travel Co.</h3>
<p>123 Oceanview Drive | Miami, FL</p>
<p>(555) 123-4567 | contact@starlighttravel.com</p>

<?php
$taglines = [
  "Explore Beyond the Horizon",
  "Your Journey, Our Passion",
  "Adventure Starts Here",
  "Travel Smarter, Travel Better",
  "Discover the World in Style",
  "Where Every Trip Becomes a Story"
];

$randomTagline = $taglines[array_rand($taglines)];
?>

<p><em><?= $randomTagline ?></em></p>

</div>
<p>&copy; 2026 Starlight Travel Co.</p>
</footer>
</body></html>