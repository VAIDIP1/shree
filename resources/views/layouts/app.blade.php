<!DOCTYPE html>
<html lang="en">

<head>
  @include('layouts.head-css')
</head>

<body>
  @include('layouts.layout-vertical')

  <!-- [ Main Content ] start -->
  <div class="pc-container">
    <div class="pc-content">
        
        @yield('content')

    </div>
  </div>
  <!-- [Page Specific JS] end -->
  @include('layouts.footer-js')
</body>
<!-- [Body] end -->

</html>