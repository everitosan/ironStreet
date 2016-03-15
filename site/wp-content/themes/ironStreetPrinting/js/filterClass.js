(function($) {
  window.filterHelper = function() {

    this.filterObj = (function() {
      if (window.ironStrt_filter === undefined) {
         window.ironStrt_filter = {};
      }
      return window.ironStrt_filter;
    })();

    this.getFilterText = function() {
      var filterRule = '';
      var i = 1;
      var len = Object.keys(window.ironStrt_filter).length;
      for( catFil in window.ironStrt_filter ) {
        if(i< len) {
          filterRule += window.ironStrt_filter[catFil] + " ";
          i++;
        }
      }
      return filterRule;
    };

    this.getFilterVal = function(key) {
      return this.filterObj[key];
    };

    this.updateFilter = function(key, val) {
      this.filterObj[key] = val;
    };

    this.filter = function(expression) {
      var mainSelector = window.ironStrt_filter.Selector;

      $('.itemContainer[data-filter~="'+  mainSelector +'"]').each((index, item)=> {
        var itemExpression = item.getAttribute('data-filter');
        if(  itemExpression.indexOf(expression) !== -1) {
          $(item).addClass('filtered');
        }
        else {
          $(item).removeClass('filtered');
        }
      });
    };

  };

})(jQuery);
