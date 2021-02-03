<?php
foreach ($dados as $dado) {
    ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Blank Page</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><?php echo $dado['nome']; ?></h3>


                </div>
                <div class="card-body">

                    <div class="form-group">
                        <label for="">Nome produto: </label>
                        <input type="text" disabled="" value="<?php echo $dado['nome']; ?>" class="input-block-level" />

                    </div>

                    <div class="form-group">
                        <label for="">Tipo: </label>
                        <input type="text" disabled="" value="<?php echo $dado['tipo']; ?>" class="input-block-level" />

                    </div>

                    <div class="form-group">
                        <label for="">Valor</label>
                        <input type="text" disabled="" value="<?php echo $dado['valor']; ?>" class="input-block-level" />

                    </div>


                </div>
                <!-- /.card-body -->
                <div class="card-footer">

                    <a href="?pg=produtos" class="btn btn-warning btn-lg">Voltar</a>
                    <a href="?pg=produtos-editar&id=<?php echo $dado['id']; ?>" class="btn btn-success btn-lg">
                        <span class="fa fa-edit"></span>
                        Editar
                    </a>

                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
<?php } ?>
