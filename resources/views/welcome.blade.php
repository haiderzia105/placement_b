<!DOCTYPE html>
<html>
<head>
@include('screens.head')
<head>
<body>
@include('screens.header') 

@yield('content')  

@include('screens.scripts')

@include('screens.footer') 

</body>
</html>