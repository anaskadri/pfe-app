@auth()
    @include('viewEtudiant.layouts.navbars.navs.auth')
@endauth
    
@guest()
    @include('viewEtudiant.layouts.navbars.navs.guest')
@endguest