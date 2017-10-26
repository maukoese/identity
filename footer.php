
					<footer>
						<ul class="icons">
							<?php $social = getOption( 'social'); ?>
							<li><a href="<?php echo $social['twitter']; ?>" class="fa-twitter">Twitter</a></li>
							<li><a href="<?php echo $social['instagram']; ?>" class="fa-instagram">Instagram</a></li>
							<li><a href="<?php echo $social['facebook']; ?>" class="fa-facebook">Facebook</a></li>
						</ul>
					</footer>
				</section>

				<!-- Footer -->
					<footer id="footer">
						<ul class="copyright">
							<li><?php showOption( 'copyright' ); ?> - <a class="" href="<?php showOption( 'attribution_link' ); ?>"><?php showOption( 'attribution' ); ?></a></li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<!--[if lte IE 8]><script src="assets/js/respond.min.js"></script><![endif]-->
			<script>
				if ('addEventListener' in window) {
					window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-loading\b/, ''); });
					document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
				}
			</script>

	</body>
</html>