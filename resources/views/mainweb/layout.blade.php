<!DOCTYPE html>
<html>
  @include('mainweb.head')
  <body>
    @yield('content')
    @include('mainweb.footer')
    @include('mainweb.generalPageScripts')
    @yield('pageScripts')
  </body>
</html>
