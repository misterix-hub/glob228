@extends('layouts.header')

@section('content')

<div style="margin-top: 60px;">
    <div id="carouselId" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselId" data-slide-to="0" class="active"></li>
            <li data-target="#carouselId" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active" style="background: url('/Glob228/public/db/carousels/01.jpg'); height: 500px; background-size: cover; background-position: center;">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <h2 class="article-carousel-price">25000 F CFA</h2>
                            <h3 class="black-text article-carousel-title">Chemise homme</h3>
                            <h5 class="black-text article-carousel-text">
                                Profitez de nos meileurs offres et faites-vous
                                plein d'économies !
                            </h5>
                            <div class="text-left">
                                <a href="" class="btn btn-lg btn-white z-depth-0 ml-0">
                                    <span class="font-size-13">Ajouter au pannier</span>
                                </a>
                                <a href="" class="btn btn-lg btn-orange z-depth-0">
                                    <span class="font-size-13">Commander</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="background: url('/Glob228/public/db/carousels/02.jpg'); height: 500px; background-size: cover; background-position: center;">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <h2 class="article-carousel-price">25000 F CFA</h2>
                            <h3 class="black-text article-carousel-title">Chemise homme</h3>
                            <h5 class="black-text article-carousel-text">
                                Profitez de nos meileurs offres et faites-vous
                                plein d'économies !
                            </h5>
                            <div class="text-left">
                                <a href="" class="btn btn-lg btn-white z-depth-0 ml-0">
                                    <span class="font-size-13">Ajouter au pannier</span>
                                </a>
                                <a href="" class="btn btn-lg btn-orange z-depth-0">
                                    <span class="font-size-13">Commander</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div><br />

<div class="container-fluid">
    <div class="row font-size-14">
        @for ($i = 0; $i < 8; $i++)
            <div class="col-lg-3 text-center">
                <img src="{{ URL::asset('db/articles/02.jpg') }}" width="100%" class="mb-1" />
                <h4 class="mb-0 article-item-price red-text">2500 F CFA</h4>
                <b class="font-weight-bold text-muted">Le nom du produit ici là</b><br />
                <br />
            </div>
        @endfor
    </div>
</div>

<div style="padding: 0 10px;">
    <div class="container-fluid">
        <div class="row font-size-14">
            @for ($i = 0; $i < 48; $i++)
                <div class="col-lg-2 p-1 ">
                    <div class="text-center white ml-2 mr-2" style="position: absolute; top: 10px; left: 0; right: 0; z-index: 2; border-radius: 15px;">
                        <b>Nom du produit ici</b>
                    </div>
                    <div class="card" style="border-radius: 15px; overflow: hidden;">
                        <div class="card-body p-0">                        
                            <img src="{{ URL::asset('db/articles/03.jpg') }}" alt="" width="100%">
                        </div>
                    </div>
                    <div style="margin-top: -40px; position: relative; border-radius: 15px;"
                    class="white text-center mr-2 ml-2 mb-2 pt-1 pb-1">
                        <h5 class="mb-0 article-item-price red-text">2500 F CFA</h5>
                        
                    </div>
                </div>
            @endfor
        </div>
    </div>
</div>
    
@endsection