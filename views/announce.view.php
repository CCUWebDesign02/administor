</script> 
  <div class="container">
<h2>新增活動公告</h2>
<form  method="post" action="updata/updataannounce.php" enctype="multipart/form-data">
  <div class="form-group">
    <label for="moviename">日期:</label>
    <input type="text" class="form-control" name="date" placeholder="2018/1/2">
  </div>
  <div class="form-group">
    <label for="comment">公告:</label>
    <textarea class="form-control" rows="12" name="announce"></textarea>
  </div>
  <input type="submit" class="btn btn-default" value="上傳" />
</form>
</div>