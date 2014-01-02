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

    // replace images with hi-res version
    $$('*[data-full-src]').each(function(el) {
        var full = el.get('data-full-src');
        var myImage = Asset.image(full, {
            onLoad: function() {

                var oldBg = el.getStyle('background-image');
                if( oldBg !== 'none') {
                    setTimeout(function() {
                            el.setStyles({
                                'background-image': 'url('+full+'), ' + oldBg
                            });
                    }, 200);
                    setTimeout(function() {
                            el.setStyles({
                                'background-image': 'url('+full+')'
                            });
                    }, 1000);
                }

            }
        });
    });

    // dynamic-height
    $$('.thumb.dynamic-height').each(function(thumb) {
        var w = thumb.get('data-width');
        var h = thumb.get('data-height');
        if(!w || !h) return;
        var realW = thumb.getWidth();
        var ratio = realW / w;
        var realH = h * ratio;

        thumb.setStyles({
            'height': realH
        });
    });

});