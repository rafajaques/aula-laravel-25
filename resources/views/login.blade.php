<!-- login.blade.php -->
{{ session('msg') }}

<form action="{{ route('acesso.login') }}" method="post">
    @csrf
    <input type="text" name="email">
    <br>
    <input type="password" name="password">
    <br>
    <input type="submit" value="Acessar">
</form>