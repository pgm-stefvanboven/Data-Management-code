<div class="car">
    <h2><?= $car['brand']; ?> <?= $car['type']; ?></h2>
    <img src="./cars/<?= $car['image']; ?>" alt="<?= $car['brand']; ?> <?= $car['type']; ?>">
    <dl>
        <dt>Brandstof</dt>
        <dd><?= $car['fuel']; ?></dd>
        <dt>Prijs vanaf</dt>
        <dd>&euro; <?= $car['price_from']; ?></dd>
    </dl>
</div>