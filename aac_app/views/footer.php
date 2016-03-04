</div>
<!-- /#wrapper -->
</div><!--  end row -->
</div><!--  end container page-content -->
</div><!--  end row -->
</div><!--  end container -->

<!-- footer start-->
<div class="site__title" style="position:bottom">
    <div id="footer">

        <div id="trailer">
            <div class="container">
                <div class="row">
                    <div id="trailer-content">
                        <p class="contacts"><a href="http://www.rku.ac.in/contacts/">Get in Touch with Us</a></p>

                        <p class="phone">In INDIA <br><span class="number">RK University</span></p>

                        <a href="http://www.rku.ac.in" class="button">Study Enquiries</a>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div> <!-- end of footer-->

<!-- jQuery -->
<script src="<?= RES_URL; ?>js/jquery-1.11.1.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?= RES_URL; ?>js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?= RES_URL; ?>js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?= RES_URL; ?>js/sb-admin-2.js"></script>
<script src="<?= RES_URL; ?>js/bootstrap-datepicker.js"></script>
<script type="text/javascript" language="javascript" src="<?= RES_URL; ?>js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="<?= RES_URL; ?>js/dataTables.bootstrap.js"></script>
<script type="text/javascript" language="javascript" src="<?= RES_URL; ?>js/dataTables.responsive.js"></script>
<script type="text/javascript" language="javascript" src="<?= RES_URL; ?>js/jquery.columnFilter.js"></script>
<script type="text/javascript">
    // When the document is ready
    $(document).ready(function () {
        $('.datepicker').datepicker({
            format: "dd/mm/yyyy"
        });
        $('.datepicker').on('changeDate', function (ev) {
            $(this).datepicker('hide');
        });
    });
</script>

<script type="text/javascript">
    // When the document is ready
    $(document).ready(function () {
        $('table.dttable').DataTable({
            "sDom": '<"top">rt<"bottom"><"clear">',
            "responsive": true
        });
    });
</script>


</body>

</html>