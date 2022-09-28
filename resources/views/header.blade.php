<a href="/">Inicio</a>
<a href="/users/create">Registrar</a>
@auth
<a href="/users/logout">Logout</a>
@else
<a href="/users/login">Login</a>
@endauth
<pre>{{ Auth::user() }}</pre>
@if(session('status'))
<br> {{ session('status') }}
@endif