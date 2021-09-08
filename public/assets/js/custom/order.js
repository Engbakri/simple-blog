

$(document).ready(function(){

    $('.docname').change(function(e){
        e.preventDefault();
        var selected = $(this).find('option:selected');
        var extra = selected.data('price');

        var html =  `<input type="number" value="${extra}" name="appointment_price" class="form-control" id="inputName">`;

        $('.doc_vi_price').append(html);
        // call  calculate_total price

    });


}); //end of ready





