  <h3>Chỉnh sửa thông tin</h3>
<?php if (isset($error)): ?>
<div class="alert alert-error">
    <?php echo $error; ?>
</div>
<?php endif; ?>
<?php
  $logged = isLogged();
?>
<form id="frmChange" class="form-horizontal" method="post" action="">
  <div class="control-group">
    <label class="control-label" for="inputName">Họ Tên: </label>
    <div class="controls">
      <input type="text" id="inputName" name="name" value="<?php echo $logged['name'] ?>" />
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputName">Điện Thoại: </label>
    <div class="controls">
      <input type="text" id="inputName" name="phone" value="<?php echo $logged['phone'] ?>" />
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEmail">Email:</label>
    <div class="controls">
      <b><?php echo $logged['email']; ?></b>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Mật Khẩu: </label>
    <div class="controls">
      <input type="password" id="inputPassword" name="password" />
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword2">Nhập Lại Mật Khẩu: </label>
    <div class="controls">
      <input type="password" id="inputPassword2" name="password" />
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn btn-primary">Lưu Thay Đổi</button>
    </div>
  </div>
</form>

<script>
    $('#frmChange').submit(function() {
        if ($('#inputPassword').val() != $('#inputPassword2').val()) {
          alert("Mật khẩu không giống nhau");
            return false;
        }
        return true;
    });
</script>