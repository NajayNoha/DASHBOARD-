<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Focus</title>

    {{-- icon --}}
    <link rel="icon" href="{{asset('images/logo.png')}}" type="image/icon type">

    <!-- Icons font CSS-->
    <link href="{{asset('signup_assets/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('signup_assets/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    

    <!-- Vendor CSS-->
    <link href="{{asset('signup_assets/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('signup_assets/vendor/datepicker/daterangepicker.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('signup_assets/css/main.css')}}" rel="stylesheet" media="all">
</head>
{{-- // name - email - password  --}}
<body>
    <div class="page-wrapper bg-gra-02 p-t-10 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Demande de compte</h2>
                    <form action="register" method="POST">
                        @csrf
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nom :</label>
                                    <input class="input--style-4" type="text" name="nom">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Prenom :</label>
                                    <input type="text" name="prenom" class="input--style-4">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <span style="color:red">
                                    @error('nom')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-2">
                                <span style="color:red">
                                    @error('prenom')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-3">
                                <div class="input-group">
                                    <label class="label">Email :</label>
                                    <input class="input--style-4" type="email" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="row-3">
                                <span style="color:red">
                                @error('email')
                                    {{$message}}
                                @enderror
                                </span>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-3">
                                <div class="input-group">
                                    <label class="label">Mot de passe :</label>
                                    <input type="password" name="password" class="input--style-4">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="row-3">
                                <span style="color:red">
                                @error('password')
                                    {{$message}}
                                @enderror
                                </span>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-3">
                                <div class="input-group">
                                    <label class="label">Fonction :</label>
                                    <select class="input--style-4" name="type_user">
                                        <option value="user">Utilisateur</option>
                                        <option value="fournisseur">Fournisseur</option>
                                        <option value="employe">Employé</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="row-3">
                                <span style="color:red">
                                @error('type_user')
                                    {{$message}}
                                @enderror
                                </span>
                            </div>
                        </div>
                        <div class="row row-space">
                            <p>
                                Vous avez un compte ? <a href="/">Connectez-vous</a>
                            </p>
                            
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="{{asset('signup_assets/vendor/jquery/jquery.min.js')}}"></script>
    <!-- Vendor JS-->
    <script src="{{asset('signup_assets/vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('signup_assets/vendor/datepicker/moment.min.js')}}"></script>
    <script src="{{asset('signup_assets/vendor/datepicker/daterangepicker.js')}}"></script>

    <!-- Main JS-->
    <script src="{{asset('singup_assets/js/global.js')}}"></script>

</body>

</html>