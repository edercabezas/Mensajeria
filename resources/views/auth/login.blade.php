@extends('layouts.app')

@section('content')
    <b-container>
            <b-row align-h="center">
                
                    <b-col cols="8">

                        <b-card title="Inicio de Sesion">
                            <b-alert show>
                                        Favor ingresar tus datos:
                            </b-alert>
                        

                         <b-form  method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

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
                                        id="password" name="password"
                                         value="{{ old('password') }}"  required 
                                        placeholder="**********************">
                                    </b-form-input>
                                    </b-form-group>

                                    <b-form-group>
                                        <b-form-checkbox name="remember" 
                                            {{ old('remember') ? 'checked="true"' : '' }} >
                                         Recordar sesion
                                        </b-form-checkbox>
                                    </b-form-group>

                                         <b-button type="submit" variant="primary" >
                                                Ingresar
                                         </b-button>

                                        <b-button type="submit"
                                             href="{{ route('password.request') }}"
                                             variant="link" >
                                            ¿Recuperar contraseña?
                                         </b-button>

                        </b-form>
                     </b-card>
               </b-col>
            </b-row>
    </b-container>
@endsection
