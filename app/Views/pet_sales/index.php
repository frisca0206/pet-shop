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
                        <div class="card-header">
                            <h3 class="card-title">Manage Pet Sales</h3>
                            <div class="d-flex justify-content-end mb-1">
                                <a href="<?= url_to('pet_sales-create') ?>" class="btn btn-success mb-2"
                                    id="btn_modal_create">Create</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="pet_sales_table" class="table table-bordered table-hover masterdata-datatable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Pet</th>
                                        <th>Type</th>
                                        <th>Condition</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th width="150">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($pets_sales as $key => $pet_sales) : ?>
                                    <tr>
                                        <td><?= $key + 1 ?></td>
                                        <td><?= $pet_sales['pet'] ?></td>
                                        <td><?= $pet_sales['type'] ?></td>
                                        <td><?= $pet_sales['condition'] ?></td>
                                        <td><?= $pet_sales['description'] ?></td>
                                        <td><?= $pet_sales['price'] ?></td>
                                        <td>
                                            <a href="<?= url_to('pet_sales-edit', $pet_sales['id'])?>"
                                                class="btn btn-primary btn-sm">Edit</a>
                                            <a href="<?= url_to('pet_sales-delete', $pet_sales['id'])?>"
                                                class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-boody -->
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