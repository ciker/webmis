<table class="action">
	<tr>
		<td class="title"><?php echo $title; ?></td>
		<td>
			<ul class="action_ct">
				<?php echo $actionHtml; ?>
			</ul>
		</td>
	</tr>
</table>
<div class="line">&nbsp;</div>
<!-- Content -->
<table class="table_list">
	<tr class="title" id="table">
		<td width="20"><a href="#" id="checkboxY"></a><a href="#" id="checkboxN"></a></td>
		<td>ID</td>
		<td>标题</td>
		<td>所属</td>
		<td>审核</td>
	</tr>
	<tbody id="listBG">
	<?php foreach($list as $val){?>
	<tr>
		<td><input type="checkbox" value="<?php echo $val->id;?>" /></td>
		<td><?php echo $val->id;?></td>
		<td style="text-align: left;">
			<a href="#" onclick="proShow(<?php echo $val->id;?>); return false;"><?php echo keyHH($val->title, @$key['title']);?></a>
		</td>
		<td style="text-align: left;">
			<?php
			$arr = array_filter(explode(':', $val->class));
			foreach($arr as $val1){
				echo $class[$val1].'('.$val1.') > ';
			}
			?>
		</td>
		<td><?php echo MY_Controller::stateName($val->state);?></td>
	</tr>
	<?php } ?>
	</tbody>
</table>
<div class="page"><div class="pagelist"><?php echo $page.'<span>'.$total.'</span>'; ?></div></div>
<!-- Content End -->