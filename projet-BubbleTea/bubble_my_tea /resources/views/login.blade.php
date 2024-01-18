<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Connexion</title>
</head>

<body>
<p>Bienvenu sur <a href="/"><strong><u>Bubble My tea</u></strong></a></p>
        <div class="container">
            <div>
                <div>
                    <h1>Connexion</h1>
                </div>
                <div>
                    @if(Session::has('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                    <form action="{{ route('loginPost') }}" method="POST">
                        @csrf
                        <div class="txt_field">
                            <input type="email" name="email" class="form-control" id="email"  required>
                            <label for="email" class="form-label">Email</label>
                        </div>
                        <div class="txt_field">
                            <input type="password" name="password" class="form-control" id="password" required>
                            <label for="password" class="form-label">Mot de passe</label>
                            
                        </div>
                        <div class="button">
                            <a href="/"><button type="submit">Se connecter</button></a>
                        </div>
                    </form>
                    <div class="signup_link">
                <a href="">Mot de passe oublié</a> <br> <br>
                <a href="/signup">Inscription</a>
            </div>
         </div>
     </div>
</div>
</div>
</body>
</html>

