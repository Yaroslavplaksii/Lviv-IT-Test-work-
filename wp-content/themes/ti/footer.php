<div class="footer">
    <section class="center slider slider-size">
        <div>
            <img data-index="1" class="slider-image" src="<?php bloginfo('stylesheet_directory'); ?>/images/image9.png" alt="image9">
        </div>
        <div>
            <img data-index="2" class="slider-image" src="<?php bloginfo('stylesheet_directory'); ?>/images/image9.png" alt="image9">
        </div>
        <div>
            <img data-index="3" class="slider-image" src="<?php bloginfo('stylesheet_directory'); ?>/images/image9.png" alt="image9">
        </div>
        <div>
            <img data-index="4" class="slider-image" src="<?php bloginfo('stylesheet_directory'); ?>/images/image9.png" alt="image9">
        </div>
        <div>
            <img data-index="5" class="slider-image" src="<?php bloginfo('stylesheet_directory'); ?>/images/image9.png" alt="image9">
        </div> 
  </section>
  <div class="used-image"><span id="index-image"></span>/<span id="count-image"></span></div>      
  <script type="text/javascript">
    $(document).on('ready', function() {
        $('#index-image').html(1);
        $(".center").slick({
            dots: false,
            infinite: true,
            centerMode: true,
            slidesToShow: 2,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },                 
                {
                    breakpoint: 376,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
        ]
        });
        $('.slick-next, .slick-prev').on('click',function(){
            $('#index-image').html($('.slick-center>img').data('index') || 1);
        })
      let countImage = 0;  
      let allImage = $('img.slider-image[data-index]');
      for(let i=0; i<allImage.length; i++){
        if (countImage < allImage[i].getAttribute('data-index')) {
            countImage = allImage[i].getAttribute('data-index');
        }
      }     
      $('#count-image').html(countImage);
      $('.category-button').click(function() {
        $('.category-button').each(function(){
            $(this).removeClass('active');
        });
        let products = $('.product-item');
        if (products.length) {
            for (let i=0; i<products.length; i++) {                
                products[i].style.display = 'block';
            }
        }
        let categoryID = $(this).data('id');
        $(this).addClass('active');
        if (categoryID != 'all') {
            if (products.length) {
                for (let i=0; i<products.length; i++) {
                    if(products[i].getAttribute('data-category') != categoryID) {
                        products[i].style.display = 'none';
                    }
                }
            }
        }
      });
    });
</script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.swipebox.js"></script>
<script type="text/javascript">
	$( document ).ready(function() {

			/* Basic Gallery */
			$( '.swipebox' ).swipebox();
			
		

			/* Dynamic Gallery */
			$( '#gallery' ).on( 'click', function( e ) {
				e.preventDefault();
				$.swipebox( [
					{ href : 'demo/images/big-1.jpg', title : 'My Caption' },
					{ href : 'demo/images/big-2.jpg', title : 'My Second Caption' }
				] );
			} );

			/* Smooth scroll */
			$( '.scroll' ).on( 'click', function () {
				$( 'html, body' ).animate( { scrollTop: $( $( this ).attr('href') ).offset().top - 15 }, 750 ); // Go
				return false;
			});
      } );
	</script>
</div>