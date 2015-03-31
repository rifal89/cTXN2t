<script src="<?php echo assets_url; ?>js/jquery.dataTables.js"></script>
<script src="<?php echo assets_url; ?>js/dataTables.responsive.js"></script>
<script src="<?php echo assets_url; ?>js/shCore.js"></script>
<script type="text/javascript">
$(function () {
    $('#chart-area').highcharts({
    	chart: {
            type: 'line'
        },
        title: {
            text: 'Penjualan Tahun 2015',
        },
        subtitle: {},
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: {
            title: {
                text: 'Total Penjualan'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: ''
        },
        plotOptions: {
            line: {
                dataLabels: {
                    enabled: true
                },
                enableMouseTracking: true
            }
        },
        series: [{
            name: 'Item Penjualan',
            data: [30, 55, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
        }]
    });

    $('#table-data').DataTable({
    	responsive: true
    });
});
</script>

<div id="sell-pages">
	<div id="chart-area"></div>
	<div class="ui grid nomargin">
		<div class="sixteen wide column">
			<table id="table-data" class="display nowrap" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th class="aligncenter">No. Invoice</th>
						<th class="aligncenter">Status</th>
						<th class="aligncenter">Tanggal Pemesenanan</th>
						<th class="aligncenter">Total</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php
						$i = 1;
						while($i <= 55){
					?>
					<tr>
						<td class="aligncenter">
							<a href="#">INV-<?php echo rand(11111, 99999); ?></a>
						</td>
						<td class="aligncenter">
							Terkirim
						</td>
						<td class="aligncenter">
							<?php echo rand(1, 31) ?> Januari 2015
						</td>
						<td class="aligncenter">
							IDR <?php echo rand(100000, 1000000); ?>
						</td>
						<td class="aligncenter">
							<a href="#">
								Lihat Detail
							</a>
						</td>
					</tr>
					<?php $i++; } ?>
				</tbody>
			</table>	
		</div>
	</div>
</div>