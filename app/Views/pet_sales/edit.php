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
                            <form action="<?= url_to('pet_sales-update')?>" method="POST">
                                <?= csrf_field() ?>
                                <input type="hidden" name="pet_sales_id" value="<?= $pet_sales['id'] ?>">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="pet">Pet</label>
                                            <select id="pet" class="pet" name="pet" class="form-control">
                                                <option value=""></option>
                                                <?php foreach ($pets as $key => $pet) : ?>
                                                <option value="<?= $pet['id']; ?>"
                                                    <?php if ($pet_sales['pet_id'] == $pet['id']) echo "selected"; ?>>
                                                    <?= $pet['pet']; ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="type">Type</label>
                                            <select id="type" class="type" name="type" class="form-control">
                                                <option value=""></option>
                                                <?php foreach ($pets_type as $key => $pet_type) : ?>
                                                <option value="<?= $pet_type['id']; ?>"
                                                    <?php if ($pet_sales['type_id'] == $pet_type['id']) echo "selected"; ?>>
                                                    <?= $pet_type['type']; ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="condition"> Condition</label>
                                            <select id="condition" class="condition" name="condition" class="form-control">
                                                <option value=""></option>
                                                <?php foreach ($conditions as $key => $condition) : ?>
                                                <option value="<?= $condition['id']; ?>"
                                                    <?php if ($pet_sales['condition_id'] == $condition['id']) echo "selected"; ?>>
                                                    <?= $condition['condition']; ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <input type="text" class="form-control" id="description" name="description"
                                                value="<?= $pet_sales['description'] ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="price">Price</label>
                                            <input type="number" class="form-control" id="price" name="price"
                                                value="<?= $pet_sales['price'] ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 text-right">
                                    <a href="<?= url_to('pet_sales')?>" type="button"
                                        class="btn btn-secondary">Cancel</a>
                                    <button type="submit" class="btn btn-primary" id="btn_submit">Update Pet
                                        Sales</button>
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