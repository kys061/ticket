<div class="col-xs-12">

<div class="page-header">
	<h1>Modify Ticket</h1>
	</div>

<form action="/tmp/topic/modify/<?php echo $this->uri->segment(3);?>" method="post">
<?php echo validation_errors(); ?>
<div class="row">
<input class="span7" type="text" name="title" value="<?=$topic->title?>" />
<select class="form-control input-sm" class="span2" name="status">
  <option value="open">OPEN</option>
  <option value="hold">HOLD</option>
  <option value="close">CLOSE</option>
</select>
<select class="form-control input-sm" class="span2" name="cuname">
  <option value="<?=$this->session->userdata('cuname')?>"><?php echo $this->session->userdata('cuname'); ?></option>
</select>
</div>
<div class="well"><?=auto_link($topic->description)?></div>

<textarea class="span12" rows="50" name="description"><?php echo $topic->description; ?></textarea>
<!--<textarea class="span12" rows="15" name="description"><?php echo $topic->description; ?></textarea>-->
<input type="submit" class="btn" />
</form>
</div>

