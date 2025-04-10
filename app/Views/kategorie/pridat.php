<?=$this->extend("layout/sablona");?>
<?=$this->section("content");?>
<div class="container mt-5">
    <h2> Přidat novou kategorii</h2>
    <form method="post" action="<?=base_url('index.php/kategorie/pridat')?>">
        <div class="mb-3">
            <label for="nazev" class="form-label"> Název kategorie</label>
            <input type="text" class="form-control" id="nazev" name="nazev" required>
        </div>
        <div class="mb-3">
            <label for="URL" class="form-label"> URL kategorie</label>
            <input type="text" class="form-control" id="URL" name="URL" required>
        </div>
        <button type="submit" class="btn btn-primary">Přidat</button>
    </form>

</div>

<?=$this->endSection();?>