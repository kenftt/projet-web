@extends('app')



@section('title', 'Ma WishList | '. config('app.name'))

@section('content')
    <section class="py-5 text-center container">
    </section>

    <style> /**
        CSS WISHLIST
        **/
        .panel-body { padding:0px; }
        .panel-footer .pagination { margin: 0; }
        .panel .glyphicon,.list-group-item .glyphicon { margin-right:5px; }
        .panel-body .radio, .checkbox { display:inline-block;margin:0px; }
        .panel-body input[type=checkbox]:checked + label { text-decoration: line-through;color: rgb(128, 144, 160); }
        .list-group-item:hover, a.list-group-item:focus {text-decoration: none;background-color: rgb(245, 245, 245);}
        .list-group { margin-bottom:0px; }

        .bg-blue-500 {
            border-radius:12px;
            background-color: #648ad4;
        }

        hr {
            border-top: 3px double rgb(0, 0, 0);
            overflow: visible;
            text-align: center;
            height: 10px;
            opacity: 1;
        }



        </style>


    <body style="">

        <header class="section-header">
        <section class="header-main border-bottom">
            <div class="container">


                </div> <!-- widgets-wrap.// -->
            </div> <!-- col.// -->
        </div> <!-- row.// -->
            </div> <!-- container.// -->
        </section> <!-- header-main .// -->
        </header> <!-- section-header.// -->


        <!-- ========================= SECTION PAGETOP ========================= -->
        <!-- Fill entire parent -->
        <div class="ml-90 text-3xl static h-32 w-35">
            <div class="mt-1 ml-60">Ma wishlist</div>
        </div>
        <!-- ========================= SECTION INTRO END// ========================= -->

        <!-- ========================= SECTION CONTENT ========================= -->
        <section class="section-content padding-y">
        <div class="ml-60 container">

        <div class="row">
            <main class="col-md-9">
                <div class="border-solid border-4 border-light-blue-500 border-gray-900 card">
        <table class="table table-borderless table-shopping-cart">
        <thead class="text-muted">
        <tr class="small text-uppercase">
          <th scope="col" class="mt-1">Entreprise</th>
          <th scope="col" width="120" class="relative absolute center-1">Avancement</th>
          <th scope="col" class="relative absolute left-9" width="200">Mettre à jour</th>
        </tr>
        </thead>
        <tbody>

        <tr>
            <td>
                <hr class="absolute inset-x-0 top-8 h-16; background:black;">
                <figure class="itemside">
                    <div class="aside"><img src="" class="img-sm"></div>
                    <figcaption class="info">
                        <a href="#" class="title text-dark">IECORP</a>
                    </figcaption>
                    <hr style="align=left;margin-right:0; width:141%; margin-top: 20px; color:gray; opacity:30%">
                </figure>
            </td>
            <td>
                <div class="atw-Disposition-value"><div class="atw-Disposition-description"><span>J'ai postulé</span>
            </td>

            <td class="text-right">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-1 rounded-full"><span>Mettre à jour le statut</span></button>
            </td>
        </tr>
        <tr>
            <td>
                <figure class="itemside">
                    <div class="aside"><img src="" class="img-sm"></div>
                    <figcaption class="info">
                        <a href="#" class="title text-dark">IECORP</a>
                    </figcaption>
                    <hr style="align=left;margin-right:0; width:141%; margin-top: 20px; color:gray; opacity:30%">
                </figure>
            </td>
            <td>
                <div class="atw-Disposition-value"><div class="atw-Disposition-description"><span>J'ai postulé</span>
            </td>

            <td class="text-right">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-1 rounded-full"><span>Mettre à jour le statut</span></button>
            </td>
        </tr>
        <tr>

            <td>
                <figure class="itemside">
                    <div class="aside"><img src="" class="img-sm"></div>
                    <figcaption class="info">
                        <a href="#" class="title text-dark">IECORP</a>
                    </figcaption>
                    <hr style="align=left;margin-right:0; width:141%; margin-top: 20px; color:gray; opacity:30%">
                </figure>
            </td>
            <td>
                <div class="atw-Disposition-value"><div class="atw-Disposition-description"><span>J'ai postulé</span>
            </td>

            <td class="text-right">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-1 rounded-full"><span>Mettre à jour le statut</span></button>
            </td>
        </tr>
        </tbody>
        </table>









        </body>


    @endsection


