
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inscription</title>
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
<a href="/"><img src="img/logo.png" alt="logo" class="logo"></a>
        <div class="container">
                <div>
                    <h1>Inscription</h1>
                </div>
                <div>
                    @if(Session::has('success'))
                        <div role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif

                    <form action="{{ route('signupPost') }}" method="POST">
                        @csrf

                        <div class="txt_field">
                            <label for="prenom" class="form-label">Prénom</label>
                            <input type="text" name="prenom" class="form-control" id="name" placeholder="John" required>
                        </div>
                        <div class="txt_field">
                            <label for="name" class="form-label">Nom</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Mcdonald" required>
                        </div>
                        <div class="txt_field">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required>
                        </div>
                        <div class="txt_field">
                            <label for="password" class="form-label">Mot de passe</label>
                            <input type="password" name="password" class="form-control" id="password" required>
                        </div>

                        <div>
                        <a href="/login"><button type="submit">Créer le compte</button></a>
                        </div>
                    </form>

                    <div class="login_link">
                        <a href="/login">Vous avez déja un compte</a>
                    </div>
                </div>
        </div>
    
</body>
</html>
