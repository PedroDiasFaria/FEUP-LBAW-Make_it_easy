{include file="common/header.tpl" titulo="Calendário" calendario=1}
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

					dataString = "id="+{$s_id}+"&title="+title+"&start="+finalStart+"&end="+finalEnd;

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
			events: "../actions/get_calendar_events.php?id="+{$s_id},		
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
{include file="common/footer.tpl"}
