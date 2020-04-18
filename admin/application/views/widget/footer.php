

        <!-- Begin Page Content -->

      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Ambyar 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

<!--
   Logout Modal
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>
-->

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('assets/js/sb-admin-2.min.js'); ?>"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url('assets/vendor/datatables/jquery.dataTables.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.min.js'); ?>"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url('assets/js/demo/datatables-demo.js'); ?>"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url('assets/vendor/chart.js/Chart.min.js'); ?>"></script>

<script src="<?php echo base_url('assets/ckeditor/ckeditor.js');?>"></script>

	<script>
			// Set new default font family and font color to mimic Bootstrap's default styling
			Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
			Chart.defaults.global.defaultFontColor = '#858796';
			<?php foreach($rows as $row) { ?>
			// Pie Chart Example
			var ctx = document.getElementById("myPieChart");
			var myPieChart = new Chart(ctx, {
			  type: 'doughnut',
			  data: {
				labels: ["Kerja", "Tidak Kerja/Kuliah"],
				datasets: [{
				  data: [<?php echo $row->kerja; ?>, <?php echo $row->nis - $row->kerja ?>],
				  backgroundColor: ['#4e73df', '#1cc88a'],
				  hoverBackgroundColor: ['#2e59d9', '#17a673'],
				  hoverBorderColor: "rgba(234, 236, 244, 1)",
				}],
			  }, 
			  options: {
				maintainAspectRatio: false,
				tooltips: {
				  backgroundColor: "rgb(255,255,255)",
				  bodyFontColor: "#858796",
				  borderColor: '#dddfeb',
				  borderWidth: 1,
				  xPadding: 15,
				  yPadding: 15,
				  displayColors: false,
				  caretPadding: 10,
				},
				legend: {
				  display: false
				},
				cutoutPercentage: 80,
			  },
			}); <?php } ?>
		</script>

<script>
			// Set new default font family and font color to mimic Bootstrap's default styling
			Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
			Chart.defaults.global.defaultFontColor = '#858796';
			<?php foreach($rows as $row) { ?>
			// Pie Chart Example
			var ctx = document.getElementById("myPieChart1");
			var myPieChart = new Chart(ctx, {
			  type: 'doughnut',
			  data: {
				labels: ["Kuliah", "Tidak Kuliah/Kerja"],
				datasets: [{
				  data: [<?php echo $row->kuliah; ?>, <?php foreach($rows2 as $row2) { echo $row2->nis - $row->kuliah;}  ?>],
				  backgroundColor: ['#4e73df', '#1cc88a'],
				  hoverBackgroundColor: ['#2e59d9', '#17a673'],
				  hoverBorderColor: "rgba(234, 236, 244, 1)",
				}],
			  }, 
			  options: {
				maintainAspectRatio: false,
				tooltips: {
				  backgroundColor: "rgb(255,255,255)",
				  bodyFontColor: "#858796",
				  borderColor: '#dddfeb',
				  borderWidth: 1,
				  xPadding: 15,
				  yPadding: 15,
				  displayColors: false,
				  caretPadding: 10,
				},
				legend: {
				  display: false
				},
				cutoutPercentage: 80,
			  },
			}); <?php } ?>
		</script>

<script>
			// Set new default font family and font color to mimic Bootstrap's default styling
			Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
			Chart.defaults.global.defaultFontColor = '#858796';
			<?php foreach($rows as $row) { ?>
			// Pie Chart Example
			var ctx = document.getElementById("myPieChart2");
			var myPieChart = new Chart(ctx, {
			  type: 'doughnut',
			  data: {
				labels: ["Kuliah", "Tidak Kuliah/Kerja"],
				datasets: [{
				  data: [<?php echo $row->kerja; ?>, <?php echo $row2->nis - $row->kerja; ?>],
				  backgroundColor: ['#4e73df', '#1cc88a'],
				  hoverBackgroundColor: ['#2e59d9', '#17a673'],
				  hoverBorderColor: "rgba(234, 236, 244, 1)",
				}],
			  }, 
			  options: {
				maintainAspectRatio: false,
				tooltips: {
				  backgroundColor: "rgb(255,255,255)",
				  bodyFontColor: "#858796",
				  borderColor: '#dddfeb',
				  borderWidth: 1,
				  xPadding: 15,
				  yPadding: 15,
				  displayColors: false,
				  caretPadding: 10,
				},
				legend: {
				  display: false
				},
				cutoutPercentage: 80,
			  },
			}); <?php } ?>
	</script>
<script>
// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

function number_format(number, decimals, dec_point, thousands_sep) {
  // *     example: number_format(1234.56, 2, ',', ' ');
  // *     return: '1 234,56'
  number = (number + '').replace(',', '').replace(' ', '');
  var n = !isFinite(+number) ? 0 : +number,
    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
    s = '',
    toFixedFix = function(n, prec) {
      var k = Math.pow(10, prec);
      return '' + Math.round(n * k) / k;
    };
  // Fix for IE parseFloat(0.55).toFixed(0) = 0;
  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
  if (s[0].length > 3) {
    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
  }
  if ((s[1] || '').length < prec) {
    s[1] = s[1] || '';
    s[1] += new Array(prec - s[1].length + 1).join('0');
  }
  return s.join(dec);
}

// Bar Chart Example
var ctx = document.getElementById("myBarChart");
var myBarChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: [<?php foreach($rows as $row) { echo $row->tahun_keluar; echo ",";}?> ],
    datasets: [{
      label: "Alumni",
      backgroundColor: "#4e73df",
      hoverBackgroundColor: "#2e59d9",
      borderColor: "#4e73df",
      data: [<?php foreach($rows as $row) { echo $row->keluar; echo ",";}?>	],
    }],
  }, 
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    }, 
    scales: {
      xAxes: [{
        time: {
          unit: 'year'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 6
        },
        maxBarThickness: 25,
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 100,
          maxTicksLimit: 5,
          padding: 10,
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
            return '' + number_format(value);
          }
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: false
    },
    tooltips: {
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel + ': ' + number_format(tooltipItem.yLabel);
        }
      }
    },
  }
});

</script>

</body>

</html>