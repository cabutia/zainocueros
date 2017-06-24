<!DOCTYPE html>
<html>
  @include('mainweb.head')
  @if (!isset($bodyColor))
    <body>
  @else
    <body class="{{ $bodyColor }}">
  @endif
    @include('mainweb.socialmedia')
    @yield('content')
    @if (!isset($noFooter))
      @include('mainweb.footer')
    @endif
    @include('mainweb.generalPageScripts')
    @yield('pageScripts')
  </body>
</html>
