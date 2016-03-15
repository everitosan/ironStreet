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
    setTimeout(initialFiltered, 500);
  }

  function initialFiltered() {
    var myFilter = new filterHelper();
    myFilter.filter(myFilter.getFilterText());
  }

  function appendFilterData($listContainer, dataArray ) {
    var myFilter = new filterHelper();

    var len = dataArray.length;
    var textList = '';

    for (var i = 0 ; i < len; i++) {
      var active = "";
      if (i === 0) {
        active = "active";
        var index = $listContainer.text().replace(/(\r\n|\n|\r|\s)/gm,"");
        myFilter.updateFilter(index, dataArray[i].label);
      }

      textList+= '<filter-item category="'+index+'" '+active+' text="'+dataArray[i].label+'"></filter-item>';
    }

    $listContainer.append(textList);
  }
})(jQuery);
