<div class="container-fluid">
    <div class="row text-center">

        <?php foreach ($barang as $brg):?>

            <div class="card" style="width: 16rem;">
  <img class="<?php echo base_url().'/uploads/'.$brg->gambar?>">
  <div class="card-body">
    <h5 class="card-title"><?php echo $brg->nama_brg?></h5>
    <small><?php echo $brg->keterangan?></small><br>
    <span class="badge badge-success">Rp. <?php echo $brg->harga?></span>
    <a href="#" class="btn btn-sm btn-primary">Tambah keranjang</a>
    <a href="#" class="btn btn-sm btn-success">detail</a>
  </div>
</div>
        <?php endforeach;?>
    </div>
</div>