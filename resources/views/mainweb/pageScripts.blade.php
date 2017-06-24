{{-- Page scripts --}}

<script type="text/javascript">
  $(document).ready(function(){
    @if (count($errors->all()) > 0)
      @foreach ($errors->all() as $err)
        Materialize.toast('{{ $err }}', 3000, 'brown darken-2')
      @endforeach
    @endif
  });
</script>
