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

        .essai {
            border-radius:12px;
            background-color: #648ad4;
        }

        .oui {
            margin-left: 20%;

        }</style>


    <body style="">


        <header class="section-header">
        <section class="header-main border-bottom">
            <div class="container">


            <div class="col-lg-6 col-sm-12">
                <form action="#" class="search">
                    <div class="input-group w-100">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                </form> <!-- search-wrap .end// -->




                </div> <!-- widgets-wrap.// -->
            </div> <!-- col.// -->
        </div> <!-- row.// -->
            </div> <!-- container.// -->
        </section> <!-- header-main .// -->
        </header> <!-- section-header.// -->



        <!-- ========================= SECTION PAGETOP ========================= -->
        <section class="section-pagetop bg">
        <div class="container">
            <h2 class="title-page">Ma wishlist</h2>
        </div> <!-- container //  -->
        </section>
        <!-- ========================= SECTION INTRO END// ========================= -->

        <!-- ========================= SECTION CONTENT ========================= -->
        <section class="section-content padding-y">
        <div class="container">

        <div class="row">
            <main class="col-md-9">
        <div class="card">

        <table class="table table-borderless table-shopping-cart">
        <thead class="text-muted">
        <tr class="small text-uppercase">
          <th scope="col">Entreprise</th>
          <th scope="col" width="120" class="oui">Avancement</th>
          <th scope="col" class="text-right" width="200">Mettre à jour</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                <figure class="itemside">
                    <div class="aside"><img src="" class="img-sm"></div>
                    <figcaption class="info">
                        <a href="#" class="title text-dark">IECORP</a>
                    </figcaption>
                </figure>
            </td>
            <td>
                <div class="atw-Disposition-value"><div class="atw-Disposition-description"><span>J'ai postulé</span></div><div class="atw-Disposition-timestamp">ven.</div></div>
            </td>

            <td class="text-right">
                <button class="essai" data-apptk="1f1kqh7qsn5a6808" aria-haspopup="true" type="button"><span>Mettre à jour le statut</span></button>
            </td>
        </tr>
        <tr>
            <td>
                <figure class="itemside">
                    <div class="aside"><img src="" class="img-sm"></div>
                    <figcaption class="info">
                        <a href="#" class="title text-dark">IECORP</a>
                    </figcaption>
                </figure>
            </td>
            <td>
                <div class="atw-Disposition-value"><div class="atw-Disposition-description"><span>J'ai postulé</span></div><div class="atw-Disposition-timestamp">ven.</div></div>
            </td>

            <td class="text-right">
                <button class="essai" data-apptk="1f1kqh7qsn5a6808" aria-haspopup="true" type="button"><span>Mettre à jour le statut</span></button>
            </td>
        </tr>
        <tr>
            <td>
                <figure class="itemside">
                    <div class="aside"><img src="" class="img-sm"></div>
                    <figcaption class="info">
                        <a href="#" class="title text-dark">IECORP</a>
                    </figcaption>
                </figure>
            </td>
            <td>
                <div class="atw-Disposition-value"><div class="atw-Disposition-description"><span>J'ai postulé</span></div><div class="atw-Disposition-timestamp">ven.</div></div>
            </td>

            <td class="text-right">
                <button class="essai" data-apptk="1f1kqh7qsn5a6808" aria-haspopup="true" type="button"><span>Mettre à jour le statut</span></button>
            </td>
        </tr>
        </tbody>
        </table>









        </body>


    @endsection


