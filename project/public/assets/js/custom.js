$(document).ready(function() {
    var inputFile = document.getElementById('file');
    var previewContainer = document.getElementById('image-preview');
    var reset_btn = document.getElementById('reset_btn');
    var previewImage = previewContainer.querySelector('.image-preview_image');


    inputFile.addEventListener('change', function(){
    	var file = this.files[0];
    	console.log(file);

    	if (file) {
    		const reader = new FileReader();
    		previewContainer.style.display = 'block';
    		previewImage.style.display = 'block';
    		reset_btn.style.display = 'block';



    		reader.addEventListener('load',function(){
                console.log(this);
    			previewImage.setAttribute("src", this.result);
    		});
    		reader.readAsDataURL(file);
    	}
    	else{
    		previewContainer.style.display = null;
    		previewImage.style.display = null;
    	}
    })

    function postDetails(post){
        console.log(post);
    }

});


