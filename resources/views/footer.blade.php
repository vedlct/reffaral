<footer class="footer">
    <div class="container-fluid">
        <div class="copyright">
            &copy;
            <script>
                document.write(new Date().getFullYear())
            </script>, All Rights Reserved. -
            <a href="#" target="_blank">LLoyd Baker</a>. | Powered by:
            <a href="http://a2ninfotech.co.uk/" target="_blank">A2N InfoTech</a>.
        </div>
    </div>
</footer>

</div>
</body>
</html>
<!--   Core JS Files   -->
<script src="{{url('public/assets/js/core/jquery.min.js')}}"></script>
<script src="{{url('public/assets/js/core/popper.min.js')}}"></script>
<script src="{{url('public/assets/js/core/bootstrap.min.js')}}"></script>
<script src="{{url('public/assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="{{url('public/assets/js/plugins/chartjs.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{url('public/assets/js/plugins/bootstrap-notify.js')}}"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{url('public/assets/js/now-ui-dashboard.js?v=1.0.1')}}"></script>
<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="{{url('public/assets/demo/demo.js')}}"></script>

<script>
    var ckBaseUrl = "{{url('')}}";
</script>

@yield('foot-js')
<script>
//    $(document).ready(function() {
//        // Javascript method's body can be found in assets/js/demos.js
//        demo.initDashboardPageCharts();
//    });
</script>
