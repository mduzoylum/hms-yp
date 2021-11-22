@extends('yonetim.layouts.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Ana Kategori</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('yonetim.anasayfa')}}">Anasayfa</a></li>
                            <li class="breadcrumb-item active">Ana Kategori</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Ekle</h3>
                            </div>
                            <form method="POST" action="{{route('yonetim.altkategori.update',$kategori->id)}}">
                                {{csrf_field()}}
                                @method("PUT")
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleSelectBorder">Üst Kategori
                                            <code>Önce Üst Kategoriyi Seçiniz</code></label>
                                        <select class="custom-select form-control-border" id="ana_kategori"
                                                name="ana_kategori">
                                            @foreach($ana_kategoriler as $ana_kategori)
                                                <option value="{{$ana_kategori->id}}" {{$kategori->kategori_id==$ana_kategori->id ? "selected" : ""}}>{{$ana_kategori->ad}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputBorder">Kategori Adı</label>
                                        <input type="text" class="form-control form-control-border"
                                               id="kategori_adi" name="kategori_adi" placeholder="Kategori Adı Giriniz">
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Güncelle</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
