
<?php foreach ($sushis as $sushi) : ?>

    <div>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h4 class="card-title"><?= $sushi['name'] ?> </h4>
                <h5 class="card-text">type: <?= $sushi['type'] ?></h5>
                <h5 class="card-text">fish: <?= $sushi['fish'] ?></h5>
                <div>
                    <a href="sushi.php?id=<?= $sushi['id'] ?>" class="btn btn-primary">Show more</a>
                    <a href="editSushi.php?id=<?= $sushi['id'] ?>" class="btn btn-warning">Edit</a>
                    <a href="deleteSushi.php?id=<?= $sushi['id'] ?>" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    </div>

<?php endforeach; ?>

<a href="createSushi.php" class="btn btn-primary my-5">+ New</a>