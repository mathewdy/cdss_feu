$(document).ready(function(){
    $('#check_address').click(function() {
        var check_status = this.checked;
        if (check_status == true){
            document.getElementById('address2').value = document.getElementById ('address1').value;
        }else{
            document.getElementById('address2').value = "";
        }
    })
});