(function($) {
	$(function(){
        boxes().click(clickBox);
        $(".views-field-view-node").click(clickClose);
		
		$(".view--products-services-boxes .view-content").append('<div class="views-row"><div class="views-field views-field-title"><span class="field-content"><a href="/faqs" style="pointer-events:all;">FAQs</a></span></div><div class="views-field views-field-field-upload-image"><div class="field-content"><img typeof="foaf:Image" src="/sites/default/files/styles/steel_advantage_thumbnail/public/s_img_1.jpg" width="231" height="231" alt=""></div></div><div class="views-field views-field-view-node"><span class="field-content"><a href="/faqs">+</a></span></div></div>');
	});
    
    function boxes()
    {
        return $(".view.slider-boxes .views-row");
    }
    function rows()
    {
        return $(".view.slider-rows .views-row");
    }
    function rowContainer()
    {
        return $(".view.slider-rows");
    }
	
	function clickBox()
	{
		boxes().removeClass("active");
		$(this).addClass("active");

		var i = $(this).index();
		rows().hide().eq(i).show();
		rowContainer().slideDown(200);
		
		return false;
	}
	
	function clickClose()
	{
		rowContainer().hide();
		rows().removeClass("active");
		boxes().removeClass("active");
		
		return false;
	}
}(jQuery));