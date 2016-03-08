(function($) {

  if(window.location.pathname.indexOf("products") !== -1) {

    var $filters = $(document.querySelector('.filters_data'));
    var categories = $filters.find('#acf-field-category')[0];
    var brands = $filters.find('#acf-field-brand')[0];
    var styles = $filters.find('#acf-field-style')[0];
    var materials = $filters.find('#acf-field-material')[0];


    appendFilterData($('#category_filter_list'), categories);
    appendFilterData($('#brand_filter_list'), brands);
    appendFilterData($('#style_filter_list'), styles);
    appendFilterData($('#material_filter_list'), materials);

    $('.filters_data').remove();
  }

  function appendFilterData($listContainer, dataArray ) {
    var len = dataArray.length;
    var textList = '';

    for (var i = 0 ; i < len; i++) {
      textList+= '<div>';
      textList+= "<div class='label'>" + dataArray[i].label + "</div>";
      textList+= "<div class='radioButton'></div>";
      textList += '</div>';
    }

    $listContainer.append(textList);
  }
})(jQuery);
