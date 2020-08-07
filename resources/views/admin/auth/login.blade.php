
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CoreUI Pro Bootstrap 4 Admin Template">
    <meta name="author" content="Lukasz Holeczek">
    <meta name="keyword" content="CoreUI Pro Bootstrap 4 Admin Template">
    <!-- <link rel="shortcut icon" href="assets/ico/favicon.png"> -->

    <title>{{__('D2Messe')}}</title>

    <!-- Icons -->
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}">
    <link href="{{asset('vendors/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/css/simple-line-icons.min.css')}}" rel="stylesheet">

    <!-- Main styles for this application -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!-- Styles required by this views -->

</head>

<body class="app flex-row align-items-center">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-group">
                <div class="card p-4 rounded">
                    <form id="signInForm" action="{{route('admins.authentication')}}" method="post">
                        @csrf
                        <div class="card-body">
                            <h1>{{__('Connexion')}}</h1>
                            <p class="text-muted">{{__('Connexion')}}</p>
                            <div class="input-group mb-1">
                                <div class="input-group-prepend">
                                    <label class="input-group-text"><i class="icon-user"></i></label>
                                </div>
                                <input type="email" class="form-control" placeholder="{{__('email')}}" name="email" required>
                            </div>
                            @error('email')
                                <em id="email-error" class="error text-red">{{__('Nom d\'utilisateur ou mot de passe incorrect')}}</em>
                            @enderror
                            <div class="input-group mb-4 mt-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-lock"></i></span>
                                </div>
                                <input type="password" class="form-control" placeholder="{{__('Mot de passe')}}" name="password" required>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <button type="submit" class="btn btn-primary px-4 rounded">{{__('Connexion')}}</button>
                                </div>
                                <div class="col-6 text-right">
                                    <button type="button" class="btn btn-link px-0">{{__('Mot de passe oublié?')}}</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
                    <div class="card-body text-center">
                        <div>
                            <h2>{{__('Vous vous êtes trouvé là par hazard?')}}</h2>
                            <p>{{__('Contactez les administrateurs du site')}}</p>
                            <a href="mailto:support@ainotek.com" class="btn btn-primary active mt-3">
                                <i class="icon-paper-plane mr-2"></i> {{__('Nous écrire')}}
                            </a>
                            <a href="{{route('home')}}" class="btn bg-white text-primary border-light active mt-3">
                                <i class="icon-arrow-left mr-2"></i> {{__('Retourner à l\'accueil')}}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap and necessary plugins -->
<script src="{{asset('vendors/js/jquery.min.js')}}"></script>
<script src="{{asset('vendors/js/popper.min.js')}}"></script>
<script src="{{asset('vendors/js/bootstrap.min.js')}}"></script>
<script>
    $(function (){
        $.validator.setDefaults( {
            submitHandler: function () {
                alert( 'submitted!' );
            }
        });
        $('#signInForm').validate({
            rules: {
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 5
                },
            },
            messages: {
                email: 'Please enter a valid email address',
                password: {
                    required: 'Please provide a password',
                    minlength: 'Your password must be at least 5 characters long'
                },
            },
            errorElement: 'em',
            errorPlacement: function ( error, element ) {
                error.addClass( 'invalid-feedback' );
                if ( element.prop( 'type' ) === 'checkbox' ) {
                    error.insertAfter( element.parent( 'label' ) );
                } else {
                    error.insertAfter( element );
                }
            },
            highlight: function ( element, errorClass, validClass ) {
                $( element ).addClass( 'is-invalid' ).removeClass( 'is-valid' );
            },
            unhighlight: function (element, errorClass, validClass) {
                $( element ).addClass( 'is-valid' ).removeClass( 'is-invalid' );
            }
        });
    });
</script>
</body>
</html>
