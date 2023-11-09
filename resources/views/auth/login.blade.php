@extends('layouts.app')

@section('titulo')
    Inicia sesión en DevStagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center" >

        <div class="md:w-6/12 p-5" >
            <p> <img src="{{ asset('img/login.jpg')}}" alt="Imagen login de usuario"> </p>
        </div>

        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">

            <form method="POST" action="{{ route('login')}}" novalidate>
                @csrf

                @if (session('mensaje'))
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{session('mensaje')}}</p>
                @endif
               
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Email</label>
                    <input id="email" name="email" type="text" placeholder="Email de regsitro" class="border p-3 w-full rounded-lg @error('name')
                    border-red-500                         
                    @enderror" value="{{old('email')}}">
                    
                    </div>
                
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Password</label>
                    <input id="password" name="password" type="password" placeholder="Password de registro" class="border p-3 w-full rounded-lg @error('name')
                    border-red-500                         
                    @enderror"/>
                </div>

                @error('password')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>                    
                @enderror

                <div class="mb-5">
                    <input type="checkbox" name="remenber"><label for="remenber" class="text-gray-500 text-sm">
                        Mantener mi sesión abierta</label> 
                </div>

               <input type="submit" value="Iniciar Sesión" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer
                uppercase font-bold w-full p-3 text-white">

            </form>

    </div>

    </div>
@endsection