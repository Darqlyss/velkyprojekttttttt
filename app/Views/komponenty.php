<?=$this->extend("layout/sablona");?>
<?=$this->section("content");?>
<div class="container mt-4">
    <h1 class="text-center mb-4">Seznam komponent typu: <?= esc($typ->typKomponent) ?></h1>
    <div class="row">
        <?php foreach ($komponenty as $komponent): ?>
            <div class="col-md-4 d-flex">
                <div class="card mb-4 flex-grow-1">
                    <div class="card-body d-flex flex-column">
                        <?= anchor('komponenty/detail/' . $komponent->id, 
                            '<h5 class="card-title">' . esc($komponent->nazev) . '</h5>',
                            ['class' => 'stretched-link text-decoration-none']
                        ) ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
            <div class="d-flex justify-content-center">
                <ul class="pagination">
                    <?= $pager->links() ?>

                </ul>

        </div>
    </div>

<?=$this->endSection();?>
