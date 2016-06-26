var Notice=function(){
	       return{
	    	 init:function(){
	    		 Notice.initNotice();
	    	 } ,
	    	 initNotice:function(){
	    		 
	    	 },
	    	 deleteNotice:function(){
	    		 $('.deleteNotice').click(function(ev){
	    			 ev.preventDefault();
	    			 
	    			 if (confirm('Are you sure you want to delete Notice ?' )) {
	 	    			var notice_id = $(this).closest('tr.rowNotice').find('input.NoticeId').val();
	 	        		//alert(address_id);
	 	    		$.ajax({
	 	                type  : 'POST',
	 	                data : {},
	 	                url   : host_url + 'notices/delete/' + notice_id,
	 	                success  : function(response){
	 	                    var obj = $.parseJSON(response);
	 	                    alert(obj.msg);
	 	                    if(obj.success == 1){
	 	                    	$.fancybox.close();
	 	                    	Notice.getNoticeInfo();
	 	                    }
	 	                },
	 	                error  : function(){},
	 	                complete : function(){}
	 	               });
	 	    		}
	    		 });
	    	 },
	    	 getNoticeInfo:function(){
	    		 $.ajax({
	 	                type  : 'POST',
	 	                data : {},
	 	                url   : host_url + 'notices/get_notice_info/' ,
	 	                success  : function(response){
	 	                  ('.noticeInfo').replaceWith(response);
	 	                },
	 	                error  : function(){},
	 	                complete : function(){}
	 	               });
	    	 }
	       };
}();