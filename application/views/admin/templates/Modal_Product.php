<!-- modal-add -->
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
<!-- end-modal -->

<!-- modal-update -->
<div id="modal-update-product" class="modal fade">
    <div class="modal-dialog">
        <form method="POST" id="update-product_form" action="<?=base_url();?>SachController/Update_Product" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                 <h4 class="modal-title text-center display-4">Update Product</h4>
                <div class="modal-body">
                    <label>ID</label>
                    <input type="text" name="id_product" id="id_product" class="form-control" readonly>
                    <label>Tên Sách</label>
                    <input type="text" name="name_product" id="name_product" class="form-control"><br/>
                    <label>Miêu tả</label>
                    <textarea name="description" id="description" class="form-control"></textarea><br/>
                    <label>Giá:</label>
                    <input type="text" name="unit_price" id="unit_price" class="form-control"><br/>
                    <label>Giá củ:</label>
                    <input type="text" name="promotion_price" id="promotion_price" class="form-control"><br/>
                    <label>Đơn vị:</label>
                    <input type="text" name="unit" id="unit" class="form-control"><br/>
                    <label>Hình ảnh:</label>
                    <label><img src="" name="image_0" id="image_0" width="80"></label>
                    <input type="file" name="product_image" id="product_image" class="form-control">

                </div>
                <div class="modal-footer">

                    <input type="submit" id="book_id" name="book_id" class="btn btn-success" value="Update" />
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div> 
        </form>
    </div>
</div>
<!-- end-mal-update -->



