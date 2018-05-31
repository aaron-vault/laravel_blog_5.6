<aside class="col-md-4 blog-sidebar">
    <div class="p-3">
        <h4 class="font-italic">Авторизация</h4>
        @auth
            <div class="form-group">
                Вы вошли как <a href="{{ url('/home') }}">{{ Auth::user()->name }}</a>
            </div>
        @else
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="email">Логин</label>
                    <input class="form-control form-control-sm" name="email" id="email" type="text" required>
                </div>
                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input class="form-control form-control-sm" name="password" id="password" type="password" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm">Войти</button>
                </div>
            </form>
        @endauth
    </div>

    <div class="p-3 mb-3 bg-light rounded">
        <h4 class="font-italic">About</h4>
        <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
    </div>

    <div class="p-3">
        <h4 class="font-italic">Archives</h4>
        <ol class="list-unstyled mb-0">
            <li><a href="#">March 2014</a></li>
            <li><a href="#">February 2014</a></li>
            <li><a href="#">January 2014</a></li>
            <li><a href="#">December 2013</a></li>
            <li><a href="#">November 2013</a></li>
            <li><a href="#">October 2013</a></li>
            <li><a href="#">September 2013</a></li>
            <li><a href="#">August 2013</a></li>
            <li><a href="#">July 2013</a></li>
            <li><a href="#">June 2013</a></li>
            <li><a href="#">May 2013</a></li>
            <li><a href="#">April 2013</a></li>
        </ol>
    </div>

    <div class="p-3">
        <h4 class="font-italic">Elsewhere</h4>
        <ol class="list-unstyled">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
        </ol>
    </div>
</aside>