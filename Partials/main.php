<div class="container py-5">
    <div class="row row-cols-5 g-4">

        <?php foreach ($products as $product) : ?>
            <div class="col">
                <div class="card h-100">
                    <img src="<?= $product->getImage() ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4><?= $product->getName() ?></h4>
                        <h6><?= $product->getCategory()->getName(); ?></h6>
                        <h5><?= $product->getPrice() ?> €</h5>

                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>