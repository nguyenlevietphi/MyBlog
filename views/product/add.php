<h3>Thêm một sản phẩm</h3>
<form id="frmProduct" class="form-horizontal" method="post" action="" enctype="multipart/form-data">
  <div class="control-group">
    <label class="control-label" for="inputTitle">Tên sản phẩm:</label>
    <div class="controls">
      <input type="text" id="inputTitle" placeholder="Tên sản phẩm" name="name" style="width:650px"/>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputTitle">Giá sản phẩm:</label>
    <div class="controls">
      <input type="text" id="inputTitle" placeholder="Giá sản phẩm" name="price" style="width:300px"/><b>VNĐ</b>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputTitle">Hình ảnh:</label>
    <div class="controls">
      <input type="file" name="fileImage" />
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputTitle">Mô tả sản phẩm:</label>
    <div class="controls">
      <input type="text" id="inputTitle" placeholder="Mô tả sản phẩm" name="description" style="width:650px"/>
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn btn-primary">Lưu</button>
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