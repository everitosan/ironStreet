(function($){
    if(window.location.pathname.indexOf("products") !== -1) {

      //listener for productos modals
      $("#product_list").on('click', '.item', setModal );

      //listener for color change in alert
      $(document).on('click', '.showSweetAlert .color', changeColor );

      //Set divs with colors
      setColorDivs();
    }


  function changeColor() {
    $(this).parent().find('.color').removeClass('active');
    $(this).addClass('active');

  }

  function setColorDivs() {
    var $html = $('.hidden_data');
    var len  = $html.length;


    for(var i = 0 ; i < len; i++) {
      var $colors = $($html[i]).find('.colors');
      var listColors = $colors.html().split(',');
      var domColors = '';

      listColors.forEach((val, index) => {
        newVal = val.trim();
        if (index === 0 ) {
          domColors += '<div data-color="'+newVal+'" style="background:#'+newVal+'" class="color active">';
        } else {
          domColors += '<div data-color="'+newVal+'" style="background:#'+newVal+'" class="color">';
        }
        domColors += '</div>';
      });
      $colors.html(domColors);
    };

  }

  function getColorObject() {
    var colorsArray = $('#acf-colors').find('input[type="checkbox"]');

  }

  function setModal() {
    var $html = $(this).find('.hidden_data');

    swal({
      title: "Product Measurements",
      text: $html.html(),
      html: true,
      confirmButtonColor: "#EF494B",
      confirmButtonText: "Build a Quote"
    }, function(){

      var storageH = new storageHelper('cart');
      var productObj = {};

      productObj.title = $('.showSweetAlert').find('.title').text();
      productObj.image = $('.showSweetAlert').find('.images').find('img').attr('src');
      productObj.color = $('.showSweetAlert').find('.colors').find('.active').attr('data-color');
      productObj.sizes = {
        s: 0,
        m: 0,
        l: 0,
        xl: 0,
        xxl: 0
      };

      storageH.push(productObj);
      storageH.save();

      window.location.assign('build-a-quote');
    });
  }
})(jQuery);
