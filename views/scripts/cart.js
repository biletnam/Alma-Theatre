$().ready(function(){

    //slide tabs
    $('#process-tabs').scrollLeft($('#process-tabs .active').position().left);

    //select options
    $('#right-bar select').niceSelect();

    //total calculation
    var amount = $('#amount');
    var total = $('#total_price');
    var select = $('select[name="amount"]');
    var selected = (parseInt(select.val()) > 0) ? parseInt(select.val()) : 0;
    amount.text(selected);
    total.text(selected*15);
    select.change(function(){
        var selected = (parseInt(select.val()) > 0) ? parseInt(select.val()) : 0;
        amount.text(selected);
        total.text(selected*15);
    });
    calculate_total();

    //submit form
    $('#submit').click(function(){
        $('#payment').submit();
    });

});

function calculate_total(){
    var total = $('#total');
    var ticket = $('#total_price');
    var package = $('#total_package');

    total.text(parseInt(ticket.text()) + parseInt(package.text()));
}