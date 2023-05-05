<?php
// Array mit Produktinformationen
$products = array(
    array(
        'name' => 'Produkt 1',
        'description' => 'Beschreibung des Produkts 1',
        'price' => '10.99',
        'image' => 'img/produkt1.jpg'
    ),
    array(
        'name' => 'Produkt 2',
        'description' => 'Beschreibung des Produkts 2',
        'price' => '19.99',
        'image' => 'img/produkt2.jpg'
    ),
    array(
        'name' => 'Produkt 3',
        'description' => 'Beschreibung des Produkts 1',
        'price' => '10.99',
        'image' => 'img/produkt1.jpg'
    ),
    array(
        'name' => 'Produkt 4',
        'description' => 'Beschreibung des Produkts 2',
        'price' => '19.99',
        'image' => 'img/produkt2.jpg'
    ),
    array(
        'name' => 'Produkt 5',
        'description' => 'Beschreibung des Produkts 1',
        'price' => '10.99',
        'image' => 'img/produkt1.jpg'
    ),
    array(
        'name' => 'Produkt 6',
        'description' => 'Beschreibung des Produkts 2',
        'price' => '19.99',
        'image' => 'img/produkt2.jpg'
    ),
    array(
        'name' => 'Produkt 7',
        'description' => 'Beschreibung des Produkts 1',
        'price' => '10.99',
        'image' => 'img/produkt1.jpg'
    ),
    array(
        'name' => 'Produkt 8',
        'description' => 'Beschreibung des Produkts 2',
        'price' => '19.99',
        'image' => 'img/produkt2.jpg'
    ),
    array(
        'name' => 'Produkt 9',
        'description' => 'Beschreibung des Produkts 1',
        'price' => '10.99',
        'image' => 'img/produkt1.jpg'
    ),
    array(
        'name' => 'Produkt 10',
        'description' => 'Beschreibung des Produkts 2',
        'price' => '19.99',
        'image' => 'img/produkt2.jpg'
    ),
    // weitere Produkte ...
);

// Loop über die Produkte und Ausgabe des HTML-Codes
?>
<section class="container justify-content-center row m-auto p-3">
    <?php
    foreach ($products as $product) {
    ?>
        <div class="col-md-4 ">
            <div class="card mb-4 shadow-sm p-1">
                <img class="img-thumbnail product-img" src="<?php echo $product['image'] ?>" alt="<?php echo $product['name'] ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $product['name'] ?></h5>
                    <p class="card-text"><?php echo $product['description'] ?></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="price"><?php echo $product['price'] ?>€</span>
                        <button type="button" class="btn btn-sm btn-outline-secondary">In den Warenkorb</button>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</section>