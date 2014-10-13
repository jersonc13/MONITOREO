
</div>
</div>
<!-- Mainly scripts -->

<script src="<?php echo URL_GLOBALJS ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="<?php echo URL_GLOBALJS ?>/bootstrap.min.js"></script>
<script src="<?php echo URL_GLOBALJS ?>/plugins/metisMenu/jquery.metisMenu.js"></script>
<!--tables -->
<script src="<?php echo URL_GLOBALJS ?>/plugins/jeditable/jquery.jeditable.js"></script>
<!-- Flot -->
<script src="<?php echo URL_GLOBALJS ?>/plugins/flot/jquery.flot.js"></script>
<script src="<?php echo URL_GLOBALJS ?>/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo URL_GLOBALJS ?>/plugins/flot/jquery.flot.spline.js"></script>
<script src="<?php echo URL_GLOBALJS ?>/plugins/flot/jquery.flot.resize.js"></script>
<script src="<?php echo URL_GLOBALJS ?>/plugins/flot/jquery.flot.pie.js"></script>

<!-- Peity -->
<script src="<?php echo URL_GLOBALJS ?>/plugins/peity/jquery.peity.min.js"></script>
<script src="<?php echo URL_GLOBALJS ?>/demo/peity-demo.js"></script>

<!-- Custom and plugin javascript -->
<script src="<?php echo URL_GLOBALJS ?>/inspinia.js"></script>
<script src="<?php echo URL_GLOBALJS ?>/plugins/pace/pace.min.js"></script>
<!-- iCheck -->
<script src="<?php echo URL_GLOBALJS ?>/plugins/iCheck/icheck.min.js"></script>
<script src="<?php echo URL_GLOBALJS ?>/plugins/summernote/summernote.min.js"></script>
<!-- jQuery UI -->


<!-- GITTER -->
<script src="<?php echo URL_GLOBALJS ?>/plugins/gritter/jquery.gritter.min.js"></script>

<!-- EayPIE -->
<script src="<?php echo URL_GLOBALJS ?>/plugins/easypiechart/jquery.easypiechart.js"></script>

<!-- Sparkline -->
<script src="<?php echo URL_GLOBALJS ?>/plugins/sparkline/jquery.sparkline.min.js"></script>

<!-- Sparkline demo data  -->
<script src="<?php echo URL_GLOBALJS ?>/demo/sparkline-demo.js"></script>

<script src="<?php echo URL_SCRIPTS ?>/jsGeneral.js"></script>

<!-- Data Tables -->
<script src="<?php echo URL_GLOBALJS ?>/plugins/dataTables/jquery.dataTables.js"></script>
<script src="<?php echo URL_GLOBALJS ?>/plugins/dataTables/dataTables.bootstrap.js"></script>



<!-- Validate -->
<script src="<?php echo URL_GLOBALJS ?>/plugins/validate/jquery.validate.min.js" type="text/javascript"></script>
<!-- <script src="<?php echo URL_GLOBALJS ?>/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script> -->


<script>
    $(document).ready(function() {
        WinMove();
        setTimeout(function() {
            $.gritter.add({
                title: 'You have two new messages',
                text: 'Go to <a href="mailbox.html" class="text-warning">Mailbox</a> to see who wrote to you.<br/> Check the date and today\'s tasks.'
            });
        }, 2000);


        $('.chart').easyPieChart({
            barColor: '#f8ac59',
//                scaleColor: false,
            scaleLength: 5,
            lineWidth: 4,
            size: 80
        });

        $('.chart2').easyPieChart({
            barColor: '#1c84c6',
//                scaleColor: false,
            scaleLength: 5,
            lineWidth: 4,
            size: 80
        });

        var data1 = [
            [0, 4], [1, 8], [2, 5], [3, 10], [4, 4], [5, 16], [6, 5], [7, 11], [8, 6], [9, 11], [10, 30], [11, 10], [12, 13], [13, 4], [14, 3], [15, 3], [16, 6]
        ];
        var data2 = [
            [0, 1], [1, 0], [2, 2], [3, 0], [4, 1], [5, 3], [6, 1], [7, 5], [8, 2], [9, 3], [10, 2], [11, 1], [12, 0], [13, 2], [14, 8], [15, 0], [16, 0]
        ];
        $("#flot-dashboard-chart").length && $.plot($("#flot-dashboard-chart"), [
            data1, data2
        ],
                {
                    series: {
                        lines: {
                            show: false,
                            fill: true
                        },
                        splines: {
                            show: true,
                            tension: 0.4,
                            lineWidth: 1,
                            fill: 0.4
                        },
                        points: {
                            radius: 0,
                            show: true
                        },
                        shadowSize: 2
                    },
                    grid: {
                        hoverable: true,
                        clickable: true,
                        tickColor: "#d5d5d5",
                        borderWidth: 1,
                        color: '#d5d5d5'
                    },
                    colors: ["#1ab394", "#464f88"],
                    xaxis: {
                    },
                    yaxis: {
                        ticks: 4
                    },
                    tooltip: false
                }
        );
    });
</script>
<!--<script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '../../www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-4625583-2', 'webapplayers.com');
    ga('send', 'pageview');

</script>-->
</body>

<!-- Mirrored from webapplayers.com/inspinia_admin-v1.2/ by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 04 Aug 2014 00:46:41 GMT -->
</html>
