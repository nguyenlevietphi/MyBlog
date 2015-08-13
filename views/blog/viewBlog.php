<h4><?php echo $blog_content['title'];?></h4>
<i>Ngày đăng: <?php echo $blog_content['blog_day']; ?></i>
<p><?php echo $blog_content['content'];?></p>
<hr/>
<h4>Bình luận</h4>
<hr/>
<?php
	$i = 0;
    foreach ($blog_comment as $cm):
    $i++;
?>
<h5><?php echo $cm['name']; ?></h5>
<i><h6><?php echo $cm['comment_day']; ?></h6></i>
<pre><?php echo $cm['comment']; ?></pre>
<?php        
    endforeach;
?>
<hr/>
<h4>Viết bình luận</h4>
<hr/>
<?php $logged = isLogged();
if ($logged['name'] !=''): ?>
<form id="frmBlog" class="form-horizontal" method="post" action="">
  <div class="control-group">
    <label class="control-label" for="inputContent">Nội dung bình luận</label>
    <div class="controls">
      <textarea id="inputContent" placeholder="Nhập vào nội dung bình luận" name="comment" style="width:600px; height:150px;"></textarea>
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn btn-primary">Bình luận</button>
    </div>
  </div>
</form>
<?php else: ?>
  <label class="control-label">Bạn cần đăng nhập để bình luận</label>
<?php endif;?>
<script>
    $('#frmBlog').submit(function() {
        if ($('#inputContent').val() == "") {
          alert("Không bỏ trống Nội Dung");
            return false;
        }
        return true;
    });
</script>