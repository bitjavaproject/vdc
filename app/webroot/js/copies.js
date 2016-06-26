var Copies	=	function(){
					return{
						 init:function(){
							 Copies.initCopies();
						 },
						 initCopies:function(){
							 
						 },
						 addBookCopies:function(){
							 $('.addCopies').click(function(){
								if($('.bookQuantity').val()!=''){
									
									var quantity	=	$('.bookQuantity').val();
									if(isNaN(quantity)){
										alert('Is not number');	
									}else{
										$('.copies').html('');
										for(var i=1;i<=quantity;i++){
											$('.copies').append("<div class='form-group'>"
										+"<label class='col-md-3 control-label'>Book Accession"+i+"</label>"+
										"<div class='col-md-4'>"+
											"<input type='text'class='form-control'name='data[Book][quantity][]'/>"
										+"</div>"+
								"</div>");
										}
									}
									
								}
							 });
						 },
					};
}();