
        <!-- online link for data table -->
				<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css"> -->
				<!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css"> -->
				<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> -->
				<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js">
				<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
				<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
				<link rel="stylesheet" href="https://cdn.datatables.net/searchbuilder/1.6.0/css/searchBuilder.dataTables.min.css">
				<link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.5.1/css/dataTables.dateTime.min.css"> -->

				
				<!-- jQuery  -->
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/waves.js')}}"></script>
        <script src="{{asset('js/wow.min.js')}}"></script>
        <script src="{{asset('js/jquery.nicescroll.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/jquery.scrollTo.min.js')}}"></script>
        <script src="{{asset('assets/chat/moment-2.2.1.js')}}"></script>
        <script src="{{asset('assets/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
        <script src="{{asset('assets/jquery-detectmobile/detect.js')}}"></script>
        <script src="{{asset('assets/fastclick/fastclick.js')}}"></script>
        <script src="{{asset('assets/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('assets/jquery-blockui/jquery.blockUI.js')}}"></script>

        <!-- Notification-->
        <script src="assets/notifications/notify.min.js"></script>
        <script src="assets/notifications/notify-metro.js"></script>
        <script src="assets/notifications/notifications.js"></script>
        
        <!-- sweet alerts -->
        <script src="{{asset('assets/sweet-alert/sweet-alert.min.js')}}"></script>
        <script src="{{asset('assets/sweet-alert/sweet-alert.init.js')}}"></script>

        <!-- flot Chart -->
        <script src="{{asset('assets/flot-chart/jquery.flot.js')}}"></script>
        <script src="{{asset('assets/flot-chart/jquery.flot.time.js')}}"></script>
        <script src="{{asset('assets/flot-chart/jquery.flot.tooltip.min.js')}}"></script>
        <script src="{{asset('assets/flot-chart/jquery.flot.resize.js')}}"></script>
        <script src="{{asset('assets/flot-chart/jquery.flot.pie.js')}}"></script>
        <script src="{{asset('assets/flot-chart/jquery.flot.selection.js')}}"></script>
        <script src="{{asset('assets/flot-chart/jquery.flot.stack.js')}}"></script>
        <script src="{{asset('assets/flot-chart/jquery.flot.crosshair.js')}}"></script>

        <!-- Counter-up -->
        <script src="{{asset('assets/counterup/waypoints.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
        
        <!-- CUSTOM JS -->
        <script src="{{asset('js/jquery.app.js')}}"></script>

        <!-- Chat -->
        <script src="{{asset('js/jquery.chat.js')}}"></script>

        <!-- Todo -->
        <script src="{{asset('js/jquery.todo.js')}}"></script>
				<!-- data Table -->
        <script src="{{asset('assets/datatables/jquery.dataTables.js')}}"></script>
        <script src="{{asset('assets/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/datatables/dataTables.bootstrap.js')}}"></script>
        <script src="{{asset('assets/datatables/dataTables.js')}}"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
            } );
        </script>

        <!-- Exles export js file -->
         <script src="{{asset('js/xlsx.min.js')}}"></script>

        <script>
            function export_data( export_data,SheetName,fileName){
                let data=document.getElementById(export_data);
                var fp=XLSX.utils.table_to_book(export_data,{sheet: SheetName});
                XLSX.write(fp,{
                    bookType:'xlsx',
                    type:'base64'
                });
                XLSX.writeFile(fp, fileName+'.xlsx');
            }
           
        </script> 
        <script type="text/javascript">
            /* ==============================================
            Counter Up
            =============================================== */
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>

			<!-- image preview -->
			<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
			
			<script>
			function readURL(input) {
					if (input.files && input.files[0]) {
							var reader = new FileReader();
							reader.onload = function (e) {
									$('#image')
											.attr('src', e.target.result)
											.width(80)
											.height(80);
							};
							reader.readAsDataURL(input.files[0]);
					}
			}
			</script>


<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


