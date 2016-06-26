		<div class="portlet box green-meadow calendar">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-gift"></i>Calendar
				</div>
			</div>
			<div class="portlet-body">
				<div class="row">
				<?php if(in_array($this->Session->read('Auth.User.role_id'),array(1))){
				if($this->request->comtroller == 'holidays'){?>
					<div class="col-md-3 col-sm-12">
						<!-- BEGIN DRAGGABLE EVENTS PORTLET-->
						<h3 class="event-form-title">Holiday Note</h3>
						<div id="external-events">
							<form class="inline-form">
								<input type="text" value="" class="form-control" placeholder="Event Title..." id="event_title"/><br/>
								<a href="javascript:;" id="event_add" class="btn default">
								Add Note </a>
							</form>
							<hr/>
							<div id="event_box">
							</div>
							<label for="drop-remove">
							<input type="checkbox" id="drop-remove"/>remove after drop </label>
							<hr class="visible-xs"/>
						</div>
						
						<!-- END DRAGGABLE EVENTS PORTLET-->
					</div>
					<div class="col-md-9 col-sm-12">
						<div id="calendar" class="has-toolbar">
						</div>
					</div>
					<?php }else{ ?>
					<div class="col-md-12 col-sm-12">
						<div id="calendar" class="has-toolbar">
						</div>
					</div>
					
					<?php } }else{?>
						<div class="col-md-12 col-sm-12">
							<div id="calendar" class="has-toolbar">
							</div>
						</div>
					<?php }?>
				</div>
				<!-- END CALENDAR PORTLET-->
			</div>
		</div>
<script>
var save_url = '<?php echo Router::url(array('controller' => 'holidays', 'action' => 'save'));?>';

</script>
<?php echo $this->Html->script(array('event_calendar.js')); ?>
<script>
jQuery(document).ready(function() {       
   eventCalendar.init();
});
</script>