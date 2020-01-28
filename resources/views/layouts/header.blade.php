<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('plugins/icofont/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('plugins/mdb/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('plugins/mdb/css/mdb.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('plugins/mdb/css/style.css') }}">
    @yield('css')
    <title>Glob228</title>
</head>
<body>


    <div class="menu-bar white">
        <table width="100%">
            <tr>
                <td width="200">
                    <div class="logo">
                        <a href="{{ route('vIndex') }}">
                            <span class="blue-text">Glob</span><span class="orange-text">228</span>
                        </a>
                    </div>
                </td>
                <td width="45%">
                    <div class="search-cover">
                        <form action="">
                            <table width="100%">
                                <tr>
                                    <td>
                                        <input type="text" placeholder="Rechercher un produit ...">
                                    </td>
                                    <td width="110">
                                        <button type="submit" class="blue white-text darken-2">
                                            Rechercher
                                        </button>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </td>
                <td class="pl-2">
                    <div class="btn-group" style="border: 1px solid #CCC; border-radius: 2px;">
                        <button type="button" class="btn btn-white btn-md m-0 pr-0 z-depth-0">Catégories</button>
                        <button type="button" class="btn btn-white btn-md m-0 z-depth-0 dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                            <div style="width: 900px; height: 150px;">
                                
                            </div>
                        </div>
                    </div>
                </td>
                <td class="font-size-13 text-right">
                    <a href="" class="black-text">
                        <i class="icofont-ui-dial-phone icofont-2x"></i>
                    </a>
                </td>
                <td class="text-right" width="70">
                    <a href="">
                        <i class="icofont-ui-cart icofont-3x"></i>
                    </a>
                </td>
                <td width="20"></td>
            </tr>
        </table>
    </div>

    @yield('content')

    <br /><br /><br />

    <footer class="grey lighten-2"><br />
        <div class="container">
            <div class="row">
                <div class="col-lg-4 font-size-14">
                    <span><b>GLOB228</b></span>
                    <div style="width: 150px;" class="border-bottom border-danger mt-1 mb-1"></div>
                    <ul type="none" class="pl-0" style="line-height: 25px;">
                        <li>
                            <a href="" class="black-text">
                                En savoir plus sur nous
                            </a>
                        </li>
                        <li>
                            <a href="" class="black-text">
                                Termes et conditions d'utilisations
                            </a>
                        </li>
                        <li>
                            <a href="" class="black-text">
                                Politique de confidentialités
                            </a>
                        </li>
                        <li>
                            <a href="" class="black-text">
                                Nos partenaires
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 font-size-14">
                    <span><b>NEWSLETTER</b></span>
                    <div style="width: 150px;" class="border-bottom border-danger mt-1 mb-1"></div>

                    <p class="text-muted mb-2">Inscrivez-vous à notre news letter et ne rattez aucune de nos nouvelles publications et articles ajoutées.</p>
                    <form action="" method="post">
                        @csrf
                        <table width="100%">
                            <tr>
                                <td>
                                    <input type="text" class="form-control" placeholder="Email ...">
                                </td>
                                <td width="90">
                                    <button type="submit" class="btn btn-block btn-blue btn-sm" style="padding-top: 10px; padding-bottom: 10px;">
                                        Envoyer
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
                <div class="col-lg-4 font-size-14">
                    <span><b>SUIVEZ-NOUS SUR</b></span>
                    <div style="width: 150px;" class="border-bottom border-danger mt-1 mb-1"></div>

                    <a href="" class="btn btn-indigo p-0 rounded-circle ml-0" style="width: 40px; height: 40px; line-height: 40px;">
                        <i class="icofont-facebook"></i>
                    </a>

                    <a href="" class="btn btn-red p-0 rounded-circle" style="width: 40px; height: 40px; line-height: 40px;">
                        <i class="icofont-instagram"></i>
                    </a>

                    <a href="" class="btn btn-blue-grey p-0 rounded-circle" style="width: 40px; height: 40px; line-height: 40px;">
                        <i class="icofont-linkedin"></i>
                    </a>

                    <a href="" class="btn btn-cyan p-0 rounded-circle" style="width: 40px; height: 40px; line-height: 40px;">
                        <i class="icofont-twitter"></i>
                    </a>

                    <div class="mt-3">
                        <b><span class="blue-text">Glob</span><span class="orange-text">228</span></b>
                        &copy; 2020 | Tous droits réservés
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="grey font-size-14 white-text darken-3 p-1">
            By <a href="mailto:ngabalazare3@gmail.com" class="cyan-text">ngabalazare3@gmail.com</a>
        </div>
    </footer>


    <script src="{{ URL::asset('plugins/mdb/js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/mdb/js/popper.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/mdb/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/mdb/js/mdb.min.js') }}"></script>
</body>
</html>