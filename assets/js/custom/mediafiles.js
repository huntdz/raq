$(function(){

	   var options = {
    loadingHtml: '<img src="loading.gif" alt="Loading" /> Loading...',
    padding: 20,
    nextSelector: 'a.jscroll-next:last',
    contentSelector: 'li'
};

$('.jscroll').jscroll(options);
       $("#file").on('change',function(e){
       	 e.preventDefault();
       	

       	 var image = $('#file')[0].files[0];
       	 var formData = new FormData();
       	 formData.append('image', image); 
	       	 $.ajax({
	            type:'POST',
	            url: "media/upload",
	            data:formData,
	            cache:false,
	            contentType: false,
	            processData: false, 
	            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
	            xhr: function() {
			    var xhr = new window.XMLHttpRequest();

			    xhr.upload.addEventListener("progress", function(evt) {
			      if (evt.lengthComputable) {
			        var percentComplete = evt.loaded / evt.total;
			        percentComplete = parseInt(percentComplete * 100);
			        $('.backgrounProgress').show();
			        $('.filemanager input').attr('disabled',true);
			        $('.progress-bar').html(percentComplete+'%');
			        $('.progress-bar').css('width',percentComplete+'%');	
			        if (percentComplete === 100) {
			        	$('.progress-bar').html();
			        }

			      }
			    }, false);

			    return xhr;
			  },
	            success:function(data){
	                console.log("success");
	                $('.filemanager input').removeAttr('disabled',false);
	                if(data.validates == "error"){
	                	 toastr.error(data.messages);
	                	 $('.backgrounProgress').hide();
	                }else if(data.validates == "success"){
	                	toastr.success(data.messages);
	                	location.reload();	
	                }else{
	                	//null
	                }
	            },
	            error: function(data){
	                console.log("error");
	            },
	            
	        });
     

       });
	

		var path = location.pathname.split('/');
		if (path[path.length-1].indexOf('.html')>-1) {
		  path.length = path.length - 1;
		}
		var app = path[path.length-3]; // if you just want 'three'
		// var app = path.join('/'); //  if you want the whole thing like '/one/two/three'
		var urlz = "media/ajax/all";
		var IdDocument = "all"
		loadImages(urlz,IdDocument);
		
		

	$('.nav-tabs a').on('click', function (e) {
		  e.preventDefault()
		  var newValue = $(this).attr('href').replace('#', '');
		  var urlz = "media/ajax/"+newValue;
		  loadImages(urlz,newValue);
	})


	function loadImages(urlz,IdDocument){
		  $.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		  	}
		  });
		  $.ajax({
				type:"get",
        		url:urlz,
        		beforeSend: function() {
        			$('#'+IdDocument).html('<div class="loadingshow">'+
					'<img id="loading-image" src="/'+app+'/images/loading.gif"/>'+
					'</div>');
	           	},

        		success: function(data){
        			if(data.length>0){
	        			var html_fill ='<ul>';
		        			for($i=0; $i<data.length; $i++){	
		        				html_fill +='<li>'+
											'<a href="#">'+
												'<div class="filesmedia">'+
													'<div class="filcontent">';	
								if(data[$i].mime_type =="images"){									
									html_fill	+='<img src="'+data[$i].path+'/'+data[$i].url+'">';
								}else if(data[$i].mime_type =="video"){	
									html_fill	+='<i class="icon icon-media"></i>';	
								}else{
									html_fill	+='<i class="icon icon-document"></i>';	
								}
								html_fill	+='</div>'+
													'<div class="Titlefile">'+data[$i].name+''+
														'<span>Added: '+data[$i].created_at+'</span>'+
													'</div>'+
												'</div>'+
											'</a>'+
										'</li>';
		        			}
	        			html_fill +='</ul>';
	        			$("#"+IdDocument).html(html_fill);
        			}else{
        				$("#"+IdDocument).html('<div style="text-align:center"><div style="font-size:80px">'+
        					'<i class="icon icon-sample-images"></i></div>'+
        					'<div style="margin-bottom:30px">Media Files is empty</div></div>');
        			}
        		},	
        		error:function(data){
        			console.log('Error',data);
        			
        		}
			});
		}
});