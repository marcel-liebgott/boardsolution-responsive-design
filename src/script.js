$(document).ready(function(){
	(function($){
		/**
		 * collapse a forum div
		 */
		$('.collapse-forum').on('click', function(event){
			var dad = $(this);
			
			event.preventDefault();
			var id = $(this).data('id');
			
			var visibilityEvent;
			
			if($('#subforum_' + id).hasClass('show-tr')){
				visibilityEvent = $('#subforum_' + id).fadeOut(1000).removeAttr("style");
				
				$.when(visibilityEvent).done(function(){
					$($('#subforum_' + id)).removeClass("show-tr").addClass("hide-tr");
					
					$(dad).closest("i").fadeOut(1000, function(){
						$(this).removeClass("fa-plus-square-o").addClass("fa-minus-square-o");
					}).fadeIn(1000);
					
					$($('#subforum_' + id)).removeAttr("style");
				});
			}
			
			if($('#subforum_' + id).hasClass('hide-tr')){
				visibilityEbent = $('#subforum_' + id).fadeIn(1000);
				
				$.when(visibilityEvent).done(function(){
					$($('#subforum_' + id)).removeClass("hide-tr").addClass("show-tr");
					
					$(dad).closest("i").fadeOut(1000, function(){
						$(this).removeClass("fa-minus-square-o").addClass("fa-plus-square-o");
					}).fadeIn(1000);
					
					$($('#subforum_' + id)).removeAttr("style");
				});
			}
		});
		
		/**
		 * collapse a div
		 */
		$('.collapse-div').on('click', function(event){
			var dad = $(this);
			
			event.preventDefault();
			
			var id = $(this).attr('id');
			var visibilityEvent = $('#div_' + id).collapse('toggle');
			
			$.when(visibilityEvent).done(function(){
				$(dad).closest("i").fadeOut(750, function(){
					if($(this).hasClass("fa-chevron-down")){
						$(this).removeClass("fa-chevron-down").addClass("fa-chevron-up");
					}else{
						$(this).removeClass("fa-chevron-up").addClass("fa-chevron-down");
					}
				}).fadeIn(750);
			});
		});
		
		/**
		 * animate a progress bar
		 */
		$('.progress-bar').each(function(){
			var percent = $(this).data('percent');
			
			$(this).animate({
				width: percent
			}, 2500);
		});
		
		/**
		 * rating
		 */
		
		$('.rating').each(function(){
			var percent = $(this).data('value');
			var id = $(this).attr("id");
			
			var vote = $(this).rating({
				showClear: false,
				showCaption: false,
				size: "sm",
				disabled: true,
				stars: 6,
				min: 1,
				max: 6
			});
			
			$.when(vote).done(function(){
				$(this).siblings().animate({width: percent + "%"}, 750);
			});
		});
		
		/**
		 * colorpicker
		 */
		$('.colorpicker').colorpicker().on('showPicker.colorpicker', function(event){
			var number = $(this).data('number');
			var id = $(this).data('id');
			var text = $(this).data('text');
			var tag = $(this).data('tag');
			
			$(this).on('hidePicker.colorpicker', function(event){
				popupElementClick(number,tag,event.color.toHex());
				_insertAtCursor('bbcode_area' + number,"[/" + tag + "]");
				unmarkItem('tag_' + tag + '_' + number);
				tagAdded[tag + number] = 0;
				
				console.log(tagAdded);
			});
		});
	})(jQuery);
});