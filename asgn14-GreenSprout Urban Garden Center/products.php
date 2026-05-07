<?php
$pageTitle = "Products";
include 'includes/header.php';

$categories = [

    "Plants" => [
        [
            "name" => "Monstera Deliciosa",
            "image" => "assets/images/Monstera.jpg",
            "alt" => "Monstera plant with large split tropical leaves",
            "description" => "A lush tropical houseplant known for its split leaves and easy indoor care.",
            "stock" => 12
        ],
        [
            "name" => "Lavender Herb Pot",
            "image" => "assets/images/Lavender.jpg",
            "alt" => "Lavender herb plant in a decorative pot",
            "description" => "Fragrant lavender ideal for windowsills, balconies, and pollinator gardens.",
            "stock" => 8
        ],
        [
            "name" => "Mini Succulent Collection",
            "image" => "assets/images/Succulents.jpg",
            "alt" => "Collection of assorted colorful succulents",
            "description" => "A low-maintenance collection of colorful succulents perfect for apartments.",
            "stock" => 15
        ]
    ],

    "Tools" => [
        [
            "name" => "Eco Watering Can",
            "image" => "assets/images/Watering Can.png",
            "alt" => "Green eco-friendly watering can for indoor plants",
            "description" => "Lightweight recycled-material watering can designed for indoor plants.",
            "stock" => 4
        ],
        [
            "name" => "Garden Hand Trowel",
            "image" => "assets/images/Trowel.jpg",
            "alt" => "Metal garden hand trowel with wooden handle",
            "description" => "Durable stainless steel trowel ideal for planting and repotting.",
            "stock" => 10
        ],
        [
            "name" => "Bamboo Gardening Gloves",
            "image" => "assets/images/Gloves.jpeg",
            "alt" => "Pair of bamboo gardening gloves",
            "description" => "Comfortable breathable gloves for eco-conscious gardening projects.",
            "stock" => 6
        ]
    ],

    "Soil Mixes" => [
        [
            "name" => "Organic Potting Soil",
            "image" => "assets/images/Potting Soil.jpeg",
            "alt" => "Bag of organic potting soil mix",
            "description" => "Nutrient-rich soil blend formulated for indoor and container plants.",
            "stock" => 7
        ],
        [
            "name" => "Succulent Soil Blend",
            "image" => "assets/images/Succulent Soil.jpg",
            "alt" => "Fast-draining succulent soil blend",
            "description" => "Fast-draining mix created specifically for succulents and cacti.",
            "stock" => 9
        ],
        [
            "name" => "Compost Enriched Garden Mix",
            "image" => "assets/images/Compost.jpg",
            "alt" => "Organic compost enriched garden soil mix",
            "description" => "Organic compost-enhanced soil for healthier roots and stronger growth.",
            "stock" => 5
        ]
    ]
];
?>

<section class="container">

    <div class="section-title">
        <h2>Garden Products & Supplies</h2>

        <p>
            Explore eco-friendly gardening essentials designed for 
            urban homes, patios, balconies, and indoor spaces.
        </p>
    </div>

    <?php foreach($categories as $category => $products): ?>

        <div class="product-category">

            <h2 class="category-heading">
                <?php echo $category; ?>
            </h2>

            <div class="grid">

                <?php foreach($products as $item): ?>

                    <div class="card">

                        <img 
                            src="<?php echo $item['image']; ?>" 
                            alt="<?php echo $item['alt']; ?>"
                        >

                        <div class="card-content">

                            <h3>
                                <?php echo $item['name']; ?>
                            </h3>

                            <p>
                                <?php echo $item['description']; ?>
                            </p>

                            <div class="stock-badge">
                                Only <?php echo $item['stock']; ?> left in stock!
                            </div>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>

        </div>

    <?php endforeach; ?>

    <div class="feature-box">

        <h3>
            Sustainable Gardening for Every Space
        </h3>

        <p>
            Our products are carefully selected to support sustainable,
            beginner-friendly gardening in apartments, patios, and compact
            urban environments. Whether you're growing herbs indoors,
            designing a balcony garden, or starting your first indoor
            plant collection, GreenSprout has everything you need.
        </p>

    </div>

</section>

<?php include 'includes/footer.php'; ?>