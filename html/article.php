<?php
require '../inc/header.php';
require '../bdd.php';
?>

        <div class="content">
            <h1><?= $data['title']; ?></h1>
            <div class="articles">

            <article class="post single-post">
                <div class="badge badge-news">news</div>
                  <div class="data">
                        <img class="data-icon" src="<?= $data['image']; ?>" alt="John Marchill">
                        <strong class="data-author"><?= $data['author']; ?></strong>
                        <span class="data-date"><?= $data['publication']; ?></span>
                    </div>
                    <p><?= $data['text']; ?></p>
                    <a href="index.php">Back home</a>
            </article>
        </div>
    </div>
    
</body>
</html>