@extends('admin.layouts.admin-template')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1 class="text-center"></h1>

        </section>
        @yield('action-content')
    <!-- /.content -->

    </div>
    <script src="{{ asset ("admin/js/account.js")}}" type="application/javascript"></script>
    <script src="{{ asset ("admin/js/modal_popup.js")}}" type="application/javascript"></script>
@endsection

