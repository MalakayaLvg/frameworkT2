
<?php foreach ($pizzas as $pizza) : ?>

    <div>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h4 class="card-title"><?= $pizza['name'] ?> </h4>
                <h5 class="card-text">type: <?= $pizza['size'] ?></h5>

                <div>
                    <a href="sushi.php?id=<?= $pizza['id'] ?>" class="btn btn-primary">Show more</a>
                    <a href="editSushi.php?id=<?= $pizza['id'] ?>" class="btn btn-warning">Edit</a>
                    <a href="deleteSushi.php?id=<?= $pizza['id'] ?>" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    </div>

<?php endforeach; ?>

<a href="createSushi.php" class="btn btn-primary my-5">+ New</a>