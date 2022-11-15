import './bootstrap';

// import bootstrap js
import 'bootstrap/dist/js/bootstrap.js'

// jquery 
$(function(){

    // add image upload input on click add more button
    $(document).on('click', ".add-btn", function(){
        var cloneRow = $('.image-div').first();
        var lastChild = $('.image-div').last();
        var clone = cloneRow.clone();
        lastChild.after(clone);
        clone.find('img').attr('src','/images/default-image.png')
    })

    // add features input
    $(document).on('click', ".features-btn", function(){
        var cloneRow = $('.features-div').first();
        var clone = cloneRow.clone();
        cloneRow.after(clone);
        cloneRow.find('input').val('')
    })

    // show uploaded image as preview
    if ($(".upload").length) {
        $(document).on('change', '.upload', function() {
            let reader = new FileReader();
            reader.onload = (e) => {
                var element = $(this).parent('.form-group').find('img')
                element.attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);

        });
    }

    // stop checbox to unchecked
    if ($(".tag-btn").length) {
        $(document).on("click", ".tag-btn", function (e) {
            var checkbox = $(this);
            if (!checkbox.is(":checked")) {
                e.preventDefault();
                return false;
            }
        });
    }

    // add tags
    if ($(".add-tag-btn").length) {
        $(document).on('click', ".add-tag-btn", function(){
            var length = $('.single-tag').length
            var value = $('.tags-input').val()
            var cloneRow = $('.single-tag').first();
            var clone = cloneRow.clone();
            var input = clone.find('input')
            var label = clone.find('label')
            if(value.length > 0){
                length = parseInt(length)
                input.val(value)
                input.attr('id', 'value_' + parseInt(length + 1))
                label.attr('for', 'value_' + parseInt(length+ 1))
                label.text(value)
                $('.tags').append(clone);
                $('.tags-input').val('')
            }
        })
    }

    // delete tags
    // if ($(".close-icon").length) {
    //     $(document).on("click", ".close-icon",  function () {
    //         var length = $('.single-tag').length
    //         if(length > 1){
    //             var parent = $(this).closest('.single-tag')
    //             parent.remove()
    //         }
    //     });
    // }


})