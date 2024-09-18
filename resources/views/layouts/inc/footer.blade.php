<div class="footer p-4">
    <div class="row">
        <div class="col-2">
            <a class="navbar-brand title" href="{{ url('/') }}">
                <img src="{{ asset('assets/images/logoW.png') }}" alt="Logo" class="card-img">
            </a>
        </div>
        <div class="col-7">
            <h3>NOUVEAU SUR E-MonsefBey ?</h3>
            <p>Inscrivez-vous à nos communications pour recevoir nos meilleures offres</p>
            <div class="d-flex p-1 bg-primary-subtle rounded-3 mail-input">
                <x-feathericon-mail class="icons"/>
                <input type="text" placeholder="Entrez E-mail" class="form-control bg-primary-subtle border-0 pr-8">
                <button class="btn">Homme</button>
                <button class="btn">Femme</button>
            </div>
            <div class="d-flex align-items-center mt-3">
                <input type="checkbox" class="custom-checkbox"/>
                <p class="mb-0 ms-2">J'accepte la Politique de confidentialité et des cookies de Jumia et je comprends que je peux me désabonner des newsletters à tout moment.</p>
            </div>
        </div>
        <div class="col-3">
            <a class=" navbar-brand title" href="{{ url('/') }}">
                <div class="d-flex">
                    <img src="{{ asset('assets/images/logoW.png') }}" alt="Logo" class="last-img">
                    <div class="tel">
                        <p>DANS VOTRE POCHE!</p>
                        <p>Téléchargez notre application gratuite</p>
                    </div>

                </div>
                <div class="lastcard">
                    <a href="#"><x-ionicon-logo-google-playstore class="Stor"/> PlayStore</a>
                    <a href="#"><x-si-appstore class="Stor"/> AppStore</a>
                </div>
            </a>
        </div>
    </div>
</div>

<style>
    .footer {
        background-color: #454444;
        color: #fff;
    }

    .card-img {
        margin: 30px 0 0 60px;
        width: 110px;
        height: 50px;
    }

    .mail-input {
        position: relative;
        padding: 20px;
    }

    .icons {
        width: 20px;
        position: absolute;
        left: 10px;
        top: 50%;
        transform: translateY(-50%);
        color: rgb(196, 94, 46);
    }
    .mail-input  input {
        padding-left: 30px;
    }
    .last-img {
        width: 40px;
        height: 40px;
        margin-right: 10px;
    }

    p {
        font-size: 12px;
    }
    .Stor {
        width: 20px;
        height: 20px;
        color: rgb(196, 94, 46);

    }
    .tel p{
        margin: 0%;
        font-size: 10px;
    }
    a:hover{
        color: rgb(196, 94, 46);
    }
    .custom-checkbox {
        width: 20px;
        height: 20px;

    }
</style>
