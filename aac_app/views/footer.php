</div>
    <!-- /#wrapper -->

    <!-- jQuery -->
	<script src="<?=RES_URL;?>js/jquery-1.11.1.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=RES_URL;?>js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?=RES_URL;?>js/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?=RES_URL;?>js/sb-admin-2.js"></script>
	<script src="<?=RES_URL;?>js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" language="javascript" src="<?=RES_URL;?>js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="<?=RES_URL;?>js/dataTables.bootstrap.js"></script>
	<script type="text/javascript" language="javascript" src="<?=RES_URL;?>js/dataTables.responsive.js"></script>
	<script type="text/javascript" language="javascript" src="<?=RES_URL;?>js/jquery.columnFilter.js"></script>
	<script type="text/javascript">
		// When the document is ready
		$(document).ready(function () {
			$('.datepicker').datepicker({
				format: "dd/mm/yyyy"
			});
			$('.datepicker').on('changeDate', function(ev){
				$(this).datepicker('hide');
			});
		});
    </script>

	<script type="text/javascript">
	// When the document is ready
		$(document).ready(function() {
			$('table.dttable').DataTable({
				"sDom": '<"top">rt<"bottom"><"clear">',
				"responsive" : true
			});
		});
	</script>










</body>

</html>