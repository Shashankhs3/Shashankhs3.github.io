$(document).on('click', '.panel-heading span.clickable', function(e){
    var $this = $(this);
	if(!$this.hasClass('panel-collapsed')) {
		$this.parents('.panel').find('.panel-body').slideUp(); 
		$this.addClass('panel-collapsed');
		$this.find('i').removeClass('fa fa-fw fa-chevron-up').addClass('fa fa-fw fa-chevron-down');
	} else {
		$this.parents('.panel').find('.panel-body').slideDown();
		$this.removeClass('panel-collapsed');
		$this.find('i').removeClass('fa fa-fw fa-chevron-down').addClass('fa fa-fw fa-chevron-up');
	}
});

