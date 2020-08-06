<!doctype html>
<html lang="en">
<head>
    <?= view("includes/head"); ?>
    <?= view("includes/include_style"); ?>
</head>
<body>


<div class="wrapper">
    <!-- Navbar -->
    <?= view("includes/navbar"); ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?= view("includes/sidebar"); ?>
    <!-- /.Main Sidebar Container -->


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- /.content-header -->
        <?= view("kullanicilar/yeni_kullanici/content_header"); ?>

        <!-- Main content -->
        <section class="content">

            <?= view("kullanicilar/yeni_kullanici/content"); ?>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer  -->
    <?= view("includes/footer"); ?>
    <!-- /.Main Footer  -->

</div>
<?= view("includes/include_script"); ?>
</body>
</html>