window.storageHelper = function (storageIdentity) {
  //***********    Attributes  *******
  this.identity = storageIdentity;
  this.storage = localStorage.getItem(this.identity);
  this.StorageString = '';

  //***********   Computed Attributes  *******
  this.StorageArray = (function(_self) {
    var arrTmp = Array();

    if (_self.storage !== null && _self.storage!== "" ) {
      var arrTmp = _self.storage.split('Ω');
      arrTmp.forEach((val, index, array)=> {
        array[index] = JSON.parse(val);
      });
    }
    return arrTmp;
  })(this);

  this.StorageLen = (function(_self){
    return _self.StorageArray.length;
  })(this);

  //***********    Methods  *******

  this.getStorageArray = function() {
    return this.StorageArray;
  };

  this.findElementObj = function(id) {
    var obj = {};
    this.StorageArray.forEach((val, index, array)=> {
      if (array[index].id == id) {
        obj = array[index];
      }
    });
    return obj;
  };

  this.findElementObjByKey = function(key){
    var obj = {};
    this.StorageArray.forEach((val, index, array)=> {
      if(val[key] !== undefined) {
        obj = val;
      }
    });
    return obj;
  };

  this.remove = function(id) {
    var elementIndex;
    this.StorageArray.forEach((val, index, array) => {
      if (array[index].id == id) {
        elementIndex = index;
      }
    });

    this.StorageArray.splice(elementIndex, 1);
    this.save();
  };

  this.push = function(obj) {

    if (this.StorageLen === 0 ){
      obj.id = 0;
    } else {
      obj.id = this.StorageArray[this.StorageLen-1].id +1 ;
    }

    this.StorageArray.push(obj);
  };

  this.save = function() {
    var string = '';
    this.StorageLen = this.StorageArray.length;
    var len = this.StorageLen-1;
    this.StorageArray.forEach(function(object, index) {
      string += JSON.stringify(object);
      if(index !== len) {
        string += 'Ω';
      }
    });
    localStorage.setItem(this.identity, string);
  };

};
