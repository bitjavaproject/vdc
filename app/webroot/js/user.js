var User= function(){
	       return {
	    	 init:function(){
	    		 User.initUser();
	    	 },
	    	 initUser:function(){
	    		 
	    	 },
	    	
	    	 editUser:function(){
	    		 $('.editUser').click(function(ev){
	         		ev.preventDefault();
	         			var caste_id = $(this).closest('tr.userRow').find('input.UserId').val();
	         		
	         		$.fancybox.open({
	     			    'helpers'		:  {
	     			        'overlay' : {
	     			            'closeClick': false
	     			        }
	     			    },
	     				'closeBtn'		: true,
	     				'href'			: host_url + 'users/edit/' + caste_id, 
	     				'type'			: 'ajax',
	     			    'autoSize'		: false,
	     				'width'         : 600,
	     				'height'        : 'auto',
	     				'wrapCSS'		: 'fancybox-popup',
	     				'afterClose'	: function(){
	     			    }
	     			});
	         		
	         	});
	    	 },
	    	 editUserSubmit:function(){
	    		 
	    		 $('#editSubmit').click(function(){
	    			 var FormData=$('#UserEditForm').serializeArray();
	    				$.ajax({
	    	                type  : 'POST',
	    					data : FormData, 
	    	                url   : host_url + 'users/edit/' + user_id,
	    	                success  : function(response){
	    	                	var obj = $.parseJSON(response);
	    	                    alert(obj.msg);
	    	                    if(obj.success==1)
	    	                    	{
	    	                    	 $.fancybox.close();
	    	                    	  User.getUserInfo();
	    	                    	}
	    	                },
	    	                error  : function(){},
	    	                complete : function(){}
	    	               
	    					
	    				});
	    			 
	    		 });
	    		 
	    	 },
	    	 changeCredintials:function(){
	    		   $('.changeUserCredentials ').click(function(ev){
	    			    ev.preventDefault();
	    			    var FormData=$('#UserChangeCredentialsForm').serializeArray();
	    			    $.ajax({
	    	                type  : 'POST',
	    					data : FormData, 
	    	                url   : host_url + 'users/change_credentials/' ,
	    	                success  : function(response){
	    	                	var obj = $.parseJSON(response);
	    	                    alert(obj.msg);
	    	                    if(obj.success==1)
	    	                    	{
	    	                    	
	    	                    	$('form.login-form input[type=password]').each(function(){
	    	                    		$(this).val('');
	    	                    	});
	    	                    	 
	    	                    	
	    	                    	}
	    	                },
	    	                error  : function(){},
	    	                complete : function(){}
	    	               
	    					
	    				});
	    		   }) ;
	    	 },
	    	 deactiviateUser:function(){
	    		 $('.deactiviateUser').click(function(){
	    			 var FormData=$('#UserDeactiviateAccountForm').serializeArray();
	    			 $.ajax({
	    	                type  : 'POST',
	    					data : FormData, 
	    	                url   : host_url + 'users/deactiviate_account/' ,
	    	                success  : function(response){
	    	                	var obj = $.parseJSON(response);
	    	                    if(obj.success==1){
	    	                    	 User.userRedirect();
	    	                    	}
	    	                    else{
	    	                    	alert(obj.msg);
	    	                    }
	    	                },
	    	                error  : function(){},
	    	                complete : function(){}
	    	               
	    					
	    				});
	    		 });
	    	 },
	    	 userRedirect:function(){
	    		 window.location = host_url + 'users/logout';
	    	 },
	    	 getUserInfo:function(){
	    		 $.ajax({
	                 type  : 'POST',
	                 data : {},
	                 url   : host_url + 'users/get_user_info/' + user_id,
	                 success  : function(response){
	                	 $('.table tbody').replaceWith(response);
	                 },
	                 error  : function(){},
	                 complete : function(){}
	                });
	    		 
	    	 }
	       };
}();