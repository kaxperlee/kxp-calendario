<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <title>Grupo Asesor Ros</title>
    <link REL="stylesheet" href="{{asset('acss/reboot.css')}}">
    <link REL="stylesheet" href="{{asset('css/main.css')}}">
    <link REL="stylesheet" href="{{asset('css/custom.css')}}">
    <script src="https://kit.fontawesome.com/50de09d042.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="py-0 navbar navbar-dark bg-dark border-bottom">
            <div class="container-fluid d-flex flex-wrap">
                <span class="nav me-auto fs-5 text-light">Grupo Asesor Ros - Calendario</span>
                <ul class="nav">
                    <li id="kxp-menu1" class="nav-item"><a href="#" class="nav-link link-light px-2">Login</a></li>
                    <li id="kxp-menu1" class="nav-item"><a href="#" class="nav-link link-light px-2">Sign up</a></li>
                </ul>
            </div>
        </nav>
        <header class="py-3 border-bottom" style="">
            <div class="container-fluid d-flex flex-wrap justify-content-center" style='z-index:1'>
                <a href="/" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
                    <img src="/img/logoros.png" class="" height="60" alt="Grupo Asesor Ros">
                </a>
                <ul class="nav ms-auto">
                    <li id="kxp-menu2" class="nav-item"><a href="#" class="nav-link link-dark px-2 active" aria-current="page">Home</a></li>
                    <li id="kxp-menu2" class="nav-item"><a href="{{route('calendario.index')}}" class="nav-link link-dark px-2">Calendarios</a></li>
                    <li id="kxp-menu2" class="nav-item"><a href="{{route('horario.index')}}" class="nav-link link-dark px-2">Horarios</a></li>
                </ul>
            </div>

        </header>
        <!-- MAIN CONTENT -->
        <div class="d-flex container-fluid main" >
            <!-- ASIDE -->
            <aside class="align-self-stretch" style="padding: 12px 18px 0 6px;min-width:310px;border-right: 1px solid #cccccc !important;">
                @yield('sidebar')
                <div style='height:60px; width:100%;'>
                </div>
            </aside>
            <!-- End of ASIDE -->

            <!-- SECTION -->
            <section class="flex-fill" style="padding: 12px 24px;">
                <article>
                    @yield('main')
                </article>
                <div style='height:60px; width:100%;'>
                </div>
            </section>
            <!-- End of SECTION -->
            <!-- End of MAIN CONTENT -->
        </div>

        <nav class="navbar navbar-dark bg-dark fixed-bottom">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Fixed bottom</a>
            </div>
        </nav>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </body>
</html>
