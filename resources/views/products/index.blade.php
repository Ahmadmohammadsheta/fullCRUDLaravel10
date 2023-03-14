@extends('dashboard.index')

@section('title')
    {{ __('products') }}
@endsection

@section('products')
    {{ __('active') }}
@endsection

@section('user_name')
    {{ __('All products') }}
@endsection

@section('content_header')
    {{ __('products of products header') }}
@endsection

@section('content_header_link')
    <a href="#">products of products link</a>
@endsection

@section('content')
    <main>
        @include('layouts.pages.products.table')
        @include('layouts.pages.products.add_modal')
    </main>
@endsection


@section('scripts')
<script>
    $(document).ready(function() {
        $(document).on('click', '#add_product', function(e) {
            e.preventDefault();
            let name = $('#name').val();
            let sale_price = $('#sale_price').val();
            $.ajax({
                url: "{{ route('products.store') }}",
                method: 'post',
                data: {name:name, sale_price:sale_price},
                success: function(res) {
                    if (res.success == 'true') {
                        $('#productModal').modal('hide');
                        $('#modal_form').reset();
                    }
                },
                error:function(err) {
                    let error = err.responseJSON;
                    $.each(error.errors, function (index, value) {
                        $('#error_container').append('<span class="error>' + value + '</>' + '<br>');
                    });
                }
            });
        });
    });
</script>
@endsection

