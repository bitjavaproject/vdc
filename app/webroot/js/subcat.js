var Subcat = function () {
    return {
        //main function to initiate the module
        init: function () {
        	Subcat.initSubcat();
        },

        initSubcat: function () {
        	
        },
        editSubcat: function(){
        	$('.subcat').click(function(ev){
        		//ev.preventDefault();
        		alert($(this).attr('id'));
        		/*$.fancybox.open({
    			    'helpers'		:  {
    			        'overlay' : {
    			            'closeClick': false
    			        }
    			    },
    				'closeBtn'		: true,
    				'href'			: host_url + 'grade_exam_setups/edit/' + parent_id, 
    				'type'			: 'ajax',
    			    'autoSize'		: false,
    				'width'         : 600,
    				'height'        : 'auto',
    				'wrapCSS'		: 'fancybox-popup',
    				'afterClose'	: function(){
    			    }
    			});*/
        		
        	});
        },
        saveMedicalInfo: function(){
        	$('.submitMedicalInfo').click(function(ev){
        		ev.preventDefault();
        		var formData = $('#medicalinfoform').serializeArray();
        		$.ajax({
                    type  : 'POST',
					data : formData,
                    url   : host_url + 'students/medical_info', 
                    success  : function(response){
	                    var obj = $.parseJSON(response);
	                    alert(obj.msg);
	                    if(obj.success == 1){
	                    	$.fancybox.close();
	                    	MedicalInformation.getResponse();
	                    }
                    },
                    error  : function(){},
                    complete : function(){}
                   });
        	});
        },
        getResponse: function(){
        	$.ajax({
                type  : 'POST',
                data : {},
                url   : host_url + 'students/get_medical_info/'+ student_id,
                success  : function(response){
                	$('.stdmedinfo').replaceWith(response);
                },
                error  : function(){},
                complete : function(){}
               });
        },
    };
}();
