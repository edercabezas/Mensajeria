@extends('layouts.app')

@section('content')

        <b-container>
            <b-row align-h="center">
                 <b-col cols="8">

                    <b-card title="Inicio de Sesion" class="my-3">
                           
                            @if($errors->any())
                                 <b-alert show variant="danger">

                                        <ul class="mb-0">
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                 </b-alert> 
                            @else
                                 <b-alert show>
                                       Registrate:
                                </b-alert>
                            @endif
                         <b-form  method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

                                    <b-form-group
                                        label="Nombre Usuario"
                                        label-for="name">
                                        <b-form-input  type="text"
                                         id="name"  name="name"
                                         value="{{ old('name') }}"  required autofocus>
                                    </b-form-input>
                                    </b-form-group>

                                    <b-form-group
                                        label="Correo Electronico"
                                        label-for="email"
                                        description="">
                                        <b-form-input  type="email"
                                         id="email"  name="email"
                                         value="{{ old('email') }}"  required autofocus
                                        placeholder="edercortez10@gmail.com">
                                    </b-form-input>
                                    </b-form-group>

                                     <b-form-group
                                        label="Contraseña"
                                        label-for="password"
                                        description="">
                                        <b-form-input  type="password"
                                        id="password" name="password"  required 
                                        placeholder="**********************">
                                    </b-form-input>
                                    </b-form-group>


                                     <b-form-group
                                        label="Confirmar contraseña"
                                        label-for="password_confirmation">
                                        <b-form-input  type="password"
                                        id="password_confirmation"
                                         name="password_confirmation"
                                          required 
                                        placeholder="**********************">
                                    </b-form-input>
                                    </b-form-group>


                                         <b-button type="submit" variant="primary" >
                                                Registrate
                                         </b-button>

                                    <b-button type="submit"
                                         href="{{ route('login') }}"
                                         variant="link" >
                                        ¿Ya te has registrado?
                                     </b-button>

                        </b-form>

                    </b-card> 
            </b-row >
        </b-container>

@endsection



                     