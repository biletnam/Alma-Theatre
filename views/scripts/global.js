$().ready(function(){

    /* Top Navigation Bar */

    //dropdown menu toggle animation
    $('#avatar').on('show.bs.dropdown', function(){
        $('#avatar .dropdown-menu').removeClass('bounceOut');
        $('#avatar .dropdown-menu').addClass('bounceIn');
    }).on('hide.bs.dropdown', function(){
        $('#avatar .dropdown-menu').removeClass('bounceIn');
        $('#avatar .dropdown-menu').addClass('bounceOut');
    });

});