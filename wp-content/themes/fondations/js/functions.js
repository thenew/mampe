// http://solutoire.com/2008/03/10/mootools-css-styled-scrollbar/
function makeScrollbar(container,content,scrollbar,handle,horizontal,ignoreMouse){

    // if element exist and if the scroll is need
    if (container && content.getHeight() > container.getHeight()) {

        container.addClass('scrollme');
        scrollbar.removeClass('hideme');

        var steps = (horizontal?(container.getScrollSize().x - container.getSize().x):(container.getScrollSize().y - container.getSize().y))
        var slider = new Slider(scrollbar, handle, {
            steps: steps,
            mode: (horizontal?'horizontal':'vertical'),
            onChange: function(step){
                var x = (horizontal?step:0);
                var y = (horizontal?0:step);
                container.scrollTo(x,y);
            }
        }).set(0);
        if( !(ignoreMouse) ){
            $$(container, scrollbar).addEvent('mousewheel', function(e){
                e = new Event(e).stop();
                var step = slider.step - e.wheel * 30;  
                slider.set(step);
            });
        }
        $(document.body).addEvent('mouseleave',function(){slider.drag.stop()});

    } else {
        scrollbar.addClass('hideme');
    }
}


function mampeScroll(suff){
    if (!suff){var suff = '';}
    Browser.isMobile = ['mac', 'linux', 'win'].contains(Browser.Platform.name);
    window.addEvent('domready', function() {

        if(Browser.isMobile) {
            $$('.main-column').addClass('ismobile');
            var my_iScroll;
            my_iScroll = new iScroll('container'+suff, { scrollbarClass: 'scrollbar-vert iscroll ' });
        } else {
            makeScrollbar($('container'+suff), $('container-content'+suff), $('scrollbar'+suff), $('handle'+suff));
        }

        window.addEvent('resize', function() {
            if(Browser.isMobile)
                my_iScroll.refresh();
            else
                makeScrollbar($('container'+suff), $('container-content'+suff), $('scrollbar'+suff), $('handle'+suff));
        });

    });
}

