@if(Session::has('success'))
<script type="text/javascript">
    toastr.success("{{ session('success') }}");
</script>
@endif

@if(Session::has('danger'))
<script type="text/javascript">
   toastr.error("{{ session('danger') }}");
</script>
@endif

@if(Session::has('warning'))
<script type="text/javascript">
   toastr.warning("{{ session('warning') }}");
</script>
@endif

@if(Session::has('info'))
<script type="text/javascript">
   toastr.info("{{ session('info') }}");
</script>
@endif