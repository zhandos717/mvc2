<div class="col-6">
    <main class="form-signin">
        <form method="POST" action="/account/login">
            <h1 class="h3 mb-3 fw-normal ">Вход</h1>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="login" name="login" placeholder="name@example.com">
                <label for="login">Логин</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                <label for="password">Пароль</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" name="enter" type="submit">Вход</button>
        </form>
    </main>
</div>