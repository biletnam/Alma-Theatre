$().ready(function(){

    $('.add').click(function(){
        //change input
        var input = $(this).siblings('input');
        var val = parseInt(input.val());

        if(val+1 < 10){
            input.val(val+1);

            //calculate price
            var price = $(this).parent().siblings('.price');
            var data = price.data('price');
            var package_price = data * input.val();
            price.children('span').text(package_price.toFixed(2));

            //total package price
            var package = $('#total_package');
            package.text(parseInt(package.text()) + data);

            calculate_total();
        }
    });

    $('.minus').click(function(){
        //change input
        var input = $(this).siblings('input');
        var val = parseInt(input.val());

        if(val-1 >= 0){
            input.val(val-1);

            //calculate price
            var price = $(this).parent().siblings('.price');
            var data = price.data('price');
            var package_price = data * input.val();
            price.children('span').text(Math.max(package_price.toFixed(2), data));

            //total package price
            var package = $('#total_package');
            package.text(parseInt(package.text()) - data);

            calculate_total();
        }
        
    });

});