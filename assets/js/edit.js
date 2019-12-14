$(document).ready(function() {
    $('#select-category').selectize({
        maxItems: 3,
        plugins: ['remove_button'],
        delimiter: ',',
        persist: false,
        create: function(input) {
            return {
                value: input,
                text: input
            }
        }
    });

    $('#select-action').selectize({
        maxItems: 3,
        plugins: ['remove_button'],
        delimiter: ',',
        persist: false,
        create: function(input) {
            return {
                value: input,
                text: input
            }
        }
    });

    $( ".addField" ).click(function() {
        $("<input class='inputEdit' value=''>").insertBefore(this); 
        });
    
    $( ".btn-blue" ).click(function() {
        window.location.href = "single.php";
        });

    $('#chooseImg').click(function(){ 
        $('#imgUpload').trigger('click'); 
    });


});
function showImage(src, target) {
    var fr = new FileReader();

        fr.onload = function(){
target.src = fr.result;
}
    fr.readAsDataURL(src.files[0]);

}
function putImage() {
    var src = document.getElementById("imgUpload");
    var target = document.getElementById("chooseImg");
    showImage(src, target);
}