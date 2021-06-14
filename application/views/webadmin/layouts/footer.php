
<a id="back-to-top" href="#" class="btn btn-primary back-to-top-left" role="button" aria-label="Scroll to top">
	<i class="bi-arrow-up text-light"></i>
</a>

</main>

<div id="modal-placehorder"></div>

<!-- Modal -->
<div class="modal fade" id="modal-overlay" tabindex="-1"  aria-hidden="true">

	<div class="modal-dialog modal-sm modal-dialog-centered">

		<div class="modal-content">
			<div class="modal-body">
				<div class="text-center">
					<div class="spinner-border" style="width: 10rem; height: 10rem;" role="status" aria-hidden="true"></div>
				</div>
			</div>
		</div>
	</div>
</div>

</body>

<script>

	$(document).ready( function () {
		$('.select2').select2();
	});

	function move(elem, max) {
			i = 1;
			var progressValue = 1;
			var progressBar = setInterval(loading, 10);

			function loading() {

				if (progressValue >= max) {

					clearInterval(progressBar);
					i = 0;

				} else {

					progressValue++;
					elem.val(progressValue);

				}

			}

	}

</script>

</html>
