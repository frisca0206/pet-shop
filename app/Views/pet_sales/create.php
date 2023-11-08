<?= $this->extend('layouts/template'); ?>

<?= $this->Section('content'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?= $page_title ?></h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <!-- /.content-header -->

    <!-- Main Content -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="<?= url_to('pet_sales-store')?>" method="POST">
                                <?= csrf_field() ?>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label> Pet </label>
                                            <select id="pet" name="pet" class="form-control">
                                                <option value=""></option>
                                                <?php foreach ($pets as $key => $pet) : ?>
                                                <option value="<?= $pet['id']; ?>">
                                                    <?= $pet['pet']; ?>
                                                </option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label> Type </label>
                                            <select id="type" name="type" class="form-control">
                                                <option value=""></option>
                                                <?php foreach ($pets_type as $key => $pet_type) : ?>
                                                <option value="<?= $pet_type['id']; ?>">
                                                    <?= $pet_type['type']; ?>
                                                </option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label> Condition </label>
                                            <select id="condition" name="condition" class="form-control">
                                                <option value=""></option>
                                                <?php foreach ($conditions as $key => $condition) : ?>
                                                <option value="<?= $condition['id']; ?>">
                                                    <?= $condition['condition']; ?>
                                                </option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <input type="text" class="form-control" id="description" name="description"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="price">Price</label>
                                            <input type="number" class="form-control" id="price" name="price"
                                                required>
                                        </div>
                                        <div class="col-md-6 col-sm-12 text-right">
                                            <a href="<?= url_to('pet_sales') ?>" type="button"
                                                class="btn btn-secondary">Cancel</a>
                                            <button type="submit" class="btn btn-primary" id="btn_submit">Add Pet
                                                Sales</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

</div>



<?= $this->endSection('content'); ?>