$(document).on('click', '.toggle-menu', function(){
    $(this).toggleClass('on');
    $('.headernav').slideToggle();
    return false; // non important
});





$(document).ready(function(){
    $('.slider').slider({ interval:2000});
});




  setTimeout(function() {

    var $container = $('#isotope-list'); //The ID for the list with all the blog posts
    $container.isotope({ //Isotope options, 'item' matches the class in the PHP
        itemSelector : '.item', 
        layoutMode : 'masonry',

    });


    //Add the class selected to the item that is clicked, and remove from the others
    var $optionSets = $('#filters'),
        $optionLinks = $optionSets.find('a');

    $optionLinks.click(function(){
        var $this = $(this);
        // don't proceed if already selected
        if ( $this.hasClass('selected') ) {
            return false;
        }
        var $optionSet = $this.parents('#filters');
        $optionSets.find('.selected').removeClass('selected');
        $this.addClass('selected');

        //When an item is clicked, sort the items.
        var selector = $(this).attr('data-filter');
        $container.isotope({ filter: selector });

        return false;
    });

 }, 100)

//slideratelier


$(function() {
    $(".rslides").responsiveSlides();
  });