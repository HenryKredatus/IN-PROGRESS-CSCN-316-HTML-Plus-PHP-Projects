<?php $pageTitle="Destinations"; include 'includes/header.php'; ?>

<section class="hero">
  <h1>Destinations</h1>
</section>

<section class="section">
  <div class="grid">

    <?php
    $destinations = [
      [
        "name" => "Paris",
        "image" => "images/Paris.jpg",
        "alt" => "Paris Sunset",
        "desc" => "Experience romance, world-class cuisine, and iconic landmarks in the heart of France."
      ],
      [
        "name" => "Tokyo",
        "image" => "images/Tokyo.jpg",
        "alt" => "Tokyo Skyline",
        "desc" => "Dive into a vibrant mix of futuristic technology, culture, and unforgettable food."
      ],
      [
        "name" => "Maldives",
        "image" => "images/Maldives.jpg",
        "alt" => "Maldives",
        "desc" => "Relax in luxury with crystal-clear waters, private villas, and serene island beauty."
      ],
      [
        "name" => "African Safari",
        "image" => "images/Safari.jpg",
        "alt" => "African Safari",
        "desc" => "Witness incredible wildlife and breathtaking landscapes on a once-in-a-lifetime safari."
      ]
    ];

    foreach($destinations as $d){
      echo "
      <div class='card'>
        <img src='{$d['image']}' alt='{$d['alt']}' class='card-img'>
        <h3>{$d['name']}</h3>
        <p>{$d['desc']}</p>
      </div>
      ";
    }
    ?>

  </div>
</section>

<?php include 'includes/footer.php'; ?>