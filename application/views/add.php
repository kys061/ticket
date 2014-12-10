<div class="col-xs-12">
<div class="page-header">
	<h1>티켓 내용을 적어주세요</h1>
	</div>
<form action="/tmp/index.php/topic/add" method="post">
<?php echo validation_errors(); ?>
<div class="row">
<input type="text" name="title" placeholder="제목" class="span7" />
<select class="form-control input-sm" class="span2" name="status">
  <option value="open">OPEN</option>
  <option value="hold">HOLD</option>
  <option value="close">CLOSE</option>
</select>
<select class="form-control input-sm" class="span2" name="cuname">
  <option value="<?=$this->session->userdata('cuname')?>"><?php echo $this->session->userdata('cuname'); ?></option>
</select>
</div>
<textarea name="description" placeholder="본문" class="span12" rows="50"></textarea>
<div class="form_control">
<br>
<input id="addbtn" type="submit" class="btn" />
</div>
</form>

</div>