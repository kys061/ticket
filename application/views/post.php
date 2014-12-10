
<div class="col-xs-12"> 
	<article>
				<div class="page-header">
					<h1><?=$topic->title?></h1>
				</div>
				<?php if($this->session->userdata('is_login')){ ?>
					<div class="btn-group pull-right">
						<a href="/tmp/topic/tlist" class="btn btn-small">List</a>
						<a href="/tmp/topic/add" class="btn btn-small">Add</a>
						<a href="/tmp/topic/modify/<?php echo $this->uri->segment(3);?>" class="btn btn-small">Modify</a>
						<a href="/tmp/topic/delete/<?php echo $this->uri->segment(3);?>" type="submit" class="btn btn-danger btn-small">Delete</a>
				</div>
				<?php } else { ?>
				<?php } ?>
			<div id="write_time">
			<span class="label label-info"><?=kdate($topic->created)?></span>
			<span class="label label-info"><?=$topic->status?></span>
			</div>
			<br>
			<div class="well"><?=auto_link($topic->description)?></div>

	</article>
</div>



  								