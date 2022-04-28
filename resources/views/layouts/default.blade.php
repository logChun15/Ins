<!DOCTYPE html>
<html>
 <head>
     {{-- 我们给 @yield 传了两个参数，第一个参数是该区块的变量名称，第二个参数是默认值，表示当指定变量的值为空值时，使用 Weibo 来作为默认值。 --}}
     <title>@yield('title','ins') -Ig你值得拥有</title>
 <title>Weibo App</title>
 </head>
 <body>
 @yield('content')
 </body>
</html>
