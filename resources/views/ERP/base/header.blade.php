<!doctype html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en"/>
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('favicon.ico')}}"/>
    <!-- Generated: 2018-04-16 09:29:05 +0200 -->
    <title>AthusERP - @yield('title', 'Dashboard')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <script src="{{asset('assets/js/require.min.js')}}"></script>
    <!-- Dashboard Core -->
    <link href="{{asset('assets/css/dashboard.css')}}" rel="stylesheet"/>
    <script src="{{asset('assets/js/dashboard.js')}}"></script>
    <!-- c3.js Charts Plugin -->
    <link href="{{asset('assets/plugins/charts-c3/plugin.css')}}" rel="stylesheet"/>
    <script src="{{asset('assets/plugins/charts-c3/plugin.js')}}"></script>
    <!-- Input Mask Plugin -->
    <script src="{{asset('assets/plugins/input-mask/plugin.js')}}"></script>
  </head>

  <body class="">
    <div class="page">
      <div class="page-main">
        <div class="header py-4">
          <div class="container">
            <div class="d-flex">
            <a class="header-brand" href="{{ route('erp.home') }}">
              <img src="data:image/png;base64,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" class="header-brand-img" alt="tabler logo">
            </a>
            <div class="d-flex order-lg-2 ml-auto">
            <div class="nav-item d-none d-md-flex">
            <a href="https://github.com/tabler/tabler" class="btn btn-sm btn-outline-primary" target="_blank">Source code</a>
            </div>
            <div class="dropdown d-none d-md-flex">
            <a class="nav-link icon" data-toggle="dropdown"> <i class="fe fe-bell"></i> <span class="nav-unread"></span> </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
            <a href="#" class="dropdown-item d-flex">
            <span class="avatar mr-3 align-self-center" style="background-image: url(demo/faces/male/41.jpg)"></span>
            <div>
            <strong>Nathan</strong> pushed new commit: Fix page load performance issue.
            <div class="small text-muted">10 minutes ago</div>
            </div>
            </a>
            <a href="#" class="dropdown-item d-flex">
            <span class="avatar mr-3 align-self-center" style="background-image: url(demo/faces/female/1.jpg)"></span>
            <div>
            <strong>Alice</strong> started new task: Tabler UI design.
            <div class="small text-muted">1 hour ago</div>
            </div>
            </a>
            <a href="#" class="dropdown-item d-flex">
            <span class="avatar mr-3 align-self-center" style="background-image: url(demo/faces/female/18.jpg)"></span>
            <div>
            <strong>Rose</strong> deployed new version of NodeJS REST Api V3
            <div class="small text-muted">2 hours ago</div>
            </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item text-center text-muted-dark">Mark all as read</a>
            </div>
            </div>
            <div class="dropdown">
            <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown"> <span class="avatar" style="background-image: url(./demo/faces/female/25.jpg)"></span> <span class="ml-2 d-none d-lg-block"> <span class="text-default">Jane Pearson</span> <small class="text-muted d-block mt-1">Administrator</small> </span> </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
            <a class="dropdown-item" href="#"> <i class="dropdown-icon fe fe-user"></i> Profile </a>
            <a class="dropdown-item" href="#"> <i class="dropdown-icon fe fe-settings"></i> Settings </a>
            <a class="dropdown-item" href="#"> <span class="float-right"><span class="badge badge-primary">6</span></span> <i class="dropdown-icon fe fe-mail"></i> Inbox </a>
            <a class="dropdown-item" href="#"> <i class="dropdown-icon fe fe-send"></i> Message </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#"> <i class="dropdown-icon fe fe-help-circle"></i> Need help? </a>
            <a class="dropdown-item" href="#"> <i class="dropdown-icon fe fe-log-out"></i> Sign out </a>
            </div>
            </div>
            </div>
            <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse"> <span class="header-toggler-icon"></span> </a>
            </div>
          </div>
          </div>
          <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-lg-3 ml-auto">
                <form class="input-icon my-3 my-lg-0">
                  <input type="search" class="form-control header-search" placeholder="Search&hellip;" tabindex="1">
                  <div class="input-icon-addon">
                    <i class="fe fe-search"></i>
                  </div>
                </form>
              </div>

              <div class="col-lg order-lg-first">
                <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                  <li class="nav-item">
                  <a href="{{ route('erp.home') }}" class="nav-link active"><i class="fe fe-home"></i>Dashboard</a>
                  </li>
                  <li class="nav-item">
                  <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-box"></i>Compras</a>
                  <div class="dropdown-menu dropdown-menu-arrow">
                  <a href="./cards.html" class="dropdown-item ">Requisições</a>
                  <a href="./charts.html" class="dropdown-item ">Orçamentos</a>
                  <a href="./pricing-cards.html" class="dropdown-item ">Compras Finalizadas</a>
                  </div>
                  </li>
                  <li class="nav-item dropdown">
                  <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-calendar"></i>Estoque</a>
                  <div class="dropdown-menu dropdown-menu-arrow">
                  <a href="./maps.html" class="dropdown-item ">Lista de produtos</a>
                  <a href="./icons.html" class="dropdown-item ">Requisitar um pedido</a>
                  <a href="./store.html" class="dropdown-item ">Store</a>
                  <a href="./blog.html" class="dropdown-item ">Blog</a>
                  <a href="./carousel.html" class="dropdown-item ">Carousel</a>
                  </div>
                  </li>
                  <li class="nav-item dropdown">
                  <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-file"></i>PCP/MRP</a>
                  <div class="dropdown-menu dropdown-menu-arrow">
                  <a href="./profile.html" class="dropdown-item ">Profile</a>
                  <a href="./login.html" class="dropdown-item ">Login</a>
                  <a href="./register.html" class="dropdown-item ">Register</a>
                  <a href="./forgot-password.html" class="dropdown-item ">Forgot password</a>
                  <a href="./400.html" class="dropdown-item ">400 error</a>
                  <a href="./401.html" class="dropdown-item ">401 error</a>
                  <a href="./403.html" class="dropdown-item ">403 error</a>
                  <a href="./404.html" class="dropdown-item ">404 error</a>
                  <a href="./500.html" class="dropdown-item ">500 error</a>
                  <a href="./503.html" class="dropdown-item ">503 error</a>
                  <a href="./email.html" class="dropdown-item ">Email</a>
                  <a href="./empty.html" class="dropdown-item">Empty page</a>
                  <a href="./rtl.html" class="dropdown-item ">RTL mode</a>
                  </div>
                  </li>
                  <li class="nav-item dropdown">
                  <a href="./form-elements.html" class="nav-link"><i class="fe fe-check-square"></i> Vendas</a>
                  </li>
                  <li class="nav-item">
                  <a href="./gallery.html" class="nav-link"><i class="fe fe-image"></i> Gallery</a>
                  </li>
                  <li class="nav-item">
                  <a href="./docs/index.html" class="nav-link"><i class="fe fe-file-text"></i> Documentation</a>
                  </li>
                </ul>
              </div>
              </div>
            </div>
        </div>
        <div class="my-3 my-md-5">
          @yield('content')
        </div>
      </div>



      <div class="footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="row">
              <div class="col-6 col-md-3">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">First link</a>
                  </li>
                  <li>
                    <a href="#">Second link</a>
                  </li>
                </ul>
              </div>
              <div class="col-6 col-md-3">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Third link</a>
                  </li>
                  <li>
                    <a href="#">Fourth link</a>
                  </li>
                </ul>
              </div>
              <div class="col-6 col-md-3">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Fifth link</a>
                  </li>
                  <li>
                    <a href="#">Sixth link</a>
                  </li>
                </ul>
              </div>
              <div class="col-6 col-md-3">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Other link</a>
                  </li>
                  <li>
                    <a href="#">Last link</a>
                  </li>
                </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0">
            </div>
          </div>
        </div>
      </div>
        <footer class="footer">
          <div class="container">
            <div class="row align-items-center flex-row-reverse">
            <div class="col-auto ml-lg-auto">
              <div class="row align-items-center">
                <div class="col-auto">
                  <ul class="list-inline list-inline-dots mb-0">
                    <li class="list-inline-item">
                      <a href="./docs/index.html">Documentation</a>
                    </li>
                    <li class="list-inline-item">
                      <a href="./faq.html">FAQ</a>
                    </li>
                  </ul>
                </div>
              <div class="col-auto">
                <a href="https://github.com/tabler/tabler" class="btn btn-outline-primary btn-sm">Source code</a>
              </div>
              </div>
            </div>
              <div class="col-12 col-lg-auto mt-3 mt-lg-0 text-center">
              Copyright © 2018
                <a href=".">Tabler</a>. Theme by
                <a href="https://codecalm.net" target="_blank">codecalm.net</a> All rights reserved.
              </div>
            </div>
          </div>
        </footer>
      </div>
      </body>
      </html>
