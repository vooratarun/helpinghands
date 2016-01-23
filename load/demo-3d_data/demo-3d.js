jQuery(function(){
	$("#slider").chopSlider({
		/* Slide Element */
		slide : ".slide",
		/* Autoplay */
		autoplay : true,
		autoplayDelay : 5000,
		/* Default Parameters */
		defaultParameters : {
			type: "vertical",
			xOffset: 20,
			yOffset: 20,
			hPieces : 35,
			vPieces: 35,
			rotate : 10 ,
			rotateSymmetric: false,
			scaleX:0,
			scaleY:0,
			translateX:10,
			translateY:10,
			ease1:"ease",
			ease2:"ease",
			origin:"left left",
			dur1: 1000,
			dur2 :600,
			dur3: 1000,
			pieceDelay : 50,
			xFadeDelay :0,
			prevTransition : 	{
				rotate:-10,
				xOffset:10,
				startFrom:10
			}
		},
		onStart: function(){ /* Do Something*/ },
		onEnd: function(){ /* Do Something*/ }
	})
})
