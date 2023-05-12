<?php
include "classes/dbh.classes.php";
include "classes/produkt.classes.php";
include "classes/produkt-contr.classes.php";
include "classes/produkt-view.classes.php";
include "inc/funktionen.inc.php";
$produktView = new ProduktInfoView();
$produktData = $produktView->fetchAllHaushaltProdukts();
?>
<section class="container justify-content-center row m-auto p-3">
    <?php
    foreach ($produktData as $produkt) {
    ?>
        <div class="col-md-4 ">
            <div class="card mb-4 shadow-sm p-1">
                <img class="img-thumbnail product-img" src="" alt="<?php echo $produkt['produkt_titel'] ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $produkt['produkt_titel'] ?></h5>
                    <p class="card-text"><?php echo $produkt['produkt_beschreibung'] ?></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="price"><?php echo konvertiereCentInEuro($produkt['produkt_preis_cent']) ?>€</span>
                        <button type="button" class="btn btn-sm btn-outline-secondary">In den Warenkorb</button>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</section>