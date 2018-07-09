
jQuery(function(){
	jQuery('.ct-mid-p').text('0');
	// jQuery('.first-gauge .ct-top-p').hide();
	jQuery('.cti1').addClass('ct-marker');

	jQuery(window).scroll(function(){

		var screenheight = parseInt(jQuery(document).height());
		var scrolledpx = parseInt(jQuery("body").scrollTop());     
		var sum = screenheight+scrolledpx;

		function stuffAppear1(ctfg,aaa,bbb,ctsg,ccc,ddd,cttg,eee,fff,ctfrg,ggg,hhh) {
		    var i;
		    for (i = 1; i < ctfg; i++) {
		        apperance1(i);
		    }
		    for (i = 1; i < (parseInt(bbb) + 1); i++) {
		        fgt(i,aaa,bbb);
		    }
		    for (i = 1; i < ctsg; i++) {
		        apperance2(i);
		    }
		    for (i = 1; i < (parseInt(ddd) + 1); i++) {
		        sgt(i,ccc,ddd);
		    }
		    for (i = 1; i < cttg; i++) {
		        apperance3(i);
		    }
		    for (i = 1; i < (parseInt(fff) + 1); i++) {
		        tgt(i,eee,fff);
		    }
		    for (i = 1; i < ctfrg; i++) {
		        apperance4(i);
		    }
		    for (i = 1; i < (parseInt(hhh) + 1); i++) {
		        frgt(i,ggg,hhh);
		    }
		}

		function apperance1(i) {
		    setTimeout(function() {

		    	if (jQuery('.first-gauge .cti'+i).hasClass('gg')){
		    		var clas = '#9f9b96';
		    	}else{
		    		var clas = '#fb1616';
		    	}

		    	jQuery('.first-gauge .cti'+i).css('color',clas);
		    }, 1000 + i * 70);
		}
		function fgt(i,aaa,bbb){
			setTimeout(function() {
		    	jQuery('.first-gauge .ct-mid-p').text(i); // first gauge text
		    	if (i == aaa){
		    		jQuery('.first-gauge .ct-mid-p').css('color','#fb1616');
		    		// jQuery('.first-gauge .ct-top-p').fadeIn('slow');
		    	}
		    }, 1000 + i * 7);

			// setTimeout(function() {
		 //    	jQuery('.first-gauge .ct-mid-p').css('color','#fb1616'); // red
		 //    }, 1000 * 7);
		}

		function apperance2(i) {
		    setTimeout(function() {

		    	if (jQuery('.second-gauge .cti'+i).hasClass('gg')){
		    		var clas = '#9f9b96';
		    	}else{
		    		var clas = '#fb1616';
		    	}
		    	jQuery('.second-gauge .cti'+i).css('color',clas); // gray
		    }, 1000 + i * 70);
		}
		function sgt(i,ccc,ddd){
			setTimeout(function() {
		    	jQuery('.second-gauge .ct-mid-p').text(i); // first gauge text
		    	if (i == ccc){
		    		jQuery('.second-gauge .ct-mid-p').css('color','#fb1616'); // red
		    	}
		    }, 1000 + i * 7);
		}


		function apperance3(i) {
		    setTimeout(function() {

		    	if (jQuery('.third-gauge .cti'+i).hasClass('gg')){
		    		var clas = '#9f9b96';
		    	}else{
		    		var clas = '#fb1616';
		    	}
		    	jQuery('.third-gauge .cti'+i).css('color',clas); // gray
		    }, 1000 + i * 70);
		}
		function tgt(i,ccc,ddd){
			setTimeout(function() {
		    	jQuery('.third-gauge .ct-mid-p').text(i); // first gauge text
		    	if (i == ccc){
		    		jQuery('.third-gauge .ct-mid-p').css('color','#fb1616'); // red
		    	}
		    }, 1000 + i * 7);
		}

		function apperance4(i) {
		    setTimeout(function() {

		    	if (jQuery('.fourth-gauge .cti'+i).hasClass('gg')){
		    		var clas = '#9f9b96';
		    	}else{
		    		var clas = '#fb1616';
		    	}
		    	jQuery('.fourth-gauge .cti'+i).css('color',clas); // gray
		    }, 1000 + i * 70);
		}
		function frgt(i,ccc,ddd){
			setTimeout(function() {
		    	jQuery('.fourth-gauge .ct-mid-p').text(i); // first gauge text
		    	if (i == ccc){
		    		jQuery('.fourth-gauge .ct-mid-p').css('color','#fb1616'); // red
		    	}
		    }, 1000 + i * 7);
		}

		if (scrolledpx > 400){

			if ((jQuery('.cti1').hasClass('ct-marker'))){
				var ctfg = jQuery('.first-gauge .ct-icon-nbg.gray').length;
				var aaa = jQuery('.first-gauge').attr('ct-gauge-standard');
				var bbb = jQuery('.first-gauge').attr('ct-gauge-value');

				var ctsg = jQuery('.second-gauge .ct-icon-nbg.gray').length;
				var ccc = jQuery('.second-gauge').attr('ct-gauge-standard');
				var ddd = jQuery('.second-gauge').attr('ct-gauge-value');

				var cttg = jQuery('.third-gauge .ct-icon-nbg.gray').length;
				var eee = jQuery('.third-gauge').attr('ct-gauge-standard');
				var fff = jQuery('.third-gauge').attr('ct-gauge-value');

				var ctfrg = jQuery('.fourth-gauge .ct-icon-nbg.gray').length;
				var ggg = jQuery('.fourth-gauge').attr('ct-gauge-standard');
				var hhh = jQuery('.fourth-gauge').attr('ct-gauge-value');

				stuffAppear1(ctfg,aaa,bbb,ctsg,ccc,ddd,cttg,eee,fff,ctfrg,ggg,hhh);

				jQuery('.cti1').removeClass('ct-marker');
			}

			
			// setTimeout(function(){	jQuery('.cti1').css('color','#9f9b96');	},1000 * 0.04);
			// setTimeout(function(){	jQuery('.cti2').css('color','#9f9b96');	},1000 * 0.08);
			// setTimeout(function(){	jQuery('.cti3').css('color','#9f9b96');	},1000 * 0.12);
			// setTimeout(function(){	jQuery('.cti4').css('color','#9f9b96');	},1000 * 0.16);
			// setTimeout(function(){	jQuery('.cti5').css('color','#9f9b96');	},1000 * 0.20);
			// setTimeout(function(){	jQuery('.cti6').css('color','#9f9b96');	},1000 * 0.24);
			// setTimeout(function(){	jQuery('.cti7').css('color','#9f9b96');	},1000 * 0.28);
			// setTimeout(function(){	jQuery('.cti8').css('color','#9f9b96');	},1000 * 0.32);
			// setTimeout(function(){	jQuery('.cti9').css('color','#9f9b96');	},1000 * 0.36);
			// setTimeout(function(){	jQuery('.cti10').css('color','#9f9b96'); },1000 * 0.40);
			// setTimeout(function(){	jQuery('.cti11').css('color','#9f9b96'); },1000 * 0.44);
			// setTimeout(function(){	jQuery('.cti12').css('color','#9f9b96'); },1000 * 0.48);
			// setTimeout(function(){	jQuery('.cti13').css('color','#9f9b96'); },1000 * 0.52);
			// setTimeout(function(){	jQuery('.cti14').css('color','#9f9b96'); },1000 * 0.56);
			// setTimeout(function(){	jQuery('.cti15').css('color','#9f9b96'); },1000 * 0.60);
			// setTimeout(function(){	jQuery('.cti16').css('color','#9f9b96'); },1000 * 0.64);
			// setTimeout(function(){	jQuery('.cti17').css('color','#9f9b96'); },1000 * 0.68);
			// setTimeout(function(){	jQuery('.cti18').css('color','#9f9b96'); },1000 * 0.72);
			// setTimeout(function(){	jQuery('.cti19').css('color','#9f9b96'); },1000 * 0.76);
			// setTimeout(function(){	jQuery('.cti20').css('color','#9f9b96');	},1000 * 0.80);
			// setTimeout(function(){	jQuery('.cti21').css('color','#9f9b96');	},1000 * 0.84);
			// setTimeout(function(){	jQuery('.cti22').css('color','#9f9b96');	},1000 * 0.88);
			// setTimeout(function(){	jQuery('.cti23').css('color','#9f9b96');	},1000 * 0.92);
			// setTimeout(function(){	jQuery('.cti24').css('color','#9f9b96');	},1000 * 0.96);
			// setTimeout(function(){	jQuery('.cti25').css('color','#9f9b96');	},1000 * 1.00);
			// setTimeout(function(){	jQuery('.cti26').css('color','#9f9b96');	},1000 * 1.04);
			// setTimeout(function(){	jQuery('.cti27').css('color','#9f9b96');	},1000 * 1.08);
			// setTimeout(function(){	jQuery('.cti28').css('color','#9f9b96');	},1000 * 1.12);
			// setTimeout(function(){	jQuery('.cti29').css('color','#9f9b96');	},1000 * 1.16);
			// setTimeout(function(){	jQuery('.cti30').css('color','#9f9b96');	},1000 * 1.20);
			// setTimeout(function(){	jQuery('.cti31').css('color','#9f9b96');	},1000 * 1.24);
			// setTimeout(function(){	jQuery('.cti32').css('color','#9f9b96');	},1000 * 1.28);
			// setTimeout(function(){	jQuery('.cti33').css('color','#9f9b96');	},1000 * 1.32);
			// setTimeout(function(){	jQuery('.cti34').css('color','#9f9b96');	},1000 * 1.36);
			// setTimeout(function(){	jQuery('.cti35').css('color','#9f9b96');	},1000 * 1.40);
			// setTimeout(function(){	jQuery('.cti36').css('color','#9f9b96');	},1000 * 1.44);
			// setTimeout(function(){	jQuery('.cti37').css('color','#9f9b96');	},1000 * 1.48);
			// setTimeout(function(){	jQuery('.cti38').css('color','#9f9b96');	},1000 * 1.52);
			// setTimeout(function(){	jQuery('.cti39').css('color','#9f9b96');	},1000 * 1.56);
			// setTimeout(function(){	jQuery('.cti40').css('color','#9f9b96');	},1000 * 1.60);
			// setTimeout(function(){	jQuery('.cti41').css('color','#9f9b96');	},1000 * 1.64);
			// setTimeout(function(){	jQuery('.cti42').css('color','#9f9b96');	},1000 * 1.68);
			// setTimeout(function(){	jQuery('.cti43').css('color','#9f9b96');	},1000 * 1.72);
			// setTimeout(function(){	jQuery('.cti44').css('color','#9f9b96');	},1000 * 1.76);
			// setTimeout(function(){	jQuery('.cti45').css('color','#9f9b96');	},1000 * 1.80);
			// setTimeout(function(){	jQuery('.cti46').css('color','#9f9b96');	},1000 * 1.84);
			// setTimeout(function(){	jQuery('.cti47').css('color','#9f9b96');	},1000 * 1.88);
			// setTimeout(function(){	jQuery('.cti48').css('color','#9f9b96');	},1000 * 1.92);
			// setTimeout(function(){	jQuery('.cti49').css('color','#9f9b96');	},1000 * 1.96);
			// setTimeout(function(){	jQuery('.cti50').css('color','#9f9b96');	},1000 * 2.00);
			// setTimeout(function(){	jQuery('.cti51').css('color','#9f9b96');	},1000 * 2.04);
			// setTimeout(function(){	jQuery('.cti52').css('color','#9f9b96');	},1000 * 2.06);
			// setTimeout(function(){	jQuery('.cti53').css('color','#9f9b96');	},1000 * 2.08);
			// setTimeout(function(){	jQuery('.cti54').css('color','#9f9b96');	},1000 * 2.12);
			// setTimeout(function(){	jQuery('.cti55').css('color','#9f9b96');	},1000 * 2.16);
			// setTimeout(function(){	jQuery('.cti56').css('color','#9f9b96');	},1000 * 2.20);

			// if ((jQuery('.cti1').hasClass('ct-marker'))){

			// 	setTimeout(function(){ jQuery('.ct-mid-p').text('1') },1000 * 0.2);
			// 	setTimeout(function(){ jQuery('.ct-mid-p').text('20') },1000 * 0.4);
			// 	setTimeout(function(){ jQuery('.ct-mid-p').text('60') },1000 * 0.6);
			// 	setTimeout(function(){ jQuery('.ct-mid-p').text('80') },1000 * 0.8);
			// 	setTimeout(function(){ jQuery('.ct-mid-p').text('120') },1000 * 1.0);
			// 	setTimeout(function(){ jQuery('.ct-mid-p').text('160') },1000 * 1.2);
			// 	setTimeout(function(){ jQuery('.ct-mid-p').text('200') },1000 * 1.4);
			// 	setTimeout(function(){ jQuery('.ct-mid-p').text('240') },1000 * 1.6);
			// 	setTimeout(function(){ jQuery('.ct-mid-p').text('280') },1000 * 1.8);
			// 	setTimeout(function(){ jQuery('.ct-mid-p').text('320') },1000 * 2.0);
			// 	setTimeout(function(){ jQuery('.ct-mid-p').text('360') },1000 * 2.2);
			// 	setTimeout(function(){ jQuery('.ct-mid-p').text('380') },1000 * 2.4);
			// 	setTimeout(function(){ jQuery('.ct-mid-p').text('400') },1000 * 2.6);
			// 	setTimeout(function(){ jQuery('.ct-mid-p').text('420') },1000 * 2.8);

			// 	jQuery('.cti1').removeClass('ct-marker');
			// }
		}
	});

	
	function cthide(vl){

		var a = vl+'px';
		jQuery('.ct-hm-dd-menu.seven').css({'margin-bottom':'0'});

		if (screen.width > 1000){
			jQuery('.ct-div-space').css({'padding-bottom':a});
		}
	}

	//bmw inner page dropdown

	function ishidden(){
		if (jQuery('.ct-hm-dd-menu.seven').not(':visible')){
			if (jQuery('.ct-hm-dd-menu.eight').not(':visible')){
				jQuery('.ct-div-space').css({'padding-bottom':'0'});
				console.log('7 and 8 is hidden');
			}
		}
	}

	jQuery('.ct-upper-p').on('click', function(){
		// jQuery('.ct-hm-dd-menu').addClass('oh');
		// jQuery(this).closest('.ct-hm-dd-menu').addClass('hey');
	});
	jQuery('.ct-upper-p.one, .ct-bot-img.one').on('click', function(){
		var hi = (jQuery('.ct-hm-dd-menu.one').height());
		var h = (jQuery('.ct-hm-dd-menu.one').length) * (hi);
		console.log('length '+h);

		if (jQuery('.ct-hm-dd-menu.one').is(':hidden')){
			cthide(h);
		}else{
			jQuery('.ct-div-space').css({'padding-bottom':'0'});
		}
		jQuery('.ct-hm-dd-menu.one').slideToggle();
		jQuery('.ct-hm-dd-menu.two').slideUp();
		jQuery('.ct-hm-dd-menu.three').slideUp();
		jQuery('.ct-hm-dd-menu.four').slideUp();
		jQuery('.ct-hm-dd-menu.five').slideUp();
		jQuery('.ct-hm-dd-menu.six').slideUp();
		jQuery('.ct-hm-dd-menu.seven').slideUp();
		jQuery('.ct-hm-dd-menu.eight').slideUp();
		jQuery('.ct-hm-dd-menu.nine').slideUp();
		jQuery('.ct-hm-dd-menu.ten').slideUp();
		
	});
	jQuery('.ct-upper-p.two, .ct-bot-img.two').on('click', function(){
		var hi = (jQuery('.ct-hm-dd-menu.two').height());
		var h = (jQuery('.ct-hm-dd-menu.two').length) * (hi);
		console.log('length '+h);

		if (jQuery('.ct-hm-dd-menu.two').is(':hidden')){
			cthide(h);
		}else{
			jQuery('.ct-div-space').css({'padding-bottom':'0'});
		}
		jQuery('.ct-hm-dd-menu.one').slideUp();
		jQuery('.ct-hm-dd-menu.two').slideToggle();
		jQuery('.ct-hm-dd-menu.three').slideUp();
		jQuery('.ct-hm-dd-menu.four').slideUp();
		jQuery('.ct-hm-dd-menu.five').slideUp();
		jQuery('.ct-hm-dd-menu.six').slideUp();
		jQuery('.ct-hm-dd-menu.seven').slideUp();
		jQuery('.ct-hm-dd-menu.eight').slideUp();
		jQuery('.ct-hm-dd-menu.nine').slideUp();
		jQuery('.ct-hm-dd-menu.ten').slideUp();
	});
	jQuery('.ct-upper-p.three, .ct-bot-img.three').on('click', function(){
		var hi = (jQuery('.ct-hm-dd-menu.three').height());
		var h = (jQuery('.ct-hm-dd-menu.three').length) * (hi);
		console.log('height '+h);

		if (jQuery('.ct-hm-dd-menu.three').is(':hidden')){
			cthide(h);
		}else{
			jQuery('.ct-div-space').css({'padding-bottom':'0'});
		}
		jQuery('.ct-hm-dd-menu.one').slideUp();
		jQuery('.ct-hm-dd-menu.two').slideUp();
		jQuery('.ct-hm-dd-menu.three').slideToggle();
		jQuery('.ct-hm-dd-menu.four').slideUp();
		jQuery('.ct-hm-dd-menu.five').slideUp();
		jQuery('.ct-hm-dd-menu.six').slideUp();
		jQuery('.ct-hm-dd-menu.seven').slideUp();
		jQuery('.ct-hm-dd-menu.eight').slideUp();
		jQuery('.ct-hm-dd-menu.nine').slideUp();
		jQuery('.ct-hm-dd-menu.ten').slideUp();
	});
	jQuery('.ct-upper-p.four, .ct-bot-img.four').on('click', function(){
		var hi = (jQuery('.ct-hm-dd-menu.four').height());
		var h = (jQuery('.ct-hm-dd-menu.four').length) * (hi);
		console.log('length '+h);

		if (jQuery('.ct-hm-dd-menu.four').is(':hidden')){
			cthide(h);
		}else{
			jQuery('.ct-div-space').css({'padding-bottom':'0'});
		}
		jQuery('.ct-hm-dd-menu.one').slideUp();
		jQuery('.ct-hm-dd-menu.two').slideUp();
		jQuery('.ct-hm-dd-menu.three').slideUp();
		jQuery('.ct-hm-dd-menu.four').slideToggle();
		jQuery('.ct-hm-dd-menu.five').slideUp();
		jQuery('.ct-hm-dd-menu.six').slideUp();
		jQuery('.ct-hm-dd-menu.seven').slideUp();
		jQuery('.ct-hm-dd-menu.eight').slideUp();
		jQuery('.ct-hm-dd-menu.nine').slideUp();
		jQuery('.ct-hm-dd-menu.ten').slideUp();
	});
	jQuery('.ct-upper-p.five, .ct-bot-img.five').on('click', function(){
		var hi = (jQuery('.ct-hm-dd-menu.five').height());
		var h = (jQuery('.ct-hm-dd-menu.five').length) * (hi);
		console.log('length '+h);

		if (jQuery('.ct-hm-dd-menu.five').is(':hidden')){
			cthide(h);
		}else{
			jQuery('.ct-div-space').css({'padding-bottom':'0'});
		}
		jQuery('.ct-hm-dd-menu.one').slideUp();
		jQuery('.ct-hm-dd-menu.two').slideUp();
		jQuery('.ct-hm-dd-menu.three').slideUp();
		jQuery('.ct-hm-dd-menu.four').slideUp();
		jQuery('.ct-hm-dd-menu.five').slideToggle();
		jQuery('.ct-hm-dd-menu.six').slideUp();
		jQuery('.ct-hm-dd-menu.seven').slideUp();
		jQuery('.ct-hm-dd-menu.eight').slideUp();
		jQuery('.ct-hm-dd-menu.nine').slideUp();
		jQuery('.ct-hm-dd-menu.ten').slideUp();
	});
	jQuery('.ct-upper-p.six, .ct-bot-img.six').on('click', function(){
		var hi = (jQuery('.ct-hm-dd-menu.six').height());
		var h = (jQuery('.ct-hm-dd-menu.six').length) * (hi);
		console.log('length '+h);

		if (jQuery('.ct-hm-dd-menu.six').is(':hidden')){
			cthide(h);
		}else{
			jQuery('.ct-div-space').css({'padding-bottom':'0'});
		}
		jQuery('.ct-hm-dd-menu.one').slideUp();
		jQuery('.ct-hm-dd-menu.two').slideUp();
		jQuery('.ct-hm-dd-menu.three').slideUp();
		jQuery('.ct-hm-dd-menu.four').slideUp();
		jQuery('.ct-hm-dd-menu.five').slideUp();
		jQuery('.ct-hm-dd-menu.six').slideToggle();
		jQuery('.ct-hm-dd-menu.seven').slideUp();
		jQuery('.ct-hm-dd-menu.eight').slideUp();
		jQuery('.ct-hm-dd-menu.nine').slideUp();
		jQuery('.ct-hm-dd-menu.ten').slideUp();
	});
	jQuery('.ct-upper-p.seven, .ct-bot-img.seven').on('click', function(){
		var hi = (jQuery('.ct-hm-dd-menu.seven').height());
		var h = (jQuery('.ct-hm-dd-menu.seven').length) * (hi);
		console.log('length '+h);

		if (jQuery('.ct-hm-dd-menu.seven').is(':hidden')){
			cthide(h);
		}else{
			jQuery('.ct-div-space').css({'padding-bottom':'0'});
		}
		jQuery('.ct-hm-dd-menu.one').slideUp();
		jQuery('.ct-hm-dd-menu.two').slideUp();
		jQuery('.ct-hm-dd-menu.three').slideUp();
		jQuery('.ct-hm-dd-menu.four').slideUp();
		jQuery('.ct-hm-dd-menu.five').slideUp();
		jQuery('.ct-hm-dd-menu.six').slideUp();
		jQuery('.ct-hm-dd-menu.eight').slideUp();
		jQuery('.ct-hm-dd-menu.nine').slideUp();
		jQuery('.ct-hm-dd-menu.ten').slideUp();
		// jQuery('.ct-hm-dd-menu.seven').css({'margin-bottom':'500px'}).slideToggle();
		jQuery('.ct-hm-dd-menu.seven').slideToggle();
	});
	jQuery('.ct-upper-p.eight, .ct-bot-img.eight').on('click', function(){
		var hi = (jQuery('.ct-hm-dd-menu.eight').height());
		var h = (jQuery('.ct-hm-dd-menu.eight').length) * (hi);
		console.log('length '+h);

		if (jQuery('.ct-hm-dd-menu.eight').is(':hidden')){
			cthide(h);
		}else{
			jQuery('.ct-div-space').css({'padding-bottom':'0'});
		}
		jQuery('.ct-hm-dd-menu.one').slideUp();
		jQuery('.ct-hm-dd-menu.two').slideUp();
		jQuery('.ct-hm-dd-menu.three').slideUp();
		jQuery('.ct-hm-dd-menu.four').slideUp();
		jQuery('.ct-hm-dd-menu.five').slideUp();
		jQuery('.ct-hm-dd-menu.six').slideUp();
		jQuery('.ct-hm-dd-menu.seven').slideUp();
		jQuery('.ct-hm-dd-menu.eight').slideToggle();
		jQuery('.ct-hm-dd-menu.nine').slideUp();
		jQuery('.ct-hm-dd-menu.ten').slideUp();
	});
	jQuery('.ct-upper-p.nine, .ct-bot-img.nine').on('click', function(){
		var hi = (jQuery('.ct-hm-dd-menu.nine').height());
		var h = (jQuery('.ct-hm-dd-menu.nine').length) * (hi);
		console.log('length '+h);

		if (jQuery('.ct-hm-dd-menu.nine').is(':hidden')){
			console.log('hidden');
			cthide(h);
		}else{
			jQuery('.ct-div-space').css({'padding-bottom':'0'});
			console.log('shown');
		}
		jQuery('.ct-hm-dd-menu.one').slideUp();
		jQuery('.ct-hm-dd-menu.two').slideUp();
		jQuery('.ct-hm-dd-menu.three').slideUp();
		jQuery('.ct-hm-dd-menu.four').slideUp();
		jQuery('.ct-hm-dd-menu.five').slideUp();
		jQuery('.ct-hm-dd-menu.six').slideUp();
		jQuery('.ct-hm-dd-menu.seven').slideUp();
		jQuery('.ct-hm-dd-menu.eight').slideUp();
		jQuery('.ct-hm-dd-menu.nine').slideToggle();
		jQuery('.ct-hm-dd-menu.ten').slideUp();
	});
	jQuery('.ct-upper-p.ten, .ct-bot-img.ten').on('click', function(){
		var hi = (jQuery('.ct-hm-dd-menu.ten').height());
		var h = (jQuery('.ct-hm-dd-menu.ten').length) * (hi);
		console.log('length '+h);

		if (jQuery('.ct-hm-dd-menu.ten').is(':hidden')){
			console.log('hidden');
			cthide(h);
		}else{
			console.log('shown');
			jQuery('.ct-div-space').css({'padding-bottom':'0'});
		}
		jQuery('.ct-hm-dd-menu.one').slideUp();
		jQuery('.ct-hm-dd-menu.two').slideUp();
		jQuery('.ct-hm-dd-menu.three').slideUp();
		jQuery('.ct-hm-dd-menu.four').slideUp();
		jQuery('.ct-hm-dd-menu.five').slideUp();
		jQuery('.ct-hm-dd-menu.six').slideUp();
		jQuery('.ct-hm-dd-menu.seven').slideUp();
		jQuery('.ct-hm-dd-menu.eight').slideUp();
		jQuery('.ct-hm-dd-menu.nine').slideUp();
		jQuery('.ct-hm-dd-menu.ten').slideToggle();
	});

	// END bmw inner page dropdown

	jQuery('.ct-m.one').on('click', function(){
		jQuery('.ct-b.one').slideToggle();
	});
	jQuery('.ct-m.two').on('click', function(){
		jQuery('.ct-b.two').slideToggle();
	});
	jQuery('.ct-m.three').on('click', function(){
		jQuery('.ct-b.three').slideToggle();
	});
	jQuery('.ct-m.four').on('click', function(){
		jQuery('.ct-b.four').slideToggle();
	});
	jQuery('.ct-m.five').on('click', function(){
		jQuery('.ct-b.five').slideToggle();
	});
	jQuery('.ct-m.six').on('click', function(){
		jQuery('.ct-b.six').slideToggle();
	});
	jQuery('.ct-m.seven').on('click', function(){
		jQuery('.ct-b.seven').slideToggle();
	});

	// videos

	jQuery('.vid-pic.one').on('click', function(){
		jQuery('.vid-pic.two').removeClass('active').addClass('pd');
		jQuery('.vid-pic.three').removeClass('active').addClass('pd');
		jQuery('.vid-pic.four').removeClass('active').addClass('pd');
		jQuery('.vid-pic.five').removeClass('active').addClass('pd');
		jQuery('.vid-pic.six').removeClass('active').addClass('pd');
		jQuery(this).addClass('active');
		jQuery('.vid.one').show("slide", { direction: "left" }, 500);
		jQuery('.vid.two').hide();
		jQuery('.vid.three').hide();
		jQuery('.vid.four').hide();
		jQuery('.vid.five').hide();
		jQuery('.vid.six').hide();

		setTimeout(function(){
			jQuery('.vid-pic').removeClass('pd');
		}, 1000);
	});
	jQuery('.vid-pic.two').on('click', function(){
		jQuery('.vid-pic.one').removeClass('active').addClass('pd');
		jQuery(this).addClass('active');
		jQuery('.vid-pic.three').removeClass('active').addClass('pd');
		jQuery('.vid-pic.four').removeClass('active').addClass('pd');
		jQuery('.vid-pic.five').removeClass('active').addClass('pd');
		jQuery('.vid-pic.six').removeClass('active').addClass('pd');
		jQuery('.vid.one').hide();
		jQuery('.vid.two').show("slide", { direction: "left" }, 500);
		jQuery('.vid.three').hide();
		jQuery('.vid.four').hide();
		jQuery('.vid.five').hide();
		jQuery('.vid.six').hide();

		setTimeout(function(){
			jQuery('.vid-pic').removeClass('pd');
		}, 1000);
	});
	jQuery('.vid-pic.three').on('click', function(){
		jQuery('.vid-pic.one').removeClass('active').addClass('pd');
		jQuery('.vid-pic.two').removeClass('active').addClass('pd');
		jQuery(this).addClass('active');
		jQuery('.vid-pic.four').removeClass('active').addClass('pd');
		jQuery('.vid-pic.five').removeClass('active').addClass('pd');
		jQuery('.vid-pic.six').removeClass('active').addClass('pd');
		jQuery('.vid.one').hide();
		jQuery('.vid.two').hide();
		jQuery('.vid.three').show("slide", { direction: "left" }, 500);
		jQuery('.vid.four').hide();
		jQuery('.vid.five').hide();
		jQuery('.vid.six').hide();

		setTimeout(function(){
			jQuery('.vid-pic').removeClass('pd');
		}, 1000);
	});
	jQuery('.vid-pic.four').on('click', function(){
		jQuery('.vid-pic.one').removeClass('active').addClass('pd');
		jQuery('.vid-pic.two').removeClass('active').addClass('pd');
		jQuery('.vid-pic.three').removeClass('active').addClass('pd');
		jQuery(this).addClass('active');
		jQuery('.vid-pic.five').removeClass('active').addClass('pd');
		jQuery('.vid-pic.six').removeClass('active').addClass('pd');
		jQuery('.vid.one').hide();
		jQuery('.vid.two').hide();
		jQuery('.vid.three').hide();
		jQuery('.vid.four').show("slide", { direction: "left" }, 500);
		jQuery('.vid.five').hide();
		jQuery('.vid.six').hide();

		setTimeout(function(){
			jQuery('.vid-pic').removeClass('pd');
		}, 1000);
	});
	jQuery('.vid-pic.five').on('click', function(){
		jQuery('.vid-pic.one').removeClass('active').addClass('pd');
		jQuery('.vid-pic.two').removeClass('active').addClass('pd');
		jQuery('.vid-pic.three').removeClass('active').addClass('pd');
		jQuery('.vid-pic.four').removeClass('active').addClass('pd');
		jQuery(this).addClass('active');
		jQuery('.vid-pic.six').removeClass('active').addClass('pd');
		jQuery('.vid.one').hide();
		jQuery('.vid.two').hide();
		jQuery('.vid.three').hide();
		jQuery('.vid.four').hide();
		jQuery('.vid.five').show("slide", { direction: "left" }, 500);
		jQuery('.vid.six').hide();

		setTimeout(function(){
			jQuery('.vid-pic').removeClass('pd');
		}, 1000);
	});
	jQuery('.vid-pic.six').on('click', function(){
		jQuery('.vid-pic.one').removeClass('active').addClass('pd');
		jQuery('.vid-pic.two').removeClass('active').addClass('pd');
		jQuery('.vid-pic.three').removeClass('active').addClass('pd');
		jQuery('.vid-pic.four').removeClass('active').addClass('pd');
		jQuery('.vid-pic.five').removeClass('active').addClass('pd');
		jQuery(this).addClass('active');
		jQuery('.vid.one').hide();
		jQuery('.vid.two').hide();
		jQuery('.vid.three').hide();
		jQuery('.vid.four').hide();
		jQuery('.vid.five').hide();
		jQuery('.vid.six').show("slide", { direction: "left" }, 500);

		setTimeout(function(){
			jQuery('.vid-pic').removeClass('pd');
		}, 1000);
	});

	// END videos

	if ( jQuery('body').hasClass('page-id-11835') ||
		jQuery('body').hasClass('page-id-14158')  ||
		jQuery('body').hasClass('page-id-14152')  ||
		jQuery('body').hasClass('page-id-14157')  ||
		jQuery('body').hasClass('page-id-14159')  ){

		jQuery('.ct-hamann-r1 > .wpb_wrapper, .ct-hamann-r2 > .wpb_wrapper, .ct-hamann-r3 > .wpb_wrapper').on('click', function(){
			var a = jQuery(this).find('a');
			var b = a.attr('href');
			window.location = b;
		});
	}

	if ( jQuery('body').hasClass('page-id-16830') || 
		jQuery('body').hasClass('page-id-17334') || 
		jQuery('body').hasClass('page-id-17531') || 
		jQuery('body').hasClass('page-id-17816') || 

		jQuery('body').hasClass('page-id-18243') || 
		jQuery('body').hasClass('page-id-19213') || 
		jQuery('body').hasClass('page-id-19357') || 
		jQuery('body').hasClass('page-id-19537') || 

		jQuery('body').hasClass('page-id-20496') || 
		jQuery('body').hasClass('page-id-20686') || 
		jQuery('body').hasClass('page-id-20958') || 
		jQuery('body').hasClass('page-id-21173') || 

		jQuery('body').hasClass('page-id-21861') || 
		jQuery('body').hasClass('page-id-22091') || 
		jQuery('body').hasClass('page-id-22158') || 
		jQuery('body').hasClass('page-id-22224') 
		)
	{
		window.location = '/complete-car-tuners/techart-test';
	}

	var ctsw = screen.width;

	if (ctsw <= 690){
		jQuery('.ct-heico-ul > li').has('ul').addClass('ct-mobile');

		jQuery('.ct-mobile').on('click', function(){
			jQuery(this).toggleClass('hide');
			if (jQuery(this).hasClass('hide')){
				// jQuery('.ct-sub').css('display','block','important');
				jQuery(this).children('.ct-sub').slideDown();
			}else{
				// jQuery('.ct-sub').css('display','none','important');
				jQuery(this).children('.ct-sub').slideUp();
			}
		});
	}

});

function myFunction() {
    var x = document.getElementById("myTopnav");
    var y = document.getElementById('ctdrop');
    if (x.className === "topnav") {
        x.className += " responsive";
        y.innerHTML = "&#10006;";
    } else {
        x.className = "topnav";
        y.innerHTML = "&#9776;";
    }
}