<?= $this->extend('layout/sablona') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <h2>Přehled komponent podle typu</h2>

    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" href="#prvni">#</a>
        </li>
        <?php foreach ($typy as $typ): ?>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#<?= $typ->url ?>">
                    <?= esc($typ->typKomponent) ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

    <div class="tab-content border border-top-0 p-3">
        <div class="tab-pane active" id="prvni">
            <p>Vyber kategorii výše.</p>
        </div>

        <?php foreach ($typy as $typ): ?>
            <div class="tab-pane" id="<?= $typ->url ?>">
                <ul>
                    <?php foreach ($typ->komponenty as $komponent): ?>
                        <li>
                            <a href="<?= base_url('index.php/komponenty/detail/' . $komponent->id) ?>">
                                <?= esc($komponent->nazev) ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?= $this->endSection() ?>
