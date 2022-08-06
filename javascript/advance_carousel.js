(function($){
    
    var defaults={
        waitTime: 400
    }
    
    function lSAdvanceSlider(element, settings)
    {
        this.options={};
        this.element=element;
        
        this.carouselOuter=this.element;
        
        $.extend(this.options, defaults, settings);
        
        this.autoSlide=this.options.autoSlide;
        this.carouselInner=$(this.options.carouselInner);
        this.wrapper=$(this.options.wrapper);
        this.leftTransparentElement=$(this.options.leftTransparentElement);
        this.transparentWidth=this.options.rightTransparentElement.width();
        this.customHeight=this.options.customHeight;
        this.singleImageWidth=this.carouselOuter.width()-
        (this.leftTransparentElement.width()*this.rightTransparentElement.width());
        this.leftLink=$(this.options.leftLink);
        this.rightLink=$(this.options.rightLinki);
        this.scrollButtonsContainer=$(this.options.scrollButtonsContainer);
        this.scrollButtonClass=this.options.scrollButtonClass;
        this.init();
    }
    lSAdvanceSlider.prototype.init=function()
    {
        var parent=this,
        numberOfImages=$(parent.carouselItem).length;
        $(parent.carouselItem).width(parent.singleImageWidth);
        parent.wrap.width(numberOfImages*parent.singleImageWidth);
        
        parent.carouselInner.height(parent.customHeight).width(parent.singleImageWidth);   
        parent.leftTransparentElement.height(parent.customHeight);
        parent.rightTransparentElement.height(parent.customHeight);
        $(parent.carouselItem).height(parent.customHeight);
    }
    
    $.fn.advanceCarousel=function(setting){
        
        var $this=this;
        
        new lSAdvanceSlider($this, setting);
        
        return $this;
    }
})(jQuery);