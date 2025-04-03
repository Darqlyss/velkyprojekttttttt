<?=$this->extend("layout/sablona");?>
<?=$this->section("content");?>


<div class="container mt-5">
    <h2 class="text-center">Seznam typů komponent</h2>
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
    </div>
</div>

<?=$this->endSection();?>
