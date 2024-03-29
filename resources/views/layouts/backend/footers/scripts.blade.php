<!-- jquery -->

<script src="{{ URL::asset('backend/assets/js/jquery-3.3.1.min.js') }}"></script>
<!-- plugins-jquery -->
<script src="{{ URL::asset('backend/assets/js/plugins-jquery.js') }}"></script>
<!-- plugin_path -->
<script type="text/javascript">var plugin_path = '{{ asset('backend/assets/js') }}/';</script>
<!-- chart -->
<script src="{{ URL::asset('backend/assets/js/chart-init.js') }}"></script>

{{--<link href="{{URL::asset('backend/assets/css/fontawesome/js/all.js')}}" rel="stylesheet">--}}

<!-- calendar -->
<script src="{{ URL::asset('backend/assets/js/calendar.init.js') }}"></script>
<!-- charts sparkline -->
<script src="{{ URL::asset('backend/assets/js/sparkline.init.js') }}"></script>
<!-- charts morris -->
<script src="{{ URL::asset('backend/assets/js/morris.init.js') }}"></script>
<!-- datepicker -->
{{--<script src="{{ URL::asset('backend/assets/js/datepicker.js') }}"></script>--}}
<!-- sweetalert2 -->
<script src="{{ URL::asset('backend/assets/js/sweetalert2.js') }}"></script>
<!-- toastr -->
<script src="{{ URL::asset('backend/assets/js/toastr.js') }}"></script>
<!-- validation -->
<script src="{{ URL::asset('backend/assets/js/validation.js') }}"></script>
<!-- lobilist -->
<script src="{{ URL::asset('backend/assets/js/lobilist.js') }}"></script>
<!-- custom -->
<script src="{{ URL::asset('backend/assets/js/custom.js') }}"></script>

@yield('js')
