@extends('layouts.app')

@section('titulo')
    Registrate en DevStagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center" >

        <div class="md:w-6/12 p-5" >
            <p> <img src="{{ asset('img/registrar.jpg') }}" alt="Imagen registro de usuario"> </p>
        </div>

        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">

            <form action="{{route('register')}}" method="POST" novalidate>
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">NOMBRE</label>
                    <input id="name" name="name" type="text" placeholder="Tu Nombre" class="border p-3 w-full rounded-lg @error('name')
                    border-red-500                         
                    @enderror" value="{{old('name')}}">
                </div>

                @error('name')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>                    
                @enderror

                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">Username</label>
                    <input id="username" name="username" type="text" placeholder="Tu nombre de usuario" class="border p-3 w-full rounded-lg @error('name')
                    border-red-500                         
                    @enderror" value="{{old('username')}}">
                </div>

                @error('username')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>                    
                @enderror

                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Email</label>
                    <input id="email" name="email" type="text" placeholder="Email de regsitro" class="border p-3 w-full rounded-lg @error('name')
                    border-red-500                         
                    @enderror" value="{{old('email')}}">
                </div>

                @error('email')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>                    
                @enderror

                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Password</label>
                    <input id="password" name="password" type="password" placeholder="Password de registro" class="border p-3 w-full rounded-lg @error('name')
                    border-red-500                         
                    @enderror">
                </div>

                @error('password')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>                    
                @enderror

                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">Repetir Password</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Repite tu password" class="border p-3 w-full rounded-lg">
                </div>

                <input type="submit" value="Crear Cuenta" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer
                uppercase font-bold w-full p-3 text-white">

            </form>

    </div>  

    </div>
@endsection