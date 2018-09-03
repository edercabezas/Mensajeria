@extends('layouts.app')

@section('content')
        <b-container fluid style="height: calc(100vh - 56px);">
              <b-row no-gutters>
                     <b-col cols="4">
                   
                        <contacto-list-component>   
                        </contacto-list-component>

                     </b-col>
                     <b-col cols="8">
                        <activa-conversacion-component>
                        </activa-conversacion-component>
                     </b-col>
             </b-row>   
        </b-container>
@endsection
