
<?= $this->extend("layouts/layout-page") ?>
 
 <?= $this->section("content") ?>
 
 <?=view('pages-logged/'.$page_content)?>
 
 <?= $this->endSection() ?>