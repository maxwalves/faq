<html lang="en" style="height: 100%;">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>FAQ Jurisoft</title>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
      <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
      <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css') }}">      
   </head>
   <body class="antialiased">

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid d-flex justify-content-between">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('img/fundo.png') }}" alt="Logo" width="auto" height="100">
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link">Administração</a>
                </li>
            </ul>
        </div>
    </nav>

        <div class="container" style="height: 100%;">
            
            <div class="content-wrapper" style="min-height: 974px;">
                <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>FAQ</h1>
                        </div>
                    </div>
                </div>
                </section>
                <section class="content">
                <div class="row">
                    @foreach($faqs as $faq)
                        <div class="col-12" id="accordion">
                            <div class="card card-primary card-outline">
                                <a class="d-block w-100" data-toggle="collapse" href="#collapseOne" aria-expanded="true">
                                <div class="card-header">
                                    <h4 class="card-title w-100">
                                        1. {{$faq->pergunta}}
                                    </h4>
                                </div>
                                </a>
                                <div id="collapseOne" class="collapse show" data-parent="#accordion" style="">
                                <div class="card-body">
                                    {{$faq->resposta}}
                                </div>
                                </div>
                            </div>
                            
                        </div>

                    @endforeach

                    
                </div>
                <div class="row">
                    <div class="col-12 mt-3 text-center">
                        <p class="lead">
                            <a href="contact-us.html">Entre em contato</a>,
                            se você não encontrou a resposta para o que estava procurando.<br>
                        </p>
                    </div>
                </div>
                </section>
            </div>

            
            <div id="sidebar-overlay"></div>
        </div>
        <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>      

   </body>
</html>