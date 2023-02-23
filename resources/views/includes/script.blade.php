<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="{{ asset('assets/js/uikit.min.js') }}"></script>
<script src="{{ asset('assets/js/uikit-icons.min.js') }}"></script>
{{-- <script src="/assets/js/jquery-3.6.3.min.js"></script> --}}

{{-- <script src="/assets/vendors/typehead/typhead.bundle.min.js"></script> --}}


{{-- <script src="{{ asset('assets/js/file-upload.js') }}"></script>
<script src="{{ asset('assets/js/typeahead.js') }}"></script> --}}
<script src="{{ asset('assets/js/select2.js') }}"></script>
<script>
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
</script>
<!-- {{-- <script>
    window.onbeforeunload = function(event) {
      event.returnValue = "Write something clever here..";
    };
  </script> --}}
  {{-- <script>
    $(window).bind("beforeunload",function(event) {
    return "You have some unsaved changes";
});
  </script> --}} -->
