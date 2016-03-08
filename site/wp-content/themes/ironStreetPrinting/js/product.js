(function($){
  //listener for productos modals
  $("#product_list").on('click', '.item', setModal );

  //listener for color change in alert
  $(document).on('click', '.showSweetAlert .color', changeColor );

  //Set divs with colors
  setColorDivs();






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
          domColors += '<div style="background:#'+newVal+'" class="color active">';
        } else {
          domColors += '<div style="background:#'+newVal+'" class="color">';
        }
        domColors += '</div>';
      });
      $colors.html(domColors);
    };

  }

  function setModal() {
    var $html = $(this).find('.hidden_data');

    swal({
      title: "Product Measurements",
      text: $html.html(),
      html: true,
      showCancelButton: true,
      confirmButtonColor: "#EF494B",
      confirmButtonText: "Build a Quote"
    }, function(){

      var Storage = localStorage.getItem('cart');
      var productObj = {};
      var StorageString = '';
      var StorageLen = 0;


      if (Storage === null) {
        Storage = Array();
        productObj.id = 0;
      } else {
        Storage = Storage.split('Ω');
        StorageLen = Storage.length;

        Storage.forEach((val, index, array)=> {
          array[index] = JSON.parse(val);
        });
        productObj.id = Storage[StorageLen-1].id + 1;
      }

      productObj.title = $('.showSweetAlert').find('.title').text();
      productObj.image = $('.showSweetAlert').find('.images').find('img').attr('src');
      productObj.color = $('.showSweetAlert').find('.colors').find('.active').css('background-color');

      Storage.push(productObj);

      Storage.forEach(function(object, index) {
        StorageString += JSON.stringify(object);
        if(index !== StorageLen) {
          StorageString += 'Ω';
        }
      });

      localStorage.setItem('cart', StorageString);
      
      window.location.assign('build-a-quote');
    });
  }
})(jQuery);
