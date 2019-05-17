<?php 
    include'templates/header.php';
 ?>

<div class="container-fluid mt-5">
<h1 class="text-center display-4 color-tim">Danh Sách Sản Phẩm</h1>
<hr class="w-50 bg-primary">
    <table class="table table-dark table-hover table-striped" id="users">
    <thead class="name">
        <th>STT</th>
        <th>ID</th>
        <th>Tên Sách</th>
        <th>Mô tả</th>
        <th>giá</th>
        <th> Giákhuến mãi</th>
        <th>Hình ảnh</th>
        <th><a href="<?=base_url();?>sachController/addProduct">Them san pham</a></th>

    </thead>
    <tbody>
         <?php $stt=1; ?>
        <?php foreach ($data as $product):?>
        <tr>
            <td><?= $stt; ?></td>
            <td><?= $product->id ?></td>
            <td><?= $product->name;?></td>
            <td><?= $product->description;?></td>
            <td><?= number_format($product->unit_price);?></td>
            <td><?= number_format($product->promotion_price);?></td>
            <td><img src="<?=base_url();?>uploads/<?=$product->image;?>" width="80"></td>
            <td><a href="<?=base_url();?>SachController/Updateproduct?id=<?=$product->id; ?>">update</a></td>
            <td><a href="#" class=" btn btn-primary delete_data" id="<?=$product->id;?>">delete</a></td>
        <?php $stt++; ?>
        </tr>
         
        <?php endforeach;?>
        
    </tbody>
</table>
 <script type="text/javascript">
            $(document).ready(function(){
                $('.delete_data').click(function(){
                    var id = $(this).attr("id");
                if (confirm("Bạn có chắc muốn xóa dòng dữ liệu này?")) {
                    window.location="<?= base_url();?>SachController/delete_data/"+id;    
                }else{
                    return false;
                }
                });       
            });
    </script>   
</div>

 <?php 
    include'templates/footer.php';
 ?>
