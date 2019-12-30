@include('admin.layouts.header')
@include('admin.layouts.navbar')

    <div class="bgArabic kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
        @include('admin.layouts.menu')
    <!-- end:: Header -->
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

    <!-- end:: Content Head -->
    @include('admin.layouts.message')
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
            @yield('content')
        </div>
    </div>
    <!-- end:: Content -->
</div>

@include('admin.layouts.footer')
