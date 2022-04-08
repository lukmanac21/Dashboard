<div class="main">
    <div class="page-header">
        <h4 class="page-title">Laporan</h4>
        <div class="breadcrumb">
            <div class="breadcrumb-item"><a href="index.html"> Laporan </a></div>
            <div class="breadcrumb-item"><a href="javascript:void(0)"> Laporan Penjualan </a></div>
        </div>
    </div>
    <div class="card">
        <?php if(isset($filter)){?>
        <div class="card-body">
            <h3>Filter Laporan</h3>
            <form class="row gy-4 gx-3 align-items-center" method="post" action="<?= site_url('lappenjualan_list')?>">
                <div class="col-md-3">
                    <label class="visually-hidden" for="month">Month</label>
                    <input type="month" name="month" class="form-control" id="month">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <?php } else if(isset($list)){?>
        <div class="card-body">
            <h3>Filter Laporan</h3>
            <form class="row gy-4 gx-3 align-items-center" method="post" action="<?= site_url('lappenjualan_list')?>">
                <div class="col-md-3">
                    <label class="visually-hidden" for="month">Month</label>
                    <input type="month" name="month" class="form-control" id="month" value="<?= $month?>">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            <br>
            <table  id="data-table" class="table data-table">
                <thead>
                    <tr>
                        <th style="text-align:center;" style="width: 1%;">NO</th>
                        <th style="text-align:center;" style="width: 5%;">Hari, Tanggal</th>
                        <th style="text-align:center;" style="width: 15%;">Nama Barang</th>
                        <th style="text-align:center;" style="width: 15%;">QTY</th>
                        <th style="text-align:center;" style="width: 15%;">Harga</th>
                        <th style="text-align:center;" style="width: 15%;">Sub Total</th>
                    </tr>
                </thead>
                <tbody>                   
                </tbody>
                <tfoot>
                    <tr>
                    <th style="text-align:center;"colspan="5">Total</th>
                        <th style="text-align:center;">Total</th>

                    </tr>
                </tfoot>
            </table>
            <a type="button" href="<?= site_url('lappenjualan_pdf/'.$month)?>" class="btn btn-primary" title="Download"><i class="icon-printer feather"></i></a>
        </div>
    </div>
    <?php } ?>
</div>

