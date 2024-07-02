<!-- jQuery first, then Tether, then other JS. -->
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendor/unifyMenu/unifyMenu.js') }}"></script>
<script src="{{ asset('vendor/onoffcanvas/onoffcanvas.js') }}"></script>
<script src="{{ asset('js/moment.js') }}"></script>

<!-- Slimscroll JS -->
<script src="{{ asset('vendor/slimscroll/slimscroll.min.js') }}"></script>
<script src="{{ asset('vendor/slimscroll/custom-scrollbar.js') }}"></script>

<!-- Chartist JS -->
<script src="{{ asset('vendor/chartist/js/chartist.min.js') }}"></script>
<script src="{{ asset('vendor/chartist/js/chartist-tooltip.js') }}"></script>
<script src="{{ asset('vendor/chartist/js/custom/custom-line-chart.js') }}"></script>
<script src="{{ asset('vendor/chartist/js/custom/custom-line-chart1.js') }}"></script>
<script src="{{ asset('vendor/chartist/js/custom/custom-area-chart.js') }}"></script>
<script src="{{ asset('vendor/chartist/js/custom/donut-chart2.js') }}"></script>
<script src="{{ asset('vendor/chartist/js/custom/custom-line-chart4.js') }}"></script>
<script src="{{ asset('vendor/d3/d3.min.js') }}"></script>
<script src="{{ asset('vendor/c3/c3.min.js') }}"></script>

<!-- C3 Graphs -->
<script src="{{ asset('vendor/c3/c3.min.js') }}"></script>
	<script src="{{ asset('vendor/c3/custom/line-graph.js') }}"></script>
	<script src="{{ asset('vendor/c3/custom/spline-graph.js') }}"></script>
	<script src="{{ asset('vendor/c3/custom/area-spline-graph.js') }}"></script>
	<script src="{{ asset('vendor/c3/custom/step-graph.js') }}"></script>
	<script src="{{ asset('vendor/c3/custom/bar-area-graph.js') }}"></script>
	<script src="{{ asset('vendor/c3/custom/bar-graph.js') }}"></script>
	<script src="{{ asset('vendor/c3/custom/stacked-bar-braph.js') }}"></script>
	<script src="{{ asset('vendor/c3/custom/scatter-plot.js') }}"></script>
	<script src="{{ asset('vendor/c3/custom/pie-chart.js') }}"></script>
	<script src="{{ asset('vendor/c3/custom/pie-chart-one.js') }}"></script>
	<script src="{{ asset('vendor/c3/custom/donut-chart.js') }}"></script>
	<script src="{{ asset('vendor/c3/custom/server-requests.js') }}"></script>
	<script src="{{ asset('vendor/c3/custom/spline-sales.js') }}"></script>
	<script src="{{ asset('vendor/c3/custom/line-graph-overview.js') }}"></script>
	<script src="{{ asset('vendor/c3/custom/line-graph-one.js') }}"></script>

<!-- Data Tables -->
<script src="{{ asset('vendor/datatables/dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/dataTables.bootstrap.min.js') }}"></script>

<!-- Custom Data tables -->
<script src="{{ asset('vendor/datatables/custom/custom-datatables.js') }}"></script>

<script src="{{ asset('vendor/datatables/custom/fixedHeader.js') }}"></script>

<!-- Common JS -->
<script src="{{ asset('js/common.js') }}"></script>

<!-- Custom Scripts -->
<script>
    $(document).ready(function() {
        // Show the success modal if there's a success message
        @if(session('success'))
            $('#successModal').modal('show');
        @endif

        // Show the error modal if there's an error message
        @if(session('error'))
            $('#errorModal').modal('show');
        @endif

        var formToSubmit;

        // Handle the delete confirmation modal
        $('#confirmModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var id = button.data('id');
            formToSubmit = $('#deleteForm-' + id);
        });

        $('#confirmDelete').click(function() {
            formToSubmit.submit();
        });

        // Remove the modal backdrop when the modal is hidden
        $('#confirmModal').on('hidden.bs.modal', function () {
            $('.modal-backdrop').remove();
        });
    });
</script>
