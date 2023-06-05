<!DOCTYPE html>
<html lang="es">

@include('layouts.comun.head')

<body id="page-top">

    <div id="wrapper">
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                </nav>
            @yield('content') 
                           
            </div>
            
            @include('layouts.comun.footer')
            
        </div>
    </div>

@stack('js')
</body>
</html>