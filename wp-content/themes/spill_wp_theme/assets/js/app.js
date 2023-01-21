jQuery( document ).ready( function( $ ) {
    // $() will work as an alias for jQuery() inside of this function
    //your code goes here

///DropDown



$(".menu-item-has-children").hover(function(){
    console.log("hell ya");
    // $(this).css("background-color", "red");
    $(this).children('ul').slideToggle();
    // $(".sub-menu").slideToggle();
})






//////// 👇 👇 👇 👇  OLD OLD OLD 👇 👇 👇 👇 ///////////////

$(".drop-down-cont").hide();

$("#menu-btn").click(function(){

    $(".drop-down-cont").slideToggle();
    $(".drop-down-cont").mouseleave(function() {
            $(".drop-down-cont").fadeOut();
    })
})

$(".drop-menu").hide();

$("#drop-menu-btn").click(function(){
  $(".drop-menu").slideToggle('fast');
  $(".drop-menu").mouseleave(function() {
          $(".drop-menu").fadeOut();
        })
})


////tours
$(".tour-info").hide();
$(".tour-btn").click(function(){
//    $(".tour-info").not(this).slideUp();
    $(".tour-info", this).slideToggle();
//    $(this, ".tour-btn").off();
//    $(".tour-info").not(this).on();
})


////shop
$(".shop-item").hide();

$(".shop-btn").click(function(){
    $(".shop-item", this).slideToggle();
})


////////Volunteer
$("#vol-info").hide();
$("#vol-btn").click(function(){
    $("#vol-info").slideToggle();
})


$("#internship").hide();
$("#intern-btn").click(function(){
    $("#internship").slideToggle();
})


//browser-template
$("#safari").hide();

$("#exchange-btn").click(function () {
    $("#chrome").toggle('slow');
    $("#safari").toggle('slow');
});


} );
///doc readey end
