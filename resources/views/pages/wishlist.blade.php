@extends('app')



@section('title', 'Ma WishList | '. config('app.name'))

@section('content')
    <section class="py-5 text-center container">
    </section>

    <style> /**
        CSS WISHLIST
        **/


        .bg-blue-500 {
            border-radius:12px;
            background-color: #648ad4;
        }

        .relative {
            text-align: center;
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

        <!-- ========================= SECTION CONTENT ========================= -->
        <section class="section-content padding-y">
        <div class="ml-60 container">

        <div class="row">
            <main class="col-md-9">
                <div class="border-solid border-4 border-light-blue-500 border-gray-900 card">
        <table class="table table-borderless table-shopping-cart">
        <thead class="">
        <tr>
          <th scope="col" class="mt-1">Entreprise</th>
          <th scope="col" width="120" class="relative absolute center-1">Avancement</th>
          <th scope="col" class="relative absolute left-0" width="200">Mettre à jour</th>
        </tr>
        </thead>


        <tr>
            <td>
                <figure class="itemside">
                    <div class="aside"><img src="" class="img-sm"></div>
                    <figcaption class="info">
                        <a href="http://cesistage.com/companies/14" class="title text-dark">DIRSI METZ</a>
                    </figcaption>
                    <hr style="align=left;margin-right:0; width:141%; margin-top: 20px; color:gray; opacity:60%">
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
                        <a href="http://cesistage.com/companies/13" class="title text-dark">PMB Software</a>
                    </figcaption>
                    <hr style="align=left;margin-right:0; width:141%; margin-top: 20px; color:gray; opacity:60%">
                </figure>
            </td>
            <td>
                <div class="atw-Disposition-value"><div class="atw-Disposition-description"><span>Je ne l'ai pas choisi</span>
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
                        <a href="http://cesistage.com/companies/12" class="title text-dark">Focalys Nancy</a>
                    </figcaption>
                    <hr style="align=left;margin-right:0; width:141%; margin-top: 20px; color:gray; opacity:60%">
                </figure>
            </td>
            <td>
                <div class="atw-Disposition-value"><div class="atw-Disposition-description"><span>Je ne l'ai pas choisi</span>
            </td>

            <td class="text-right">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-1 rounded-full"><span>Mettre à jour le statut</span></button>
            </td>
        </tr>










        </body>


    @endsection


