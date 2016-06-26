var BookIssue = function () {
	          return{
	        	  
	        	  checkBookStatus:function(){
	        		  $('#bookNameAuto').on('change',function(){
	        			 
	        			  
	        			  $.ajax({
	              			type : 'POST',
	              			url  : host_url + 'book_issues/check_book_stock/'+$('#bookNameValue').val(),
	              			data : {},
	              			success : function(response){
	              				if(response=='false'){
	              					alert('Sorry,book is out of stock');
	              					$('.bookIssueSubmit button[type="submit"]').prop('disabled', true);
	              				}
	              			},
	              		});
	        		  });
	        	  },
	        	  selectUser:function(){
	        		  
	        			// alert($(this).val()); 
	        		 
	        		     $(' input[type="radio"]').each(function(){
	        		    	 if($(this).is(':checked')){
	        		    		 $.ajax({
				    	                type  : 'POST',
				    					data : {}, 
				    	                url   : host_url + 'book_issues/select_user/' + $(this).val(),
				    	                success  : function(response){
				    	                	$(' .member_name').replaceWith(response);
				    	                },
				    	                error  : function(){},
				    	                complete : function(){}
				    	               
				    				});
	        		    	 }else{
	        		    		 
	        		    	 }
	        		      });
	        		 
	        		
	        	  },
	        	  selectUserChange:function(){
	        			// 
	        		  $('.selectUser').on('change',function(){
	        			  
	        			  $.ajax({
		    	                type  : 'POST',
		    					data : {}, 
		    	                url   : host_url + 'book_issues/select_user/' +  $(this).val(),
		    	                success  : function(response){
		    	                	$(' .member_name').replaceWith(response);
		    	                },
		    	                error  : function(){},
		    	                complete : function(){}
		    	               
		    				});
	        			  
	        		  });
	        				
	        	  },
	        	  getBookDetails:function(book_id){
	        			 if(book_id!=null){
	        				 
	        				 $.ajax({
			    	                type  : 'POST',
			    					data : {}, 
			    	                url   : host_url + 'book_issues/get_book_details/' + book_id,
			    	                success  : function(response){
			    	                	$('.book_details').html(response);
			    	                },
			    	                error  : function(){},
			    	                complete : function(){}
			    	               
			    					
			    				});
	        			 }
	        		 
	        	  },
	        	  getUserBookIssuedDetails:function( user_id){
	        		if(user_id!=null){
	        			 $.ajax({
		    	                type  : 'POST',
		    					data : {}, 
		    	                url   : host_url + 'book_issues/get_user_book_issue_details/' + user_id,
		    	                success  : function(response){
		    	                	$('.user_details').html(response);
		    	                },
		    	                error  : function(){},
		    	                complete : function(){}
		    	               
		    					
		    				});
	        		}
	        	  },
	        	  getBookCopies:function( book_id){
	        		  if(book_id!=null){
	        			  $.ajax({
		    	                type  : 'POST',
		    					data : {}, 
		    	                url   : host_url + 'book_issues/get_book_copies/' + book_id +'/'+ 1 +'/'+ 0,
		    	                success  : function(response){
		    	                	$('.book_copy_id').replaceWith(response);
		    	                },
		    	                error  : function(){},
		    	                complete : function(){}
		    	               
		    					
		    				});
	        		  }
	        	  },
	        	  getBookCopyUser:function(book_id){
	        			
	        			  $('.book_copy_id_issue').on('change',function(){
	        				  copy_id	=	$('.book_copy_id_issue').val();
	        				  $.ajax({
			    	                type  : 'POST',
			    					data : {}, 
			    					url   : host_url + 'book_issues/get_book_copy_issued/' + copy_id +'/' +book_id,
			    	                success  : function(response){
			    	                	$('.user_book_issue_information').html(response);
			    	                },
			    	                error  : function(){},
			    	                complete : function(){
			    	                	
			    	                	BookIssue.getUserBookIssuedDetails($(".book_user_id").val());
			    	                }
			    	               
			    					
			    				});
	        				  
	        			  });
	        		
	        		 
	        	  },
	        	  getBookCopiesIssued:function(book_id){
	        		  if(book_id!=null){
	        			  $.ajax({
		    	                type  : 'POST',
		    					data : {}, 
		    					url   : host_url + 'book_issues/get_book_copies/' + book_id +'/'+ 0 +'/'+ 1,
		    	                success  : function(response){
		    	                	$('.book_copy_id_issue').replaceWith(response);
		    	                },
		    	                error  : function(){},
		    	                complete : function(){
		    	                	BookIssue.getBookCopyUser(book_id);
		    	                }
		    				});
	        		  }
	        	  }
	          };
}();