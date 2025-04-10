<?=$this->extend("layout/sablona");?>
<?=$this->section("content");?>


<div class="container mt-5">
    <h2 class="text-center">Seznam typů komponent</h2>
    <a href="<?= base_url('index.php/taby')?>" class="btn btn-primary btn-lg">Taby</a>
    <div class="row">
        <?php foreach ($komponenty as $komponent): ?>
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">
                        <?= anchor('komponenty/' . $komponent->url, esc($komponent->typKomponent), ['class' => 'stretched-link text-decoration-none ']) ?>

                        </h5>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <div class="text-center mt-4">
            <a href="<?= base_url("index.php/kategorie/pridat") ?>">Přidat novou kategorii</a>
        </div>
    </div>
</div>

<?=$this->endSection();?>
