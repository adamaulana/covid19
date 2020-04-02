<?php include __DIR__.'/../../layouts/header.php' ?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold">POSITIF COVID19</h6>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-xl-4 col-md-12 mb-4">
                <div class="card border-left-primary shadow h-100 py-2" id="card-positif">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase">Jumlah Terakhir</div>
                                <div class="text-xs font-weight-bold text-dark mb-1"><span class="date"><?= $data->tanggal ?></span></div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><span id="positif"><?= $data->jumlah ?></span> Orang</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-12 mb-4">
                <div class="card border-left-success shadow h-100 py-2" id="card-positif-sembuh">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase">Sembuh Terakhir</div>
                                <div class="text-xs font-weight-bold text-dark mb-1"><span class="date"><?= $data->tanggal ?></span></div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><span id="positif-sembuh"><?= $data->sembuh ?></span> Orang</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-12 mb-4">
                <div class="card border-left-danger shadow h-100 py-2" id="card-positif-meninggal">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-danger text-uppercase">Meninggal Terakhir</div>
                                <div class="text-xs font-weight-bold text-dark mb-1"><span class="date"><?= $data->tanggal ?></span></div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><span id="positif-meninggal"><?= $data->meninggal ?></span> Orang</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-md-12 mb-4">
                <form action="<?= $link_update ?>" method="post" id="form-update">
                    <h6>UPDATE DATA</h6>
                    <div class="row">
                        <div class="col-xl-4 col-md-4">
                            <div class="form-group">
                                <label class="font-weight-bold text-primary" for="jumlah">Jumlah</label>
                                <input type="number" class="form-control" id="jumlah" name="jumlah" value="<?= $data->jumlah ?>"
                                    placeholder="Jumlah" aria-label="Jumlah" aria-describedby="button-positif">
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4">
                            <div class="form-group">
                                <label class="font-weight-bold text-success" for="sembuh">Sembuh</label>
                                <input type="number" class="form-control" id="sembuh" name="sembuh" value="<?= $data->sembuh ?>"
                                    placeholder="Jumlah" aria-label="Jumlah" aria-describedby="button-positif">
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4">
                            <div class="form-group">
                                <label class="font-weight-bold text-danger" for="meninggal">Meninggal</label>
                                <input type="number" class="form-control" id="meninggal" name="meninggal" value="<?= $data->meninggal ?>"
                                    placeholder="Jumlah" aria-label="Jumlah" aria-describedby="button-positif">
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit" id="button-positif">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
    $_INJECT_JS = [];
    $_SCRIPT =
    "<script>
        const ajax_update = `". $link_update ."`;
        const ajax_refresh = `". $link_refresh ."`;
    </script>";
    $_INJECT_JS[] = $_SCRIPT;
    $_INJECT_JS[] = "<script src='". url('dist/js/pages/positif/update.js') ."'></script>";
?>

<?php include __DIR__.'/../../layouts/footer.php' ?>