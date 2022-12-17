<header class="p-4">
    <i class="fa-brands fa-spotify text-white fa-3x"></i>
</header>

<div class="container">
    <div class="row pb-4">
        <?php foreach ($database as $elem) { ?>
            <div class="col-4 g-5 text-white">
                <div class="card" style="width: 20rem;">
                    <img src="<?php echo $elem['poster'] ?>" class="card-img-top" alt="<?php echo $elem['title'] ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $elem['title'] ?></h5>
                        <div class="card-text"><?php echo $elem['author'] ?></div>
                        <div class="card-text"><?php echo $elem['year'] ?></div>
                        <div class="card-text"><?php echo $elem['genre'] ?></div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>