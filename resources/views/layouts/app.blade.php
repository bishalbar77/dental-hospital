<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="UTF-8">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NARAYANI DENTAL & SKIN CENTERE Faculty Recruitment | Dashboard</title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="../../img/svg/logo.png" type="image/x-icon">
        <!-- Custom styles -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../../css/style.min.css">
        <link rel="stylesheet" href="../../custom/style.css">
        @yield('style')
        <style>
            label {
              max-width: 170px;
            }
            input {
                border: 1px solid #ced4da!important;
            }
    span {
        font-size: 0.8rem;
    }
            *.li {
              font-family: 'Lato';
            }
            .custom-choose-button {
              border-radius: 5px !important;
              padding:8px 15px;
              background:#0d6efd;
              border:1px solid #0d6eff;
              position:relative;
              color:#fff;
              border-radius:2px;
              text-align:center;
              float:left;
              cursor:pointer
              }
              .hide_file {
                  position: absolute;
                  z-index: 1000;
                  opacity: 0;
                  cursor: pointer;
                  right: 0;
                  top: 0;
                  height: 100%;
                  font-size: 24px;
                  width: 100%;
                  
              }
              .mt-3 label {
                font-size: 0.8em;
                text-align: center;
                align-self: center;
              }
              input[type=radio] {
                height: 14px !important;
                margin: 19px;
              }
              div.dataTables_wrapper  div.dataTables_filter {
                float: right;
                text-align: left;
              }
              div.dataTables_paginate {
                float: right;
              }
        </style>
    </head>

    <body>
        <div class="layer"></div>
        <div class="page-flex">
            <!-- ! Sidebar -->
            @include('layouts.sidebar')
            <div class="main-wrapper">

                @include('layouts.navbar')
                <!-- ! Main -->
                <main class="main users chart-page" id="skip-target">
                    @yield('content')
                </main>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
        {{-- <script type="text/javascript">
        eval(function(p,a,c,k,e,d){e=function(c){return c.toString(36)};if(!''.replace(/^/,String)){while(c--){d[c.toString(a)]=k[c]||c.toString(a)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('(3(){(3 a(){8{(3 b(2){7((\'\'+(2/2)).6!==1||2%5===0){(3(){}).9(\'4\')()}c{4}b(++2)})(0)}d(e){g(a,f)}})()})();',17,17,'||i|function|debugger|20|length|if|try|constructor|||else|catch||5000|setTimeout'.split('|'),0,{}))
        </script> --}}
        <!-- Chart library -->
        <script src="../../plugins/chart.min.js"></script>
        <!-- Icons library -->
        <script src="../../plugins/feather.min.js"></script>
        <!-- Custom scripts -->
        <script src="../../js/script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
        @yield('script')
    </body>

</html>