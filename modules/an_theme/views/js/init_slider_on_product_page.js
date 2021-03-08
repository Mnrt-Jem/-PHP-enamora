
$(document).ready(function(){
  $('#js-product-block-slider-product-page').add(".featured-products.mt-3 .products").each(function(i, val) {
    $(this).addClass("owl-carousel");
    var anhproductSlider_id;
    if(!$(this).attr('id')){
      anhproductSlider_id = $(this);
    }
    else{
      anhproductSlider_id = '#' + $(this).attr('id');
    }
    let responsive_items;
    if ($(anhproductSlider_id).data('items') == 1) {
      responsive_items = {
        0: {
          items: 2,
          margin: 0,
        },
        480: {
          items: 2,
          margin: 0,
        },
        600: {
          items: 2,
          margin: 0,
        },
        850: {
          items: 3,
          margin: 30,
        },
        1200: {
          items: 4,
          margin: 30,
        }
      }
    } else {
      responsive_items = {
        0: {
          items: 1,
          margin: 30,
        },
        480: {
          items: 1,
          margin: 30,
        },
        600: {
          items: 2,
          margin: 30,
        },
        850: {
          items: 3,
          margin: 30,
        },
        1200: {
          items: 4,
          margin: 30,
        }
      }
    }
    $(anhproductSlider_id).owlCarouselAnTB({
      loop: false,
      nav: true,
      dots: true,
      navText: ['<i class="material-icons">&#xE314;</i>','<i class="material-icons">&#xE315;</i>'],
      responsive:  responsive_items,
    });
  });
});
