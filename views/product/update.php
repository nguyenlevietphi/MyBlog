<h3>Chỉnh sửa sản phẩm</h3>
<form id="frmProduct" class="form-horizontal" method="post" action="" enctype="multipart/form-data">
  <div class="control-group">
    <label class="control-label" for="inputTitle">Tên sản phẩm:</label>
    <div class="controls">
      <input type="text" id="inputTitle" value="<?php echo $product_object['name'] ?>" name="name" style="width:650px"/>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputTitle">Giá sản phẩm:</label>
    <div class="controls">
      <input type="text" id="inputTitle" value="<?php echo $product_object['price'] ?>" name="price" style="width:300px"/><b>VNĐ</b>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputTitle">Hình ảnh:</label>
    <div class="controls">
      <img src="<?php echo "../images/products/".$product_object['image'] ?>">
    </div>
    <div class="controls">
      <input type="file" name="fileImage" />
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputTitle">Mô tả sản phẩm:</label>
    <div class="controls">
      <input type="text" id="inputTitle" value="<?php echo $product_object['description'] ?>" name="description" style="width:650px"/>
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <input type="hidden" name="id" value="<?php echo $product_object['id'] ?>"> 
      <button type="submit" class="btn btn-primary" name="saveUpdate" value="update">Lưu</button>
    </div>
  </div>
</form>
<script>
    $('#frmBlog').submit(function() {
        if ($('#inputTitle').val() == "" || $('#inputContent').val() == "") {
          alert("Không thể bỏ trống tiêu đề hoặc nội dung");
            return false;
        }
        return true;
    });
</script>