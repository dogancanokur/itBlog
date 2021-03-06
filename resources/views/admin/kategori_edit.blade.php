@extends('layouts.master')

@section('content')


    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">Kategori Düzenle</div>
                    <div class="panel-body">

                        {!! Form::model($kategori, ['route' => ['kategori.update', $kategori-> id],"method"=>"put","files" => true]) !!}


                        {!! Form::bsText("baslik","Başlık") !!}
                        {!! Form::bsText("enbaslik","İngilizce Başlık") !!}

                        {!! Form::bsSubmit("Kaydet") !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
