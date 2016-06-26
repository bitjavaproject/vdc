var Filter = function () {
    return {
        //main function to initiate the module
        init: function () {
        	Filter.initFilter();
        },

        initFilter: function () {
        	
        },
        
        getSection : function(requiredField, teacher_id){ //requiredField is a flag to set if the returned section list is mandatory or not
        	$('.grade_id').change(function(){
        		//alert(section_url);
        		grade_id = $(this).val();
        		//teacher_id is false when it is not teacher who is currently logged in
        		$.ajax({
        			type : 'POST',
        			url  : section_url,
        			data : {requiredField : requiredField, grade_id : grade_id, teacher_id : teacher_id},
        			success : function(response){
        				$('select.section_id').replaceWith(response);
        			},
        		});
        		//alert(grade_id);
        		
        	});
        },
        getSubject : function(requiredField, teacher_id){
        	if(teacher_id != 'false'){
        		$('.section_id').on('change',function(){
            		grade_id	= $('.grade_id').val();
            		section_id = $('.section_id').val();
            		$.ajax({
            			type : 'POST',
            			url  : subject_url,
            			data : {requiredField : requiredField, grade_id : grade_id, section_id : section_id},
            			success : function(response){
            				$('select.subject_id').replaceWith(response);
            			},
            		});
            	});
        	}else{
        		$('.grade_id').on('change',function(){
        			
            		grade_id	= $('.grade_id').val();
            		//section_id = $(this).val();
            		$.ajax({
            			type : 'POST',
            			url  : subject_url,
            			data : {requiredField : requiredField, grade_id : grade_id},
            			success : function(response){
            				$('select.subject_id').replaceWith(response);
            			},
            		});
            	});
        	}
        },
        getSubjectWithGrade : function(){
        	$('.grade_id').on('change',function(){
        		grade_id = $(this).val();
        		$.ajax({
        			type : 'POST',
        			url  : subject_url,
        			data : {grade_id : grade_id},
        			success : function(response){
        				$('select.subject_id').replaceWith(response);
        			},
        		});
        	});
        },
        getParentSubject : function(){
        	$('.subject_id').on('change',function(){
        		grade_id	= $('.grade_id').val();
        		subject_id = $(this).val();
        		$.ajax({
        			type : 'POST',
        			url  : parent_subject_url,
        			data : {grade_id : grade_id,  subject_id : subject_id},
        			success : function(response){
        				$('select.parent_id').replaceWith(response);
        			},
        		});
        	});
        },
        getExamterm : function(){
        	$('#ClassInfoGradeId').change(function(){
        		grade_id = $('#ClassInfoGradeId').val();
        		$.ajax({
        			type : 'POST',
        			url  : exam_term_url,
        			data : {grade_id : grade_id},
        			success : function(response){
        				$('select#exam').replaceWith(response);
        			},
        		});
        	});
        },
        getoptSubject : function(){
        	$('.grade_id').on('change',function(){
        		//grade_id = $(this).closest('.form-group').find('.grade_id').val();
        		grade_id	= $('.grade_id').val();
        		section_id = $(this).val();
        		$.ajax({
        			type : 'POST',
        			url  : optional_subject_url,
        			data : {grade_id : grade_id},
        			success : function(response){
        				$('select.subjectid').replaceWith(response);
        			},
        		});
        	});
        },
    };
}();
