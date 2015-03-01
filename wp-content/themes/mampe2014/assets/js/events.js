window.addEvent('domready',function(){

    if($('js-packery')) {
        var pckry = new Packery( $('js-packery'), {
          // options
          itemSelector: '.item',
          gutter: 0,
          columnWidth: '.item'
        });
    }

    $$('.columns-y').each(function(el) {
        setTimeout(function() {
            var ss = new ScrollSide(el);
        }, 300);
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
    $$('.thumb.dynamic-height, #js-packery .work-item').each(function(thumb) {
        var w = thumb.get('data-width').toInt();
        var h = thumb.get('data-height').toInt();
        if(!w || !h) return;
        var realW = thumb.getWidth();
        var ratio = realW / w;
        var realH = h * ratio;

        thumb.setStyles({
            'height': realH
        });
    });

});