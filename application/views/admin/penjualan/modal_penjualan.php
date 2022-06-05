<div class="modal fade" id="show_masker" role="dialog">
    <div class="modal-dialog modal-lg">
        <form class="form-horizontal" action="" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Pilih Masker</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div div class="table-responsive">
                        <table class="table table-bordered display" id="datatablesSimple" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Masker</th>
                                    <th>Harga Masker</th>
                                    <th>Stok</th>
                                    <th>Jumlah</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($masker->result_array() as $i) :
                                    $id = $i['id_masker'];
                                    $title = $i['title'];
                                    $price = $i['price'];
                                    $stock = $i['stock']
                                ?>
                                    <tr>
                                        <td><?php echo $id; ?></td>
                                        <td><?php echo $title; ?></td>
                                        <td><?php echo $price; ?></td>
                                        <td><?php echo $stock; ?></td>
                                        <td>
                                            <input type="number" name="quantity" id="quantity" value="1" class="form-control" style="width: 65px;">
                                        </td>
                                        <td>
                                            <div style="width: 78px;">
                                                <button class="add_cart btn btn-success btn-block" data-productid="<?php echo $id; ?>" data-productname="<?php echo $title; ?>" data-productprice="<?php echo $price; ?>" data-productstock="<?php echo $stock; ?>"><i class="fa fa-cart-plus"></i> Add
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>