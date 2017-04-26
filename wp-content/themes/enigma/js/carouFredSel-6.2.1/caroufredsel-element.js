  var wl_caroufredsel = function () {
				 
			   // jQuery CarouFredSel  For blog               
				
				jQuery('#enigma_blog_section-1').wl_caroufredsel({
					width: '100%',
                    responsive: true,
                   scroll : {
						items : 1,
						duration : 2000,
						timeoutDuration : 2000
					},
                    circular: true,
					direction: 'left',
                    items: {
						height: 'variable',
                        visible: {
                            min: 1,
                            max: 3
                        },
						
                    },
                     prev: '#port-prev-1',
                    next: '#port-next-1',
                    auto: {
                        play: false
                    }
                });
				
				jQuery('#enigma_blog_section-2').wl_caroufredsel({
					width: '100%',
                    responsive: true,
                   scroll : {
						items : 1,
						duration : 2000,
						timeoutDuration : 2000
					},
                    circular: true,
					direction: 'left',
                    items: {
						height: 'variable',
                        visible: {
                            min: 1,
                            max: 3
                        },
						
                    },
                     prev: '#port-prev-2',
                    next: '#port-next-2',
                    auto: {
                        play: false
                    }
                });
				
				jQuery('#enigma_blog_section-3').wl_caroufredsel({
					width: '100%',
                    responsive: true,
                   scroll : {
						items : 1,
						duration : 2000,
						timeoutDuration : 2000
					},
                    circular: true,
					direction: 'left',
                    items: {
						height: 'variable',
                        visible: {
                            min: 1,
                            max: 3
                        },
						
                    },
                     prev: '#port-prev-3',
                    next: '#port-next-3',
                    auto: {
                        play: false
                    }
                });
         
			
          
			
			
			   
           
           
				
            
			
		}
		jQuery(window).resize(function () {
                wl_caroufredsel();
            });   
			jQuery(window).load(function () {
                wl_caroufredsel();
            });		