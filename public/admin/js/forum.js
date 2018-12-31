//for Images
$('#wpm-image').click(openImage);

$('#imageFile').change(readURL(this));

$('#btnClose').click(resetInput);

document.getElementById("btnClose").addEventListener("click", function(event){
    event.preventDefault()
  });
document.getElementById("formSubmit").addEventListener("click", function(event){
    document.getElementById("forumPost").submit();
  });

function openImage(){
    $('#imageFile').trigger('click');
}

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#uploaded')
                .attr('src', e.target.result)
                .width(300)
                .height(200);
        };

        reader.readAsDataURL(input.files[0]);
        $('#uploaded').css('display','block');
        $('#wpm-image').css('display','none');
        $('#contain1').css('display','block');
    }
    
}
function resetInput(){
    $('#uploaded').attr('src','#');
    $('#contain1').css('display','none');
    $('#uploaded').css('display','none');
    $('#wpm-image').css('display','block');
}