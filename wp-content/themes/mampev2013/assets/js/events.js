window.addEvent('domready',function(){

    $$('#js-packery .work-item').each(function(el) {
        var thumb = el.getElements('.thumb')[0];
        if(!thumb.get('data-width')) return;
        var w = thumb.get('data-width').toInt(); // 16
        var h = thumb.get('data-height').toInt(); // 9
        var elW = el.getWidth().toInt(); // 10

        var ratio = elW/w;
        var elH = h*ratio;
        el.setStyles({ 'height': elH });

    });

    var pckry = new Packery( $('js-packery'), {
      // options
      itemSelector: '.item',
      gutter: 0,
      columnWidth: '.item'
    });

});