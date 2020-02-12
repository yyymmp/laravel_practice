<h1>不变的头部</h1>

@yield('title')
<input type="text" name="_token" value="{{csrf_token()}}">
<h2>不变的底部</h2>
