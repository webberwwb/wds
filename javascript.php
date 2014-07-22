<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/ekko-lightbox.js"></script>
<script>
	$(document).ready(function ($) {
		// delegate calls to data-toggle="lightbox"
		$(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
			event.preventDefault();
			return $(this).ekkoLightbox({
				always_show_close: true
			});
		});
	});
</script>
<script src="js/bootstrap.min.js"></script>