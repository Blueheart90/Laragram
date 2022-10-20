@extends('layouts.app')
@section('titulo')
Registrate en Laragram
@endsection
@section('contenido')
<div class="md:flex md:justify-center">
    <div class="md:w-4/12">
        <p>Imagen aquí</p>
    </div>
    <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
        <form>
            <div class=" mb-5">
                <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Nombre</label>
                <input type="text" name="name" id="name" placeholder="Tu nombre" class="border p-3 w-full rounded-lg">
            </div>
            <div class=" mb-5">
                <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">Username</label>
                <input type="text" name="username" id="username" placeholder="Tu nombre de usuario" class="border p-3 w-full rounded-lg">
            </div>
            <div class=" mb-5">
                <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Email</label>
                <input type="email" name="email" id="email" placeholder="Tu email de registro" class="border p-3 w-full rounded-lg">
            </div>
            <div class=" mb-5">
                <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Contraseña</label>
                <input type="password" name="password" id="password" placeholder="Tu contraseña de registro" class="border p-3 w-full rounded-lg">
            </div>
            <div class=" mb-5">
                <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">Repite contraseña</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repite tu contraseña de registro" class="border p-3 w-full rounded-lg">
            </div>
            <input type="submit" value="Crear cuenta" class=" py-2 bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full text-white rounded-lg">
        </form>
    </div>
</div>
@endsection
