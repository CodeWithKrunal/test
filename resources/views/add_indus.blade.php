@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {!! form($form) !!}
            </div>
        </div>


    </div>

    @push('js_after')
        <script type="module">
            $(".js-example-basic-multiple").select2();
        </script>
   @endpush

   {{-- <script type="module">
    $(".select2").select2();
</script> --}}
@endsection
