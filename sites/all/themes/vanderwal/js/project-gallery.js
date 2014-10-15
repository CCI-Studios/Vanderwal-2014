(function($) {
    var timer;
    
    $(function(){
        init();
    });
    
    function init()
    {
        thumbnails().find("a").click(thumbnailClick);
        
        $(".view-project .views-field-field-project-photos-1").append("<a href='#' class='prev' title='Previous'>Previous</a><a href='#' class='next' title='Next'>Next</a>");
        
        $(".view-project .views-field-field-project-photos-1 .prev").click(clickPrevious);
        $(".view-project .views-field-field-project-photos-1 .next").click(clickNext);
        
        rows().eq(0).addClass("active");
        
        resize();
        $(window).resize(resize);
        
        start();
    }
    function resize()
    {
        var $div = $(".view-project .views-field-field-project-photos");
        $div.height($div.width()*0.685);
    }
    function start()
    {
        timer = setInterval(next, 4000);
    }
    function stop()
    {
        clearInterval(timer);
    }
    
    function rows()
    {
        return $(".view-project .views-field-field-project-photos li");
    }
    function thumbnails()
    {
        return $(".view-project .views-field-field-project-photos-1 li");
    }
    
    function gotoPhoto(i)
    {
        var $oldRow = getActive();
        var $newRow = rows().eq(i);
        if ($oldRow.index() != i)
        {
            $oldRow.removeClass("active");
            var z = 1+parseInt($oldRow.css("z-index"));
            $newRow.addClass("active").hide().css("z-index",z).fadeIn(800);
        }
    }
    function thumbnailClick()
    {
        var i = $(this).parents("li").index();
        gotoPhoto(i);
        stop();
        return false;
    }
    
    function getActive()
    {
        return rows().filter(".active");
    }
    
    function next()
    {
        var i = getActive().index();
        i++;
        if (i >= rows().length)
        {
            i = 0;
        }
        gotoPhoto(i);
    }
    function previous()
    {
        var i = getActive().index();
        i--;
        if (i < 0)
        {
            i = rows().length-1;
        }
        gotoPhoto(i);
    }
    
    function clickPrevious()
    {
        previous();
        stop();
        return false;
    }
    function clickNext()
    {
        next();
        stop();
        return false;
    }
}(jQuery));
