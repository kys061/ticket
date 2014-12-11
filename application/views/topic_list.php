<div class="col-xs-12">
	<?php if($this->session->userdata('is_login')){ ?>
	<?php var_dump($this->session->userdata('cuname'));?>
	<div class="row">
		<table class="table table-hover">
			<thead>
				<tr class="success"><td colspan="4"><h1>OPEN</h1></td></tr>
				<tr>
					<th>티켓 넘버</th>
					<th>고객사</th>					
					<th>내     용</th>
					<th>시     간</th>
				</tr>
			</thead>
			
			<?php
			foreach($openticket as $open){
				if ($this->session->userdata('cuname') == $open->cuname)
				{
					?>
					<tr>
						<th><a href="#" class="topic-id"><?=$open->id?></a></th>
						<th><a href="#" class="topic-id"><?=$open->cuname?></a></th>
						<td><a href="/tmp/topic/post/<?=$open->id?>" id="topic_contents"><?=$open->title?></a></td>
						<td><a href="#" colspan="1" id="topic-created"><?=$open->created?></a></td>
					</tr>
					<?php
				}
				if ($this->session->userdata('cuname') == 'nbitpkr1')
				{
					if($open->cuname != 'nbitpkr1')
					{
						?>
						<tr>
							<th><a href="#" class="topic-id"><?=$open->id?></a></th>
							<th><a href="#" class="topic-id"><?=$open->cuname?></a></th>
							<td><a href="/tmp/topic/post/<?=$open->id?>" id="topic_contents"><?=$open->title?></a></td>
							<td><a href="#" colspan="1" id="topic-created"><?=$open->created?></a></td>
						</tr>

						<?php
					}
				}
			}
			?>
			<thead>
				<tr calss="warning" ><td colspan="4"><h1>HOLD</h1></td></tr>
				<tr>
					<th>티켓 넘버</th>
					<th>고객사</th>					
					<th>내     용</th>
					<th>시     간</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach($holdticket as $hold){
					if ($this->session->userdata('cuname') == $hold->cuname)
					{
						?>
						<tr>
							<th><a href="#" class="topic-id"><?=$hold->id?></a></th>
							<th><a href="#" class="topic-id"><?=$hold->cuname?></a></th>
							<td><a href="/tmp/topic/post/<?=$hold->id?>" id="topic_contents"><?=$hold->title?></a></td>
							<td><a href="#" colspan="1" id="topic-created"><?=$hold->created?></a></td>
						</tr>
						<?php
					}
					if ($this->session->userdata('cuname') == 'nbitpkr1')
					{
						if($hold->cuname != 'nbitpkr1')
						{
							?>
							<tr>
								<th><a href="#" class="topic-id"><?=$hold->id?></a></th>
								<th><a href="#" class="topic-id"><?=$hold->cuname?></a></th>
								<td><a href="/tmp/topic/post/<?=$hold->id?>" id="topic_contents"><?=$hold->title?></a></td>
								<td><a href="#" colspan="1" id="topic-created"><?=$hold->created?></a></td>
							</tr>
							<?php
						}
					}
				}
				?>

			</tbody>
			<thead>
				<tr class="error"><td colspan="4"><h1>CLOSE</h1></td></tr>
				<tr>
					<th>티켓 넘버</th>
					<th>고객사</th>					
					<th>내     용</th>
					<th>시     간</th>
				</tr>
			</thead>
			<tbody>
				<?php
		//echo count($topics);
				foreach($closeticket as $close){
					if ($this->session->userdata('cuname') == $close->cuname){

						?>
						<tr>
							<th><a href="#" class="topic-id"><?=$close->id?></a></th>
							<th><a href="#" class="topic-id"><?=$close->cuname?></a></th>
							<td><a href="/tmp/topic/post/<?=$close->id?>" id="topic_contents"><?=$close->title?></a></td>
							<td><a href="#" colspan="1" id="topic-created"><?=$close->created?></a></td>
						</tr>
						<?php
					}
					if ($this->session->userdata('cuname') == 'nbitpkr1')
					{
						if($close->cuname != 'nbitpkr1')
						{
							?>
							<tr>
								<th><a href="#" class="topic-id"><?=$close->id?></a></th>
								<th><a href="#" class="topic-id"><?=$close->cuname?></a></th>
								<td><a href="/tmp/topic/post/<?=$close->id?>" id="topic_contents"><?=$close->title?></a></td>
								<td><a href="#" colspan="1" id="topic-created"><?=$close->created?></a></td>
							</tr>
							<?php
						}
					}
				}
				?>
			</tbody>
			<tfoot>
				<tr>
					<th colspan="5"><?php echo $pagination; ?></th>
				</tr>
			</tfoot>
		</table>

		<?php } else { ?>
		<?php } ?>
	</div>
</div>
<div class="col-xs-12"> 
	
	<div class="btn-group pull-right">
		<a href="/tmp/topic/add" class="btn btn-small">티켓작성</a>
	</div>
	<div>
		<form id="bd_search" class="form-inline" method="post">
			<select class="input-sm" name="search_sel">
				<option value="title"><h5>제목</h5></option>
				<option value="description">내용</option>
				<option value="title_description">제목+내용</option>
			</select>
			<input type="text" name="search_word" id="q" onkeypress="board_search_enter(document.q);" />
			<input type="button" value="Search"  id="search_btn" />
		</form>
	</div>


</div>