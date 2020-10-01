<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row text-center mt-4">
      <?php foreach($book as $b) : ?>

        <div class="card ml-3 mb-3  card border-primary mb-3 " style="width: 16rem;">
          <img src="<?= base_url().'/assets/img/uploads/' .$b["gambar"] ?>" class="card-img-top img-thumbnail" >
          <div class="card-body ">
            <h5 class="card-title"><?= $b["judul"]; ?></h5>
            
            <span class="badge badge-success mb-2">Rp. <?= number_format($b["harga"], 0,',','.' )?></span>
            <br>

            <?php if($b["stok"] >0){
                    echo anchor('dashboard/add_shopping/'.$b["id_buku"], '<div class="btn btn-sm btn-primary">Add to shopping cart</div>'); 
                    }else{
                    echo '<div class="btn btn-sm btn-primary" disabled>Sold Out</div>';
                    }
                ?>



            <?= anchor('dashboard/detail_buku/'.$b["id_buku"], '<div class="btn btn-sm btn-success">Detail</div>'); ?>
          </div>
        </div>
        

      <?php endforeach; ?>
    </div>

    


    </div>
<!-- /.container-fluid -->
  </div>
<!-- End of Main Content -->


