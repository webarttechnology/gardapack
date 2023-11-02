<style>
    #session-msges{
      position: absolute; 
      bottom: 75%; 
      left: 77%;
    }
  </style>

@if(Session::has('success'))
<p class="alert {{ Session::get('alert-class', 'alert-success') }}" id="session-msges-1">{{ Session::get('success') }}</p>
@endif

@if(Session::has('danger'))
<p class="alert {{ Session::get('alert-class', 'alert-danger') }}" id="session-msges-1">{{ Session::get('danger') }}</p>
@endif

@if(Session::has('warning'))
<p class="alert {{ Session::get('alert-class', 'alert-warning') }}" id="session-msges-1">{{ Session::get('warning') }}</p>
@endif

@if(Session::has('info'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}" id="session-msges-1">{{ Session::get('info') }}</p>
@endif