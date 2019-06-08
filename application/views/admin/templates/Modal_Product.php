<div id="productModal" class="modal fade">
    <div class="modal-dialog">
        <form method="POST" id="product_form" action="<?=base_url();?>SachController/Insert_Product" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                 <h4 class="modal-title text-center display-4">Add Product</h4>
                <div class="modal-body">
                    <label>Tên Sách</label>
                    <input type="text" name="name" id="name_product" class="form-control"><br/>
                    <label>Miêu tả</label>
                    <textarea name="description" id="description" class="form-control"></textarea><br/>
                    <label>Giá:</label>
                    <input type="text" name="unit_price" id="unit_price" class="form-control"><br/>
                    <label>Giá củ:</label>
                    <input type="text" name="promotion_price" id="promotion_price" class="form-control"><br/>
                    <label>Đơn vị:</label>
                    <input type="text" name="unit" id="unit" class="form-control"><br/>
                    <label>Hình ảnh:</label>
                    <input type="file"  name="product_image" id="product_image" class="form-control">
                </div>
                <div class="modal-footer">

                    <input type="submit" id="submit" name="submit" class="btn btn-success" value="Add" />
                         
                            
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div> 
        </form>
    </div>
</div>