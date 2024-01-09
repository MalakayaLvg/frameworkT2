
<div class="container d-flex justify-content-center flex-column align-items-center">
    <h4><?= $sushi['name'] ?></h4>
    <h5>Weight : <?= $sushi['weight'] ?></h5>
    <h5>Lenght : <?= $sushi['length'] ?></h5>
    <a class="btn btn-primary" href="index.php">back</a>
</div>


<div class="comments">

    <?php foreach($comments as $comment): ?>

        <div class="comment border border-dark my-5">
            <p><strong><?= $comment['content'] ?></strong></p>
        </div>

    <?php endforeach; ?>

</div>

<form action="createComment.php" method="post">
    <textarea  class="form-control" cols="30" rows="3" name="content" placeholder="commenter ce sushi"></textarea>
    <input type="hidden" name="sushiId" value="<?= $sushi['id'] ?>">
    <button class="form-control btn btn-success">post</button>
</form>



