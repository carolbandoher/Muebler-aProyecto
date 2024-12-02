<div class="container">
<form action="<?=base_url('pagina/validaUsuario'); ?>" method="POST">
        <div class="mb-3">
            <label for="exampleImputEmail1" class="form-Label">Email</label>
            <input type="email" class="form-control" id="exampleImputEmail" aria-describebdy="emailHelp" name="usuario">
        </div>
        <div class="mb-3">
            <label for="exampleImputPassword1" class="form-Label">Password</label>
            <input type="password" class="form-control" id="exampleImputPassword1" name="password">
        </div>

        <button type="submit" class="btn btn-primary"> Ingresar </button>
    </form>
</div>