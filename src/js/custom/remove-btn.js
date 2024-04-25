$(document).ready(function () {


    $(document).on('click', '.remove-button' , function(){
        $(this).closest('.additional').remove();
    });


    $(document).on('click', '.add-more-form', function (){
        $('.main-form').append('<div class="additional col-lg-4">\
            <br>\
            <label for="">First Name:</label>\
            <input type="text" class="form-control" name="first_name_infant[]">\
            <br>\
            <label for="">Middle Name:</label>\
            <input type="text" class="form-control" name="middle_name_infant[]">\
            <br>\
            <label for="">Last Name:</label>\
            <input type="text" class="form-control" name="last_name_infant[]">\
            <br>\
            <label for="">Suffix:</label>\
            <input type="text" class="form-control" name="suffix_infant[]">\
            <br>\
            <label for="">Date of Birth:</label>\
            <input type="date" class="form-control" name="date_of_birth_infant[]" id="">\
            <br>\
            <label for="">Image:</label>\
            <label for="">Gender:</label>\
            <select class="form-control" name="gender_infant[]" id="">\
                <option value="">-Select-</option>\
                <option value="1">Male</option>\
                <option value="2">Female</option>\
            </select>\
            <br>\
            <label for="">Marital Status:</label>\
            <select class="form-control" name="marital_status_infant[]" id="">\
                <option value="">-Select-</option>\
                <option value="1">Single</option>\
                <option value="2">Married</option>\
                <option value="3">Divorced</option>\
                <option value="4">Separated</option>\
            </select>\
            <br>\
            <input type="file" name="image_infant[]" multiple="">\
            <br>\
            <input type="submit" class="remove-button" name="remove_infant" value="Remove" >\
            </div>\
            ');
    });

});