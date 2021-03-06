            </div>

            <footer id="bottom">
            	<div class="container">

					<div class="grid 1of3">
						<small>
			                <ul role="navigation">
			                    <li><a href="<?php echo rss_url(); ?>">RSS</a></li>
			                    <?php if(twitter_account()): ?>
			                    <li><a href="https://twitter.com/arthum" target="_blank">@arthum</a></li>
			                    <?php endif; ?>

			                    <li><a href="<?php echo base_url('admin'); ?>" title="Administer your site!">Admin area</a></li>
			                </ul>
			            </small>
	        		</div>
	        	</div>
            </footer>
        </div>

	    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	    <script>
	    	jQuery(document).ready(function($) {
	    		if($('nav .latest-post').hasClass('current')) {
	    			$('nav .latest-post').siblings('a').removeClass('current');
	    		}

	    		$('a[href="#menu"]').click(function() {
	    			$('a[href="#menu"]').toggleClass('current');
	    			$('.slidey').slideToggle(300);
	    		});

	    		$('section.content ol').not('.items').children('li').wrapInner('<p>');

				$('section.content img').each(function(){
					var act = $(this);
					var src = act.attr('src');
					var caption = act.attr('alt');
					var figureClass = act.attr('title');

					if (!figureClass) {
						figureClass = ' ';
					}

					act.wrap('<figure class="image-wrapper ' + figureClass + '" />');

					if (caption) {
						act.after('<figcaption>' + caption + '</figcaption>');
						act.attr('alt', 'Image');
					} else {
						act.removeAttr('alt');
					}

					if (figureClass) {
						act.removeAttr('title');
					}

					if (!src.substring(0,4).match('http') && !src.substring(0,5).match('https') && !src.substring(0,2).match('//')) {
						act.attr('src', '<?php echo base_url(); ?>content/' + src);
					}
				});
	    	});
	    </script>

			<script>
				(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

				ga('create', 'UA-41419707-1', 'auto');
				ga('send', 'pageview');

			</script>

		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script>
				jQuery(document).ready(function($) {
					$('body').addClass('ie');
				});
			</script>
		<![endif]-->
    </body>
</html>
