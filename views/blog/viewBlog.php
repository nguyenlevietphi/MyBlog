<h4><?php echo $blog_content['title'];?></h4>
<pre><?php echo $blog_content['content'];?></pre>
<hr/>
<h4>Bình luận</h4>
<hr/>
<?php
	$i = 0;
    foreach ($blog_comment as $cm):
    $i++;
?>
<h5><?php echo $cm['name']; ?></h5>
<pre><?php echo $cm['comment']; ?></pre>
<?php        
    endforeach;
?>
<hr/>
<h4>Viết bình luận</h4>
<hr/>
<form id="frmBlog" class="form-horizontal" method="post" action="">
  <div class="control-group">
    <label class="control-label" for="inputName">Họ Tên</label>
    <div class="controls">
      <input type="text" id="inputName" placeholder="Nhập họ và tên" name="name" />
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputContent">Nội dung bình luận</label>
    <div class="controls">
      <textarea id="inputContent" placeholder="Nhập vào nội dung bình luận" name="comment"></textarea>
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn btn-primary">Bình luận</button>
    </div>
  </div>
</form>
<script>
    $('#frmBlog').submit(function() {
        if ($('#inputName').val() == "" || $('#inputContent').val() == "") {
          alert("Không bỏ trống Họ Tên hoặc Nội Dung");
            return false;
        }
        return true;
    });
</script>