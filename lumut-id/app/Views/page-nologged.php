<?= $this->extend("layouts/layout-full") ?>
 
<?= $this->section("content") ?>

<?=view('pages-nologged/'.$page_content)?>

<?= $this->endSection() ?>