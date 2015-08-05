<h3>Thêm một bài Blog</h3>
<form id="frmBlog" class="form-horizontal" method="post" action="">
  <div class="control-group">
    <label class="control-label" for="inputTitle">Tiêu đề</label>
    <div class="controls">
      <input type="text" id="inputTitle" placeholder="Tiêu đề Blog" name="title" />
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputContent">Nội dung bài Blog</label>
    <div class="controls">
      <textarea id="inputContent" placeholder="Nhập vào nội dung Blog" name="content"></textarea>
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