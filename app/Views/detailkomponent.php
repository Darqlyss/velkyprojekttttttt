<?= $this->extend("layout/sablona") ?>
<?= $this->section("content") ?>

<div class="container mt-4">

    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= base_url('/') ?>">
                    <i class="bi bi-house-door-fill"></i> Domů
                </a>
            </li>
            <li class="breadcrumb-item">
                <a href="<?= base_url('index.php/komponenty/' . esc($komponent->url)) ?>">
                    <?= esc($komponent->typKomponent) ?>
                </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                <?= esc($komponent->nazev) ?>
            </li>
        </ol>
    </nav>

    <h1 class="text-center">Detail Komponenty: <?= esc($komponent->nazev) ?></h1>


    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <div class="card shadow-lg rounded-4 overflow-hidden">


                <div style="height: 100; overflow: hidden;">
                    <img src="<?= base_url('obrazky/komponenty/' . esc($komponent->pic)) ?>"
                         class="w-100 h-100" style="object-fit: cover;" alt="<?= esc($komponent->nazev) ?>">
                </div>


                <div class="card-body text-center">
                    <h4 class="card-title mb-3"><?= esc($komponent->nazev) ?></h4>
                    <p><strong>Výrobce:</strong> <?= esc($komponent->vyrobce) ?></p>
                    <p><strong>Typ:</strong> <?= esc($komponent->typKomponent) ?></p>

                    <a href="<?= esc($komponent->odkaz) ?>" target="_blank" class="btn btn-primary mt-3">
                        Zobrazit na Alze
                    </a>
                </div>
            </div>
        </div>
    </div>


    <h3 class="mt-4">Technické parametry</h3>
    <table class="table table-bordered">
        <tbody>
            <?php foreach ($parametry as $param): ?>
                <tr>
                    <th><?= esc($param->nazev) ?></th>
                    <td><?= esc($param->hodnota) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>
