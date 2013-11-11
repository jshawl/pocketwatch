(function ( $ ) {
   
$.fn.readingList = function(options) {
  $container = $(this);
  var opts = $.extend( {}, $.fn.readingList.defaults, options ); 
  serialize = function(obj) {
      var str = [];
        for(var p in obj)
        if(obj[p]!='' && obj[p]!='template'){
       str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
	}
  return str.join("&");
  }

function makeTemplate(template, data) {
      var output, pattern, varName, varValue, _ref;
      pattern = /(?:\{{2})([\w\[\]\.]+)(?:\}{2})/;
      output = template;
      while (pattern.test(output)) {
        varName = output.match(pattern)[1];
        varValue = (_ref = getObjectProperty(data, varName)) != null ? _ref : '';
        output = output.replace(pattern, "" + varValue);
      }
      return output;
    };

   function getObjectProperty(object, property) {
      var piece, pieces;
      property = property.replace(/\[(\w+)\]/g, '.$1');
      pieces = property.split('.');
      while (pieces.length) {
        piece = pieces.shift();
        if ((object != null) && piece in object) {
          object = object[piece];
        } else {
          return null;
        }
      }
      return object;
    };

  url = 'http://proxy.pocketwatch.io/?'+serialize(opts);
  $.ajax({
    type:'GET',
    url:url,
    dataType :"jsonp",
    jsonp: false,
    jsonpCallback: "pocketWatch",
    success: function(res){
      $.each(res.list, function(index, obj){
        $container.append(makeTemplate(opts.template, obj));
      })
    }
  });
    return this;
};

$.fn.readingList.defaults = {
  count:'5',           // n
  state:'all',         // all || unread || archive
  favorite:1,          // 1 || 0
  tag:'',              // tag_name || _untagged_
  contentType:'',      // article || video || image
  sort:'newest',       // newest || oldest || title || site
  detailType:'simple',  // simple || complete
  template:'<a href="{{resolved_url}}">{{resolved_title}}</a>' // {{excerpt}} {{given_title}} {{given_url}} {{resolved_title}} {{resolved_url}} {{time_added}} {{time_read}}
};

}( jQuery ));
