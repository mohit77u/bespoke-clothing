import './bootstrap';

// import bootstrap js
import 'bootstrap/dist/js/bootstrap.js'

// jquery 
$(function(){

    $(".add-btn").on('click', function(){
        var cloneRow = $('.image-div').first();
        var clone = cloneRow.clone();
        cloneRow.after(clone);
    })

    $(".features-btn").on('click', function(){
        var cloneRow = $('.features-div').first();
        var clone = cloneRow.clone();
        cloneRow.after(clone);
    })

    if ($(".upload").length) {
        $(document).on('change', '.upload', function() {
 
            let reader = new FileReader();
            console.log($(this).parent('.form-group').find('img'))

            reader.onload = (e) => {
                console.log(e)
                var element = $(this).parent('.form-group').find('img')
                element.attr('src', e.target.result);
            }

            reader.readAsDataURL(this.files[0]);

        });
    }

})