	
	/* me.nanof.us JavaScript scripts - (c) Ville Talonpoika 2015 */
	
	//Close all drawers by default
	
	$(window).load(closeDrawers);
	function closeDrawers() {
		$(".wrapper").height(0);
	}

	//Expand/collapse the drawers on click
	
	function setHeight(button,wrapper,content,triangle) {
		if($(wrapper).hasClass('open')) {
			$(triangle).removeClass("rotationToggle");
			$(wrapper).removeClass('open');
			$(wrapper).height(0);
		} else {
			$(triangle).addClass("rotationToggle");
			$(wrapper).addClass('open');
			$(wrapper).height($(content).outerHeight(true));
		}
	}
	
	//Currently broken
	function closeAll() {
		if($(".wrapper").hasClass('open')) {
			$(".wrapper").removeClass('open');
			$(".triangle").removeClass('rotationToggle');
			$(".wrapper").height(0);
		}
		if($(".triangle").hasClass('rotationToggle')) {
			$(".triangle").removeClass('rotationToggle');
		}
	}
	
	$('.child').resizable({
		handles: 'w',
		minWidth: 200,
		maxWidth: 400
	});

	//Scale the social buttons (currently not needed)

/*	$(window).load(recalculateButtonHeight);
	$(window).resize(recalculateButtonHeight);
	function recalculateButtonHeight() {
		var cw = $(".socialbutton").width();
		$(".socialbutton").css({"height": cw + "px"});
	}*/