var Record = function () {
    return {
        //main function to initiate the module
        init: function () {
        	Record.initRecord();
        },

        initRecord: function () {
        	var controller;
        	var move = false;
        	var countNewRow = 0;
        	var colorboxHeight = 0;
        	var searchurl;
        	var xhrRequest;
        	
        	$('a[rel=add]').live('click', function(clickEvent) {
        		clickEvent.preventDefault();
        		table_row = '<tr id="newRow' + countNewRow + '" class="odd"></tr>';
        		if($('tr.odd').is(":visible")){
        			$(this).closest('div.portlet-title').next('div').find('tr:first').after(table_row);
        		}else {
        			$(this).closest('div.portlet-title').next('div').find('tbody').append(table_row);
        		}
        		$(table_row).insertBefore('tr.bulkActions');
        		$('#newRow' + countNewRow).load($(this).attr('href'));
        		countNewRow++;
        	});

        	$('a[rel=edit]').live('click',function(clickEvent) {
        		clickEvent.preventDefault();
        		$(this).closest('tr').load($(this).attr('href'));
        	});
        	
        	$('a[rel=move]').live('click',function(clickEvent) {
        		clickEvent.preventDefault();
        		$($(this).closest('tr').next('tr.move')).remove();
        		$($(this).closest('tr').next('tr.upload')).remove();
        		$(this).closest('tr').after('<tr id="newRow' + countNewRow + '" class="move"></tr>');
        		$('#newRow' + countNewRow).load($(this).attr('href'));
        		countNewRow++;
        		move = true;
        	});
        	
        	$('a[rel=upload]').live('click',function(clickEvent) {
        		clickEvent.preventDefault();
        		$($(this).closest('tr').next('tr.move')).remove();
        		$($(this).closest('tr').next('tr.upload')).remove();
        		$(this).closest('tr').after('<tr id="newRow' + countNewRow + '" class="upload"></tr>');
        		$('#newRow' + countNewRow).load($(this).attr('href'));
        		countNewRow++;
        		move = true;
        	});
        	
        	$('a[rel=cancel]').live('click', function(clickEvent) {
        		clickEvent.preventDefault();
        		$(this).closest('tr').remove();
        	});

        	$('a[rel=delete]').on('click',function(clickEvent) {
        		clickEvent.preventDefault();
        		DOM_Element = $(this);
        		alert("ok");
        		if (!confirm('Please confirm. It cannot be undone.')) {
        			return;
        		}
        		$.post($(this).attr('href'), function(result) {
        			if(result.substr(0, 7) == 'Success') {
        				DOM_Element.closest('tr').remove();
        				
        			} else if(result.substr(0, 6) == 'Failed') {
        				alert('Could not delete the record. Please try again.')
        			} else {
        				alert(result);
        			}
        			return;
        		});
        	});
        	$('a[rel=save]').live('click', function(clickEvent){
        		clickEvent.preventDefault();
        		var DOM_Element = $(this).closest('tr');
        		DOM_Element.load($(this).attr('href'), $("#" + DOM_Element.attr('id') + " :input").serializeArray(), 
        			function(result) {
        				if($('#content-location-left').length) {
        					$('#content-location-left').load(__HOST_NAME__ + "/admin/" + controller + "/locTree");
        				}
        				if(move) {
        					DOM_Element.closest('tr').prev().remove();
        					DOM_Element.closest('tr').remove();
        					move = false;
        				}
        				return;
        			}
        		);
        	});
        	
        	$("input#searchAdmin").live("focus", function() {
        		DOM_element = $(this);
        		var sValue;//search string
        		/*if(DOM_element.val()=='Start Search ...' || DOM_element.val()=='' ){
        			DOM_element.val('').css({'color':'#2A3FBC'});
        		}*/
        		DOM_element.keyup(function(){
        			sValue = DOM_element.val();
        			if (xhrRequest != null) {
        				xhrRequest.abort();
        				xhrRequest = null;
        			}
        			$('#tabs-1').html('<img class="loading" src="' + __HOST_NAME__ + '/img/loading.gif" />');
        			xhrRequest = $.ajax({
        				//url: __HOST_NAME__ + "/admin/" + controller + "/index",
        				url: __HOST_NAME__ + searchurl,
        				type: "POST",
        				data: ({name: sValue}), 
        				success: function(result){
        					$('#tabs-1').html(result);
        					xhrRequest = null;
        				}
        			});
        		});
        	}).live("blur",  function() {
        		DOM_element = $(this);
        		/*if(DOM_element.val() == ''){
        			$(this).val('Start Search ...').css({'color':'#666'});	
        		}*/
        	});

        	$('p.tree').live('click', function(){
        		DOM_element = $(this);
        		parentId = DOM_element.attr('id');
        		path = '/admin/' + controller + '/treeUpdate';
        		$('#tabs-1').html('<img class="loading" src="' + __HOST_NAME__ + '/img/loading.gif" />');
        		$('#tabs-1').load(__HOST_NAME__ + path,{
        			name: parentId
        		}, function(result){
        			$('#addnew').attr('href', __HOST_NAME__ + '/admin/' + controller + '/add/' + parentId);
        			return;
        		});
        	});
        	
        	$('a[rel=attach]').live('click', function(clickEvent) {
        		clickEvent.preventDefault();
        		$('#load_attach').load($(this).attr('href'), 
        				function(result) {
        					return;
        				}
        		);
        	});
        },
        
        jquerytrload: function () {
        	$('input.tr_clone_add').click(function() {
                $('.btnDel:disabled').removeAttr('disabled');
                inputs = $('.clonedInput tr:last').attr('id');
                inputs++;
                var c = $(this).parents('table').find('tr:last').clone(true);
                    c.find('select').attr('name','data[ClassTime]['+ (inputs)+ '][routine_id]' );
                    c.find('input#period').attr('name','data[ClassTime]['+ (inputs)+ '][period]' );
                    c.find('input#start').attr('name','data[ClassTime]['+ (inputs)+ '][start_time]' );
                    c.find('input#end').attr('name','data[ClassTime]['+ (inputs)+ '][end_time]' );
                    $(this).parents('table').find('tr:last').after(c);
                    $(this).parents('table').find('tr:last').attr('id', inputs);
            });
        },
        
        jquerytrdelete: function () {
        	$('.btnDel').click(function() {
                if (confirm('continue delete?')) {
                    --inputs;
                   // alert($('#sample_editable_1 tr').length);
                    var removed = $(this).closest('.odd');
                    //$(removed).next().css("background-color","red");
                    //$(removed).next().find('button').text(inputs);
                    $(this).closest('.odd').remove();
                    $('.btnDel').attr('disabled',($('#sample_editable_1 tr').length  < 3));
                }
            });
        },
        teacherFilteronLoad: function () {
        	$.each($('select.subject'), function( i, l ){
        		routine_id = $(this).val();
        		var value = $(this);
        		var cnt = value.parents('tr').attr('id');
        		$.ajax({
        			type : 'POST',
        			url  : classtime_url,
        			data : {routine_id : routine_id},
        			success : function(response){
        				value.closest('td').next('td').find('select.teacher').replaceWith(response);
        				value.closest('td').next('td').find('select.teacher').attr('name', 'data[ClassTime][' + cnt + '][teacher_id]');
        			},
        		});
        		});
        	
        },
        teacherFilter: function () {
        	$('.subject').change(function(){
        		routine_id = $(this).val();
        		var value = $(this);
        		var cnt = value.parents('tr').attr('id');
        		$.ajax({
        			type : 'POST',
        			url  : classtime_url,
        			data : {routine_id : routine_id},
        			success : function(response){
        				value.closest('td').next('td').find('select.teacher').replaceWith(response);
        				value.closest('td').next('td').find('select.teacher').attr('name', 'data[ClassTime][' + cnt + '][teacher_id]');
        			},
        		});
        	});
        },
        getgradewiseSubjectOnLoad : function(){
        		grade_id = $('#TestSetupGradeId').val();
        		$.ajax({
        			type : 'POST',
        			url  : subject_url,
        			data : {grade_id : grade_id},
        			success : function(response){
        				$('select#TestSetupSubjectId').replaceWith(response);
        			},
        		});
        },
        getgradewiseSubject : function(){
        	$('#TestSetupGradeId').change(function(){
        		grade_id = $('#TestSetupGradeId').val();
        		$.ajax({
        			type : 'POST',
        			url  : subject_url,
        			data : {grade_id : grade_id},
        			success : function(response){
        				$('select#TestSetupSubjectId').replaceWith(response);
        			},
        		});
        	});
        },
        getParent : function(){
        	$('#TestSetupSubjectId').change(function(){
        		subject_id = $('#TestSetupSubjectId').val();
        		grade_id = $('#TestSetupGradeId').val();
        		$.ajax({
        			type : 'POST',
        			url  : parent_url,
        			data : {grade_id : grade_id, subject_id : subject_id},
        			success : function(response){
        				$('select#parentList').replaceWith(response);
        			},
        		});
        	});
        },
        
    };
}();