<script>
    $(document).ready(function () {
        @if(Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}";
            switch(type){
                case 'info':
                    toastr.info("{{ Session::get('message') }}");
                    break;
                case 'success':
                    toastr.success("{{ Session::get('message') }}");
                    break;
                case 'warning':
                    toastr.warning("{{ Session::get('message') }}");
                    break;
                case 'error':
                    toastr.error("{{ Session::get('message') }}");
                    break;
            }
        @endif
    });
</script>
			<!-- DataTables Buttons JavaScript -->
			<!-- <script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
			<script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js"></script>
			<script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.print.min.js"></script> -->

			  <!-- data table  -->
  <!-- <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/searchbuilder/1.6.0/js/dataTables.searchBuilder.min.js"></script>
  <script src="https://cdn.datatables.net/datetime/1.5.1/js/dataTables.dateTime.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script> -->

			<script>
					$(document).ready(function() {
							$('#datatable').DataTable({
									dom: 'Bfrtip', // Add buttons to the table footer
									buttons: [
											// {
											// 		extend: 'copyHtml5',
											// 		customize: function (doc) {
											// 				doc.title = 'Stoke Genie'; // Add company name to the export title
											// 				doc.header = function () {
											// 						return '<h1>Stoke Genie</h1><h3>' + new Date().toLocaleDateString() + '</h3>'; // Add company name and current date to the export header
											// 				};
											// 				doc.footer = function () {
											// 						return '<h3>Thank you for Support</h3>'; // Add footer text to the export footer
											// 				};
											// 		}
											// },
											{
													extend: 'excelHtml5',
													customize: function (xlsx) {
															var sheet = xlsx.xl.worksheets['sheet1.xml'];
															$('row c[r^="C"]', sheet).attr( 's', '2' );
													},
													exportOptions: {
															columns: [0, 1, 3,4] // Include only columns 0, 1, and 2 in the copy
													}
											},
											{
													extend: 'csvHtml5',
													customize: function (csv) {
															return 'Stoke Genie\n' + new Date().toLocaleDateString() + '\n\n' + csv; // Add company name and current date to the CSV export
													},
													// exportOptions: {
													// 		columns: [0, 1, 3,4] // Include only columns 0, 1, and 2 in the copy
													// }
											},
											// {
											// 		extend: 'pdfHtml5',
											// 		customize: function (doc) {
											// 				doc.header = function () {
											// 						return {
											// 								text: (`
											// 												<div class="text-center">
											// 												<h4>Stoke Genie</h4><h6>${new Date().toLocaleDateString()}</h6>
											// 												</div>
											// 											`),
											// 								style: 'header'
											// 						};
											// 				};
											// 				doc.footer = function () {
											// 						return {
											// 								text: 'Thank you for Support',
											// 								style: 'footer'
											// 						};
											// 				};
											// 		}
											// },
											{
													extend: 'print',
													customize: function (win) {
															$(win.document.body).prepend(`
																<div class="text-center">
																<h4>Stoke Genie</h4><h6>${new Date().toLocaleDateString()}</h6>
																</div>
															`); // Add company name and current date to the print header
															$(win.document.body).append(`
																<div class="text-center">
																	<p>Thank you for support.</p>
																</div>
															`); // Add footer text to the print footer
													},
													// exportOptions: {
													// 		columns: [0, 1, 3,4] // Include only columns 0, 1, and 2 in the copy
													// }
											}
									]
							});
					});
			</script>>
			<script src="{{asset('js/export-utility.js')}}"></script>
			<script>

// Page-specific JavaScript
$(document).ready(function() {
    var table = $('#datatable').DataTable({
        dom: 'Bfrtip', // Add buttons to the table footer
        buttons: [
            {
                extend: 'excelHtml5',
                text: 'Export to Excel',
                action: function () {
                    exportColumns(table, 'excel'); // Export visible columns to Excel
                }
            },
            {
                extend: 'print',
                text: 'Print',
                action: function () {
                    exportColumns(table, 'print'); // Print visible columns
                }
            },
            {
                extend: 'csvHtml5',
                text: 'Export to CSV',
                action: function () {
                    exportColumns(table, 'csv'); // Export visible columns to CSV
                }
            }
        ]
    });
});

			</script>
