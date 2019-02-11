/*deactive button*/
$('.givedeactive').click(function(e){
	e.preventDefault();
	var vals = [];
	    $("input[id^='Check-']:checkbox:checked").each(function(i){
	      vals[i] = $(this).attr("value")
	    });
		var urlz = "ketegori-berita/deactiveall";
		var idz = vals;
		if(idz ==""){
			swal({
                title: "Alerts",
                text: "You are not checked the checkbox."
            });
		}else{
	        e.preventDefault();
	            
	            	$.ajaxSetup({
					    headers: {
					        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					    }
					});
	            	$.ajax({
	            		type:"get",
	            		url:urlz +"/"+ idz,
	            		success: function(data){
	            			console.log('sukses',data);
	            			var check = [];
	            			swal({title:"Update!", text:"Your has been "+ data +" data to deactive.",type:"success"},function(){
	            				location.reload();	
	            			}); 
	            		},	
	            		error:function(data){
	            			console.log('Error',data);
	            			swal("error", "Error Ajax :)", "error");
	            		}
	            	});
	                
	         
        }
});

/*active button*/
$('.giveactive').click(function(e){
	e.preventDefault();
	var vals = [];
	    $("input[id^='Check-']:checkbox:checked").each(function(i){
	      vals[i] = $(this).attr("value")
	    });
		var urlz = "ketegori-berita/activeall";
		var idz = vals;
		if(idz ==""){
			swal({
                title: "Alerts",
                text: "You are not checked the checkbox."
            });
		}else{
	        e.preventDefault();
	            	$.ajaxSetup({
					    headers: {
					        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					    }
					});
	            	$.ajax({
	            		type:"get",
	            		url:urlz +"/"+ idz,
	            		success: function(data){
	            			console.log('sukses',data);
	            			var check = [];
	            			swal({title:"Update!", text:"Your has been "+ data +" data to active.",type:"success"},function(){
	            				location.reload();	
	            			}); 
	            		},	
	            		error:function(data){
	            			console.log('Error',data);
	            			swal("error", "Error Ajax :)", "error");
	            		}
	            	});
        }
});

/*delete all*/
$('.hapusany').click(function(e){
		var vals = [];
	    $("input[id^='Check-']:checkbox:checked").each(function(i){
	      vals[i] = $(this).attr("value")
	    });
		var urlz = "ketegori-berita/hapusall";
		var idz = vals;
		if(idz ==""){
			swal({
                title: "Alerts",
                text: "You are not checked the checkbox."
            });
		}else{
	        e.preventDefault();
	            swal({
	                title: "Are you sure?",
	                text: "You will not be able to recover this data!",
	                type: "warning",
	                showCancelButton: true,
	                confirmButtonColor: "#DD6B55",
	                confirmButtonText: "Yes, delete it!",
	                closeOnConfirm: false
	            }, function () {
	            	$.ajaxSetup({
					    headers: {
					        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					    }
					});
	            	$.ajax({
	            		type:"Delete",
	            		url:urlz +"/"+ idz,
	            		success: function(data){
	            			console.log('sukses',data);
	            			var check = [];
	            			swal({title:"Deleted!", text:"Your has been "+ data +" data to deleted.",type:"success"},function(){
	            				location.reload();	
	            			}); 
	            		},	
	            		error:function(data){
	            			console.log('Error',data);
	            			swal("error", "Error Ajax :)", "error");
	            		}
	            	});
	                
	            });
        }    
	});

/*delete one*/
$('.hapus').click(function (e) {
var url = "ketegori-berita/hapus";
var id = $(this).data("id");
e.preventDefault();
    swal({
        title: "Are you sure?",
        text: "You will not be able to recover this data!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it!",
        closeOnConfirm: false
    }, function () {
    	$.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
		});
    	$.ajax({
    		type:"Delete",
    		url:url +"/"+ id,
    		success: function(data){
    			console.log(data);
    			swal({title:"Deleted!", text:"Your data has been deleted.",type:"success"},function(){
        				location.reload();	
        			}); 	 
    		},
    		error:function(data){
    			console.log('Error',data);
    			swal("error", "Error Ajax :)", "error");
    		}
    	});
        
    });
});