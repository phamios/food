<link href="<?php echo base_url('src/admin/css/'); ?>/pages/reports.css" rel="stylesheet">

<div class="main">

    <div class="main-inner">

        <div class="container">

            <div class="row">

                <div class="span12">

                    <div class="info-box">
                        <div class="row-fluid stats-box">
                            <div class="span4">
                                <div class="stats-box-title">Thành viên</div>
                                <div class="stats-box-all-info"><i class="icon-user" style="color:#3366cc;"></i> <?php echo number_format($member_total) ?></div>
                                <div class="wrap-chart"><div id="visitor-stat" class="chart" style="padding: 0px; position: relative;"><canvas id="bar-chart1" class="chart-holder" height="150" width="325"></canvas></div></div>
                            </div>

                            <div class="span4">
                                <div class="stats-box-title">Công việc</div>
                                <div class="stats-box-all-info"><i class="icon-thumbs-up"  style="color:#F30"></i> <?php echo number_format($jobs_total) ?></div>
                                <div class="wrap-chart"><div id="order-stat" class="chart" style="padding: 0px; position: relative;"><canvas id="bar-chart2" class="chart-holder" height="150" width="325"></canvas></div></div>
                            </div>

                            <div class="span4">
                                <div class="stats-box-title">Giao dịch</div>
                                <div class="stats-box-all-info"><i class="icon-shopping-cart" style="color:#3C3"></i><?php echo number_format($member_total) ?></div>
                                <div class="wrap-chart">

                                    <div id="user-stat" class="chart" style="padding: 0px; position: relative;"><canvas id="bar-chart3" class="chart-holder" height="150" width="325"></canvas></div>

                                </div>
                            </div>
                        </div>


                    </div>


                </div>
            </div>      

            <!-- /row -->

            <div class="row">

                <div class="span6">

                    <div class="widget">

                        <div class="widget-header">
                            <i class="icon-star"></i>
                            <h3>Some Stats</h3>
                        </div> <!-- /widget-header -->

                        <div class="widget-content">
                            <canvas id="pie-chart" class="chart-holder" height="250" width="538"></canvas>
                        </div> <!-- /widget-content -->

                    </div> <!-- /widget -->




                </div> <!-- /span6 -->


                <div class="span6">

                    <div class="widget">

                        <div class="widget-header">
                            <i class="icon-list-alt"></i>
                            <h3>Another Chart</h3>
                        </div> <!-- /widget-header -->

                        <div class="widget-content">
                            <canvas id="bar-chart" class="chart-holder" height="250" width="538"></canvas>
                        </div> <!-- /widget-content -->

                    </div> <!-- /widget -->

                </div> <!-- /span6 -->

            </div> <!-- /row -->







        </div> <!-- /container -->

    </div> <!-- /main-inner -->

</div> <!-- /main -->
 
<script src="<?php echo base_url('src/admin'); ?>/js/chart.min.js" type="text/javascript"></script> 
<script>

    var pieData = [
        {
            value: 30,
            color: "#F38630"
        },
        {
            value: 50,
            color: "#E0E4CC"
        },
        {
            value: 100,
            color: "#69D2E7"
        }

    ];

    var myPie = new Chart(document.getElementById("pie-chart").getContext("2d")).Pie(pieData);

    var barChartData = {
        labels: ["Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6", "Tháng 7"],
        datasets: [
            {
                fillColor: "rgba(220,220,220,0.5)",
                strokeColor: "rgba(220,220,220,1)",
                data: [65, 59, 90, 81, 56, 55, 40]
            },
            {
                fillColor: "rgba(151,187,205,0.5)",
                strokeColor: "rgba(151,187,205,1)",
                data: [28, 48, 40, 19, 96, 27, 100]
            }
        ]

    }

    var myLine = new Chart(document.getElementById("bar-chart").getContext("2d")).Bar(barChartData);
    var myLine = new Chart(document.getElementById("bar-chart1").getContext("2d")).Bar(barChartData);
    var myLine = new Chart(document.getElementById("bar-chart2").getContext("2d")).Bar(barChartData);
    var myLine = new Chart(document.getElementById("bar-chart3").getContext("2d")).Bar(barChartData);

</script>