<?php /* Smarty version Smarty-3.1.15, created on 2014-06-09 06:45:36
         compiled from "/opt/lbaw/lbaw1366/public_html/final/templates/user/calendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:214696090653954a0025c1f8-02766578%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00c992a5f7853566292997e469f82fd1bdbfa3aa' => 
    array (
      0 => '/opt/lbaw/lbaw1366/public_html/final/templates/user/calendar.tpl',
      1 => 1402290866,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214696090653954a0025c1f8-02766578',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    's_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53954a00328343_18907413',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53954a00328343_18907413')) {function content_53954a00328343_18907413($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('titulo'=>"Calendário",'calendario'=>1), 0);?>

<script>
$(document).ready(function() {
		
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next',
				center: 'title',
				right: 'today'
			},
			defaultDate: '2014-06-12',
			selectable: true,
			selectHelper: true,
			select: function(start, end) {
				var title = prompt('Nome do evento:');
				var eventData;
				if (title) {
					eventData = {
						title: title,
						start: start,
						end: end
					};
					$('#calendar').fullCalendar('renderEvent', eventData, true);
					var start1 = start +"";
					var startResult = start1.split(" "); 
					var startYeaR = startResult[3];
					var startDay = startResult[2];
					var startMonth = getNumMonth(startResult[1]);
					var finalStart = startYeaR + '-' + startMonth + '-' + startDay;

					var end1 = end +"";
					var endResult = end1.split(" "); 
					var endYeaR = endResult[3];
					var endDay = endResult[2];
					var endMonth = getNumMonth(endResult[1]);
					var finalEnd = endYeaR + '-' + endMonth + '-' + endDay;

					dataString = "id="+<?php echo $_smarty_tpl->tpl_vars['s_id']->value;?>
+"&title="+title+"&start="+finalStart+"&end="+finalEnd;

					$.ajax({
						url: '../actions/set_event.php',
						data: dataString,
						dataType: 'json',
						type: 'POST',
						success: function (data, textStatus, jqXHR) {
							var answer = JSON.parse(jqXHR.responseText);
							//  se inserir com sucesso na base de dados
						},
						error: function (jqXHR, textStatus, errorThrown) {
							alert(textStatus + ": " + errorThrown);
						}
				    });
				}
				$('#calendar').fullCalendar('unselect');
			},
			editable: false,
			events: "../actions/get_calendar_events.php?id="+<?php echo $_smarty_tpl->tpl_vars['s_id']->value;?>
,		
		});
		
	});

	function getNumMonth(month){

		switch (month) {
		    case 'Jan': return '01'; break;
		    case 'Fev': return '02'; break;
		    case 'Mar': return '03'; break;
		    case 'Apr': return '04'; break;
		    case 'May': return '05'; break;
		    case 'Jun': return '06'; break;
		    case 'Jul': return '07'; break;
		    case 'Aug': return '08'; break;
		    case 'Sep': return '09'; break;
		    case 'Oct': return '10'; break;
		    case 'Nov': return '11'; break;
			case 'Dec': return '12'; break;
			default: return '00'; break;
		} 
	}

</script>
		<div class="col-md-10">
			<ul class="breadcrumb" style="margin-bottom: 5px;">
				<li class="active">Calendário</li>
			</ul>
			<div class="row last-cont">
				<div class="col-md-12">
					<div id="calendar"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
