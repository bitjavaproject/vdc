var Calendar = function() {

	return {
        //main function to initiate the module
		initDashboard: function() {
            Calendar.initCalendarDashboard();
        },

        initCalendarDashboard: function() {

            if (!jQuery().fullCalendar) {
                return;
            }

            var h = {};

            if ($('#calendar').width() <= 400) {
                $('#calendar').addClass("mobile");
                h = {
                    left: 'title, prev, next',
                    center: '',
                    right: 'month'
                };
            } else {
                $('#calendar').removeClass("mobile");
                h = {
                    left: 'title',
                    center: '',
                    right: 'prev,month, next'
                };
            }

            $('#calendar').fullCalendar('destroy'); // destroy the calendar
            $('#calendar').fullCalendar({ //re-initialize the calendar
            	events 		: host_url + 'holidays/view/',
                defaultView	: 'month', 
                slotMinutes	: 15,
                header		: h,
                eventClick	: function(event) {
	          		$.fancybox.open({
	    			    'helpers'		:  {
	    			        'overlay' : {
	    			            'closeClick': false
	    			        }
	    			    },
	    				'closeBtn'		: true,
	    				'href'			: host_url + 'holidays/view_event/' + event.id,
	    				'type'			: 'ajax',
	    			    'autoSize'		: false,
	    				'width'         : 600,
	    				'height'        : 'auto',
	    				'wrapCSS'		: 'fancybox-popup',
	    				'afterClose'	: function(){}
	    			});
                },
            });
            /*showDate: function(){
            	$('.fc-month-button').text($('.fc-left').text()) ;
            	$('.fc-next-button, .fc-prev-button').click(function(){
            		$('.fc-month-button').text($('.fc-left').text()) ;
            	});
            }*/
        },
        
        init: function() {
            Calendar.initCalendar();
        },

        initCalendar: function() {

        	if (!jQuery().fullCalendar) {
                return;
            }
            var date = new Date();
            var d = date.getDate();
            var m = date.getMonth();
            var y = date.getFullYear();
            var tempVar = "";

            var h = {};

            if ($('#calendar').parents(".portlet").width() <= 720) {
                $('#calendar').addClass("mobile");
                h = {
                    left: 'title, prev, next',
                    center: '',
                    right: 'month'
                };
            } else {
                $('#calendar').removeClass("mobile");
                h = {
                    left: 'title',
                    center: '',
                    right: 'prev,month,next'
                };
            }

            var initDrag = function (el) {
                // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
                // it doesn't need to have a start or end
                var eventObject = {
                    title: $.trim(el.text()) // use the element's text as the event title
                };
                // store the Event Object in the DOM element so we can get to it later
                el.data('eventObject', eventObject);
                // make the event draggable using jQuery UI
                el.draggable({
                    zIndex: 999,
                    revert: true, // will cause the event to go back to its
                    revertDuration: 0 // original position after the drag
                });
            };

            var addEvent = function (title) {
                title = title.length == 0 ? "Untitled Event" : title;
                var html = $('<div class="external-event label label-default">' + title + '</div>');
                jQuery('#event_box').append(html);
                initDrag(html);
            };

            $('#external-events div.external-event').each(function () {
                initDrag($(this))
            });

            $('#event_add').unbind('click').click(function () {
            	var title = $('#event_title').val();
                addEvent(title);
            });
            $('#calendar').fullCalendar('destroy'); // destroy the calendar
            $('#calendar').fullCalendar({ // re-initialize the calendar
            	events		: host_url + 'holidays/view/',
                header		: h,
                defaultView	: 'month',
                slotMinutes	: 15,
                editable	: true,
                eventClick	: function(event) {
                	if(role_id == 1 || role_id == 2){
                	document.getElementById('msg').innerHTML = '';
	          		$.fancybox.open({
	    			    'helpers'		:  {
	    			        'overlay' : {
	    			            'closeClick': false
	    			        }
	    			    },
	    				'closeBtn'		: true,
	    				'href'			: host_url + 'holidays/edit/' + event.id + "?date=" + moment(event.start).format('YYYY-MM-DD'),
	    				'type'			: 'ajax',
	    			    'autoSize'		: false,
	    				'width'         : 600,
	    				'height'        : 'auto',
	    				'wrapCSS'		: 'fancybox-popup',
	    				'afterClose'	: function(){
	    					$('#calendar').fullCalendar('destroy'); 
	                        Calendar.init(host_url + 'holidays/view/');
	                        Calendar.replaceSummary();  //reload summary part
	                        $('#calendar').fullCalendar('gotoDate', moment(event.start).format('YYYY-MM-DD'));
	    			    }
	    			});
                	}
                },
                eventDrop	: function(event, delta, revertFunc) {
                	if(role_id == 1 || role_id == 2){
                	document.getElementById('msg').innerHTML = '';
                	var date =     	  moment(event.start).format('YYYY-MM-DD');
                	$.ajax({
	                	type: "POST",
	                	url: host_url +'holidays/update',
	                	data: {id : event.id, date: date},
	                	success: function(response) {
	                		 var obj = $.parseJSON(response);
	                		 alert(obj.msg);
	                	}
                	});
                	}
                },
                dayClick	: function(date, allDay, jsEvent, view) {
                	if(role_id == 1 || role_id == 2){
                	document.getElementById('msg').innerHTML = '';
                		$.fancybox.open({
            			    'helpers'		:  {
            			        'overlay' : {
            			            'closeClick': false
            			        }
            			    },
            				'closeBtn'		: true,
            				'href'			: host_url + 'holidays/add?date=' + moment(date).format('YYYY-MM-DD'),
            				'type'			: 'ajax',
            			    'autoSize'		: false,
            				'width'         : 600,
            				'height'        : 'auto',
            				'wrapCSS'		: 'fancybox-popup',
            				'afterClose'	: function(){
            					$('#calendar').fullCalendar('destroy'); 
            					Calendar.init(host_url + 'holidays/view/');
            					Calendar.replaceSummary();  //reload summary part
            					$('#calendar').fullCalendar('gotoDate', date);
            			    }
            			});
                	}
                },
            });
        },
        eventHolidaySave: function(){
        	$('#submitbtn').click(function(ev){
        		ev.preventDefault();
        		var frmdata = $('#eventholidayAdd').serializeArray();
        		var start_time = $('#HolidayStartTime').data("timepicker").getTime();
        		var end_time   = $('#HolidayEndTime').data("timepicker").getTime();
        		var sHr		   = parseInt(start_time.substr(0,start_time.indexOf(":")));
        		var sMin       = parseInt(start_time.substr(start_time.indexOf(":")+1));
        		var eHr		   = parseInt(end_time.substr(0,end_time.indexOf(":")));
        		var eMin       = parseInt(end_time.substr(end_time.indexOf(":")+1));
        		if((sMin+(sHr*60)) > (eMin+(eHr*60))){
        			alert('The Start Time cannot be greater than End Time');
        		}else{
        			$.ajax({
                        type  : 'POST',
                        data : frmdata,
                        url   : $('#eventholidayAdd').attr('action'),
                        success  : function(response){
    	                    var obj = $.parseJSON(response);
    	                    if(obj.success == 1) {
    	                    	alert(obj.msg);
    	                    	$('.fancybox-close').trigger('click');
    		                    $('#calendar').fullCalendar('destroy'); // destroy the calendar
    		                    Calendar.init(host_url + 'holidays/view/');
    		                    Calendar.replaceSummary();  //reload summary part
    	                    } else {
    	                    	alert(obj.msg);
    	                    }
                        },
                        error  : function(){},
                        complete : function(){}
                       });
        		}        	
        	});
        },
        eventHolidayEdit: function(){
        	$('#editbtn').click(function(ev){
        		ev.preventDefault();
        		var frmdata = $('#eventholidayEdit').serializeArray();
        		var start_time = $('#HolidayStartTime').data("timepicker").getTime();
        		var end_time   = $('#HolidayEndTime').data("timepicker").getTime();
        		var sHr		   = parseInt(start_time.substr(0,start_time.indexOf(":")));
        		var sMin       = parseInt(start_time.substr(start_time.indexOf(":")+1));
        		var eHr		   = parseInt(end_time.substr(0,end_time.indexOf(":")));
        		var eMin       = parseInt(end_time.substr(end_time.indexOf(":")+1));
        		if((sMin+(sHr*60)) > (eMin+(eHr*60))){
        			alert('The Start Time cannot be greater than End Time');
        		}else{
        		$.ajax({
                    type  : 'POST',
                    data : frmdata,
                    url   : $('#eventholidayEdit').attr('action'),
                    success  : function(response){
                    var obj = $.parseJSON(response);
                    if(obj.success == 1) {
                    	alert(obj.msg);
                    	$('.fancybox-close').trigger('click');
	                    $('#calendar').fullCalendar('destroy'); // destroy the calendar
	                    Calendar.init(host_url + 'holidays/view/');
	                    Calendar.replaceSummary();  //reload summary part
                    } else {
                    	alert(obj.msg);
                    }
                    },
                    error  : function(){},
                    complete : function(){
                    
                     }
                   });
        		}
        	});
        },
        eventHolidayDelete: function(){
        	$('#deletebtn').click(function(ev){
        		ev.preventDefault();
        		var id = $('#HolidayId').val();
        		$.ajax({
                    type  : 'POST',
                    url   : host_url + 'holidays/delete/'+id,
                    success  : function(response){
                    	Calendar.replaceSummary();  //reload summary part
                    var obj = $.parseJSON(response);
                    if(obj.success == 1) {
                    	alert(obj.msg);
                    	$('.fancybox-close').trigger('click');
	                    $('#calendar').fullCalendar('destroy'); // destroy the calendar
	                    Calendar.init(host_url + 'holidays/view/');
                    } else {
                    	alert(obj.msg);
                    }
                    },
                    error  : function(){},
                    complete : function(){
                    
                     }
                   });
        	});
        },
        summary: function(){
        	$('.fc-month-button').text($('.fc-left').text()) ;
        	Calendar.replaceSummary();
        	$('.fc-next-button, .fc-prev-button').click(function(){
        		$('.fc-month-button').text($('.fc-left').text()) ;
        		Calendar.replaceSummary();
        	});
        },
        replaceSummary: function(){
        	var currDate = $('.fc-left').text();
        	$.ajax({
                type 	 : 'POST',
                data  	 : {date: currDate},
                url  	 : host_url + 'holidays/get_events_holidays',
                success  : function(response){
                	$('#summary').replaceWith(response);
                },
                error    : function(){},
                complete : function(){
                 }
               });
        },
        //for showing date in the title bar between next and previous button
        showDate: function(){
        	$('.fc-month-button').text($('.fc-left').text()) ;
        	$('.fc-next-button, .fc-prev-button').click(function(){
        		$('.fc-month-button').text($('.fc-left').text()) ;
        	});
        }
    };
}();