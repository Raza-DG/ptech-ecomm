(function( $ ) {
	'use strict';

	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */
	const monthNames = ["January", "February", "March", "April", "May", "June","July", "August", "September", "October", "November", "December"];
	const shortMonthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun","Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
	const weekNames = ["Sunday","Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
	const shortWeekNames = ["Sun","Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];

	function suffix_date(dateNumber){
		let ends = ['th','st','nd','rd','th','th','th','th','th','th'];
			
		let abbreviation = "";
		if ((dateNumber %100) >= 11 && (dateNumber%100) <= 13)
			abbreviation = dateNumber+'th';
		else
			abbreviation = dateNumber+ends[dateNumber % 10];
		
		return abbreviation;
	}

	function formatAMPM(date) {
		let cuTime = date.split(":");
		let hours = cuTime[0]
		var minutes = cuTime[1];
		var ampm = hours >= 12 ? 'PM' : 'AM';
		hours = hours % 12;
		hours = hours ? hours : 12; // the hour '0' should be '12'
		minutes = minutes < 10 ? ''+minutes : minutes;
		var strTime = hours + ':' + minutes + ' ' + ampm;
		return strTime;
	}

	$(function(){
		let deliverySlider = $('#delivery-slick').slick({"slidesToShow": 5, "slidesToScroll": 5,infinite:false,'prevArrow':null,'nextArrow':'<button type="button" class="slick-next">Next week</button>',responsive:[{breakpoint:767,settings:{slidesToScroll:3,slidesToShow:3}}]});

		$('#gotothisweek').on('click',function(e){
			e.preventDefault(true);
			deliverySlider.slick("slickGoTo",0);
		})

		let pickupSlider = $('#pickup-slick').slick({"slidesToShow": 5, "slidesToScroll": 5,infinite:false,'prevArrow':null,'nextArrow':'<button type="button" class="slick-next">Next week</button>',responsive:[{breakpoint:767,settings:{slidesToScroll:3,slidesToShow:3}}]});

		$('#pickupgotothisweek').on('click',function(e){
			e.preventDefault(true);
			pickupSlider.slick("slickGoTo",0);
		})

		$('.toggle').click(function(){
			$(this).toggleClass('hide');
			$(this).siblings('.toggle').toggleClass('hide');
			$('.proceed_to_checkout').addClass('disabled');
		});

		$('#pickup-wrapper .toggle.calendar-mode').click(function(){
			$('#pickup-wrapper .calendar-view').removeClass('hide');
			$('#pickup-wrapper .grid-view').addClass('hide');
			$('#pickup-slick').slick('setPosition');		
		});

		$('#shipping-wrapper .toggle.grid-mode').click(function(){
			$('#shipping-wrapper .calendar-view').addClass('hide');
			$('#shipping-wrapper .grid-view').removeClass('hide');				
			$('#delivery-slick').slick('setPosition');		
		});

		$('#shipping-wrapper .toggle.calendar-mode').click(function(){
			$('#shipping-wrapper .calendar-view').removeClass('hide');
			$('#shipping-wrapper .grid-view').addClass('hide');
			$('#delivery-slick').slick('setPosition');		
		});

		$('#pickup-wrapper .toggle.grid-mode').click(function(){
			$('#pickup-wrapper .calendar-view').addClass('hide');
			$('#pickup-wrapper .grid-view').removeClass('hide');			
			$('#pickup-slick').slick('setPosition');		
		});

		$("#shipping-calendar").datepicker({
			onSelect:function(selectedDateTime,el){
				var day  = el.selectedDay,
				mon  = el.selectedMonth,
				year = el.selectedYear;

				var el = $(el.dpDiv).find('[data-year="'+year+'"][data-month="'+mon+'"]').filter(function() {
					return $(this).find('a').text().trim() == day;
				});

				
				$("#shipping-wrapper .calendar-view .comment-wrapper").addClass('hide');				
				let cuDate = $(this).val().split('/');
				$("#hidden_date").val(cuDate[1]+'-'+cuDate[0]+'-'+cuDate[2]);		
				let newDate = new Date(cuDate[2],cuDate[0]-1,cuDate[1]);				
				$('#shipping-wrapper .calendar-view #calendar-shipping-time-wrapper .single-shipping-time').removeClass('disabled');

				if(weekNames[newDate.getDay()]=="Thursday"){
					if($(el).hasClass('disableAM')){
						$('#shipping-wrapper .calendar-view #calendar-shipping-time-wrapper .single-shipping-time[value=Morning]').addClass('disabled');
					}
					if($(el).hasClass('disablePM')){
						$('#shipping-wrapper .calendar-view #calendar-shipping-time-wrapper .single-shipping-time[value=Afternoon]').addClass('disabled');
					}
					$('#shipping-wrapper .calendar-view #calendar-shipping-time-wrapper .single-shipping-time[value=Morning]').html('MORNING ( Between 7am and 11am Sydney Metro Only )');

					$('#shipping-wrapper .calendar-view #calendar-shipping-time-wrapper').removeClass('hide');
					$('#shipping-wrapper .calendar-view .date-selected').addClass('hide');
					$('.proceed_to_checkout').addClass('disabled');
				}else{
					$('#shipping-wrapper .calendar-view #calendar-shipping-time-wrapper').addClass('hide');
					$('#shipping-wrapper .calendar-view .date-selected').removeClass('hide');

					let deliverString = "We will deliver your order between 2pm and 7pm.";
					$('#shipping-wrapper .calendar-view .date-selected p.time').html(deliverString);
					$("#hidden_shipping_time").val("Afternoon");
					$('.proceed_to_checkout').removeClass('disabled');
				}

				let html = weekNames[newDate.getDay()] + ', '+suffix_date(newDate.getDate()) +" " +monthNames[newDate.getMonth()] +" "+ newDate.getFullYear();
				$('#shipping-wrapper .calendar-view .date-selected p.date').html(html);				
			}
		});
		
		if(typeof pickup_min_date!='undefined'){
			$("#pickup-calendar").datepicker({
				onSelect:function(selectedDateTime){				
					$("#hidden_date").val($(this).val());				
					let cuDate = $(this).val().split('/');
					let newDate = cuDate[1]+'-'+cuDate[0]+'-'+cuDate[2];				
					$("#hidden_date").val(cuDate[1]+'-'+cuDate[0]+'-'+cuDate[2]);		
					$.ajax({
						url: woodmartPad.ajax_url,
						type: 'POST',
						data: 'pickup_date='+newDate+'&action=get_slots_from_date',
						success:function(data) {
							$("#pickup-wrapper .calendar-view .text-wrapper").addClass('hide');		
							let jsonObj = JSON.parse(data);
							$('#pickup-wrapper .calendar-view .available-hourslots').removeClass('hide');

							$("#pickup-wrapper .calendar-view .available-hourslots").pagination({
								dataSource: jsonObj.slots,
								pageSize: 8,
								callback: function(data, pagination) {                        
									var html = data;
									$('#pickup-wrapper .calendar-view .available-hourslots .items').html(html);
									data.forEach(function(d){
										console.log(d);
										let disabledClass = "";
										if(parseInt(jsonObj.available_slots) <= d['booked_cnt']){
											disabledClass = "disabled"
										}
										if(jsonObj.today){
											let cuTime = new Date();
											let cuTimeinSec = cuTime.getHours() * 3600 + cuTime.getMinutes() * 60;
											let slotToArray = d['from'].split(':');
											let slotToSec = slotToArray[0] * 3600 + slotToArray[1] * 60;
											if(cuTimeinSec + 3600 >= slotToSec){
												disabledClass = "disabled"
											}
										}
										$("#pickup-wrapper .calendar-view .available-hourslots .items").append('<div class="single-hourslot '+disabledClass+'"><span>'+formatAMPM(d['from'])+' - '+formatAMPM(d['to'])+'</span></div>');
									})                        
								}
							});
						},
						error: function(errorThrown){
							console.log(errorThrown);
						}
					});
				},
				'minDate': new Date(pickup_min_date),
				'maxDate': new Date(pickup_max_date),
				'beforeShowDay': function (date){
					return unavailable(date,pickup_disabled_dates);
				}
			});
		}		

		$(".shipping-option").click(function(){
			$(this).addClass('active');
			$('.pickup-option').removeClass('active');
			$('#shipping-wrapper').removeClass('hide');
			$("#pickup-wrapper").addClass('hide');
			$('#delivery-slick').slick('setPosition');
			$('.proceed_to_checkout').addClass('disabled');
		});

		$(".pickup-option").click(function(){
			$(this).addClass('active');
			$('.shipping-option').removeClass('active');
			$('#shipping-wrapper').addClass('hide');
			$("#pickup-wrapper").removeClass('hide');
			$('#pickup-slick').slick('setPosition');
			$('.proceed_to_checkout').addClass('disabled');
		});

		$(document).on('click','#shipping-wrapper .single-date', function(){
			$('.single-date').removeClass('selected');
			$(this).addClass('selected');
			$(".grid-view .comment-wrapper").addClass('hide');
			$('.grid-view #grid-shipping-time-wrapper').removeClass('hide');
			$('#shipping-wrapper .grid-view .date-selected').addClass('hide');
			$('#shipping-wrapper .grid-view #grid-shipping-time-wrapper .single-shipping-time').removeClass('disabled');
			let cuDate = $(this).attr('date').split('-');
			let newDate = new Date(cuDate[2],cuDate[1]-1,cuDate[0]);

			if(weekNames[newDate.getDay()]=="Thursday"){
				if($(this).attr('thursdaydisable').includes('AM')){
					$('#shipping-wrapper .grid-view #grid-shipping-time-wrapper .single-shipping-time[value=Morning]').addClass('disabled');
				}

				if($(this).attr('thursdaydisable').includes('PM')){
					$('#shipping-wrapper .grid-view #grid-shipping-time-wrapper .single-shipping-time[value=Afternoon]').addClass('disabled');
				}

				$('#shipping-wrapper .grid-view #grid-shipping-time-wrapper .single-shipping-time[value=Morning]').html('MORNING ( Between 7am and 11am Sydney Metro Only )');

				$('#shipping-wrapper .grid-view #grid-shipping-time-wrapper').removeClass('hide');
				$('#shipping-wrapper .grid-view .date-selected').addClass('hide');
				$('.proceed_to_checkout').addClass('disabled');
			}else{
				$('#shipping-wrapper .grid-view #grid-shipping-time-wrapper').addClass('hide');
				$('#shipping-wrapper .grid-view .date-selected').removeClass('hide');

				let deliverString = "We will deliver your order between 2pm and 7pm.";
				$('#shipping-wrapper .grid-view .date-selected p.time').html(deliverString);
				$("#hidden_shipping_time").val("Afternoon");
				$('.proceed_to_checkout').removeClass('disabled');
			}


			let html = weekNames[newDate.getDay()] + ', '+suffix_date(newDate.getDate()) +" " +monthNames[newDate.getMonth()] +" "+ newDate.getFullYear();
			$('.grid-view .date-selected p.date').html(html);

			$("#hidden_date").val($(this).attr('date'));			
		})

		$(document).on('click','#pickup-wrapper .single-date', function(){
			$(this).siblings('.single-date').removeClass('selected');
			$(this).addClass('selected');
			$("#pickup-wrapper .grid-view .comment-wrapper").addClass('hide');
			$("#hidden_date").val($(this).attr('date'));			
			$.ajax({
				url: woodmartPad.ajax_url,
				type: 'POST',
				data: 'pickup_date='+$(this).attr('date')+'&action=get_slots_from_date',
				success:function(data) {
					let jsonObj = JSON.parse(data);
					console.log(jsonObj);
					let html = "";
					jsonObj.slots.forEach(function(slot){
						let disabledClass = "";
						if(parseInt(jsonObj.available_slots) <= slot['booked_cnt']){
							disabledClass = "disabled"
						}
						if(jsonObj.today){
							let cuTime = new Date();
							let cuTimeinSec = cuTime.getHours() * 3600 + cuTime.getMinutes() * 60;
							let slotToArray = slot['from'].split(':');
							let slotToSec = slotToArray[0] * 3600 + slotToArray[1] * 60;
							if(cuTimeinSec + 3600 >= slotToSec){
								disabledClass = "disabled"
							}
						}
						html += '<div class="single-hourslot '+disabledClass+'"><span>'+formatAMPM(slot['from'])+' - '+formatAMPM(slot['to'])+'</span></div>';
					})
					$('#pickup-wrapper .grid-view .available-hourslots').removeClass('hide');
					$('#pickup-wrapper .grid-view .available-hourslots').html(html);
				},
				error: function(errorThrown){
					console.log(errorThrown);
				}
			});
		});

		$(document).on('click','#pickup-wrapper .grid-view .single-hourslot', function(){
			$(this).siblings('.single-hourslot').removeClass('selected');
			$(this).addClass('selected');
			
			$('#pickup-wrapper .grid-view .date-selected').removeClass('hide');
			let cuDate = $('#pickup-wrapper .single-date.selected').attr('date').split('-');
			let newDate = new Date(cuDate[2],cuDate[1]-1,cuDate[0]);

			let html = weekNames[newDate.getDay()] + ', '+suffix_date(newDate.getDate()) +" " +monthNames[newDate.getMonth()] +" "+ newDate.getFullYear();
			let times = $(this).text().split('-');
			html += ' - ' + times[0].toUpperCase() + ' to ' + times[1].toUpperCase();
			$('#pickup-wrapper .grid-view .date-selected p.date').html(html);		
			$("#hidden_hour_slot").val($(this).html());
			$('.proceed_to_checkout').removeClass('disabled');
		});

		$(document).on('click','#pickup-wrapper .calendar-view .single-hourslot', function(){
			$(this).siblings('.single-hourslot').removeClass('selected');
			$(this).addClass('selected');
			
			$('#pickup-wrapper .calendar-view .date-selected').removeClass('hide');
			let cuDate = $('#pickup-calendar').val().split('/');
			let newDate = new Date(cuDate[2],cuDate[0]-1,cuDate[1]);
			
			let html = weekNames[newDate.getDay()] + ', '+suffix_date(newDate.getDate()) +" " +monthNames[newDate.getMonth()] +" "+ newDate.getFullYear();
			let times = $(this).text().split('-');
			html += ' - ' + times[0].toUpperCase() + ' to ' + times[1].toUpperCase();
			$('#pickup-wrapper .calendar-view .date-selected p.date').html(html);	
			$("#hidden_hour_slot").val($(this).text());
			$('.proceed_to_checkout').removeClass('disabled');
		});

		$(document).on('click', '#shipping-wrapper .single-shipping-time', function(){
			let selVal = $(this).html().toLowerCase();
			let deliverString = "We will deliver your order in the " + selVal;
			$(this).parent().addClass('hide');
			if($(this).parent().attr('id')=="grid-shipping-time-wrapper"){
				$('.grid-view .date-selected p.time').html(deliverString);
				$('#shipping-wrapper .grid-view .date-selected').removeClass('hide');
			}else{
				$('.calendar-view .date-selected p.time').html(deliverString);
				$('#shipping-wrapper .calendar-view .date-selected').removeClass('hide');
			}
			$("#hidden_shipping_time").val($(this).attr('value'));
			$('.proceed_to_checkout').removeClass('disabled');
		});

		$("#suburb-select").select2({
			placeholder:"Please select a suburb",
			sorter: function(data) {
				return data.sort(function(a, b) {
					return a.text.toUpperCase() < b.text.toUpperCase() ? -1 : a.text > b.text ? 1 : 0;
				});
			}
		});

		function unavailable(date, disabled_dates){
			let dayString = ('0' + date.getDate()).slice(-2) + '-' + ('0' + (date.getMonth()+1)).slice(-2) + '-' + date.getFullYear();
			var arr;
			if(weekNames[date.getDay()]=="Thursday"){				
				if (jQuery.inArray(dayString, disabled_dates) != -1) {
					arr = [false, 'highlight'];
				}else {
					let amDayString = dayString+'AM';
					let pmDayString = dayString+'PM';

					let disableClass = "";
					if (jQuery.inArray(amDayString, disabled_dates) != -1) {
						disableClass += 'disableAM';
					}
					if(jQuery.inArray(pmDayString, disabled_dates) != -1){
						disableClass += ' disablePM';
					}
					arr = [true, disableClass];					
				}
			}else{
				if (jQuery.inArray(dayString, disabled_dates) != -1) {
					arr = [false, 'highlight'];
				}else {
					arr = [true, ''];
				}
			}			            
            return arr;
		}
		$("#suburb-select").on('change',function(){
			if($(this).val()!=undefined){
				$.ajax({
					url: woodmartPad.ajax_url,
					type: 'POST',
					data: 'surburb_index='+$('#suburb-select').val()+'&action=get_available_dates_from_suburb',
					success:function(data) {
						$('.proceed_to_checkout').addClass('disabled');
						let jsonObj = JSON.parse(data);
						console.log(jsonObj);
						$('#delivery-slick').slick('removeSlide', null, null, true);
						let disabledDates = jsonObj['disabled_dates'];
						jsonObj.first_day = jsonObj.first_day.replace(/\-/g, '/');
						jsonObj.last_day = jsonObj.last_day.replace(/\-/g, '/');
						
						for (var d = new Date(jsonObj.first_day); d < new Date(jsonObj.last_day); d.setDate(d.getDate() + 1)) {
							console.log(d);
							let dayString = ('0' + d.getDate()).slice(-2) + '-' + ('0' + (d.getMonth()+1)).slice(-2) + '-' + d.getFullYear();
							let disabledClassName = "";
							let thursdayDisableAttr = "";
							if(weekNames[d.getDay()]=="Thursday"){
								thursdayDisableAttr = "thursdayDisable='";
								let amDayString = dayString + 'AM';
								if(disabledDates.includes(amDayString)){
									thursdayDisableAttr += "AM";
								}
								let pmDayString = dayString + 'PM';
								if(disabledDates.includes(pmDayString)){
									thursdayDisableAttr += "PM";
								}
								thursdayDisableAttr +="'";								
							}
							if(disabledDates.includes(dayString)){
								disabledClassName = "disabled";
							}													
							let slideHtml = '<div '+thursdayDisableAttr+' date="'+dayString+'" class="single-date '+disabledClassName+'"><p>'+shortWeekNames[d.getDay()]+'</p><p>' +suffix_date(d.getDate())+' '+shortMonthNames[d.getMonth()]+'</p></div>';
							$('#delivery-slick').slick('slickAdd',slideHtml);
						}
						$("#shipping-wrapper .grid-view .comment-wrapper p").html("Please select a day available in the list above");
						$("#shipping-wrapper .toggle-wrapper .toggle").removeClass('disabled');
						$('#shipping-calendar').datepicker('option','minDate', new Date(jsonObj.first_day));
						$('#shipping-calendar').datepicker('option','maxDate', new Date(jsonObj.last_day));
						$("#shipping-calendar").datepicker('option','beforeShowDay', function (date){
							return unavailable(date,jsonObj.disabled_dates);
						});
						$("#hidden_suburb_cost").val(jsonObj.suburb_cost);
					},
					error: function(errorThrown){
						console.log(errorThrown);
					}
				});
			}
		})

		$(".proceed_to_checkout").on('click',function(e){
			e.preventDefault(true);
			if($('#shipping').prop('checked')){
				if($('input[name=fullstreetaddress]').val()==""){
					$('#fullstreetaddress-errmsg').html("This field is required");
				}
				// if($('input[name=apartment]').val()==""){
				// 	$('#apartment-errmsg').html("This field is required");
				// }
				if($('input[name=postalcode]').val()==""){
					$('#postalcode-errmsg').html("This field is required");
				}
				setTimeout(function(){
					$('.err-msg').html("");
				},2000);

				if(($('input[name=fullstreetaddress]').val()!="")&&($('input[name=postalcode]').val()!="")){
					$.ajax({
						url: woodmartPad.ajax_url,
						type: 'POST',
						data: $("#woodmart-pad-form").serialize() + '&action=proceed_to_checkout_ajax',
						success:function(data) {
							window.location.href= data;
						},
						error: function(errorThrown){
							console.log(errorThrown);
						}
					});
				}
			}else{
				$.ajax({
					url: woodmartPad.ajax_url,
					type: 'POST',
					data: $("#woodmart-pad-form").serialize() + '&action=proceed_to_checkout_ajax',
					success:function(data) {
						window.location.href= data;
					},
					error: function(errorThrown){
						console.log(errorThrown);
					}
				});
			}						
		});

		if(jQuery("#woodmart-pad-form").length){
			jQuery(".options-wrapper > div.half:first-child").trigger('click');
		}		

		if($('tr.woocommerce-shipping-totals.shipping').length){
			$('ul#shipping_method li').addClass('hide');
			$('ul#shipping_method li').each(function(){
				if($(this).find('input[type="radio"]').prop('checked')){
					$(this).removeClass('hide');
				}
			})
		}	
		
		$( document.body ).on( 'updated_checkout', function(){
			console.log('updated_checkout');
			if($('tr.woocommerce-shipping-totals.shipping').length){
				$('ul#shipping_method li').addClass('hide');
				$('ul#shipping_method li').each(function(){
					if($(this).find('input[type="radio"]').prop('checked')){
						$(this).removeClass('hide');
					}
				})
			}			
		});

		$( document.body ).on( 'updated_cart_totals', function(){
			console.log('updated_cart_total');
			if($('tr.woocommerce-shipping-totals.shipping').length){
				$('ul#shipping_method li').addClass('hide');
				$('ul#shipping_method li').each(function(){
					if($(this).find('input[type="radio"]').prop('checked')){
						$(this).removeClass('hide');
					}
				})
			}			
		});

		if(jQuery("#pickup-note-wrapper").text().replace(/\s/g, "")==""){
			$("#pickup-note-wrapper").addClass("hide");
		}
	})
})( jQuery );
