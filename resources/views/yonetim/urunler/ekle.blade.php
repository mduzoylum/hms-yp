@extends('yonetim.layouts.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Ürün</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('yonetim.anasayfa')}}">Anasayfa</a></li>
                            <li class="breadcrumb-item active">Ürün Ekle</li>
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
                            <form method="POST" action="{{route('yonetim.urunler.store')}}">
                                {{csrf_field()}}
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleSelectBorder">Ana Kategori
                                            <code>Ana Kategoriyi Seçiniz</code></label>
                                        <select class="custom-select form-control-border" id="ana_kategori"
                                                name="ana_kategori">
                                            @foreach($ana_kategoriler as $ana_kategori)
                                                <option value="{{$ana_kategori->id}}">{{$ana_kategori->ad}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleSelectBorder">Alt Kategori
                                            <code>Alt Kategoriyi Seçiniz</code></label>
                                        <select class="custom-select form-control-border" id="alt_kategori"
                                                name="alt_kategori">
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputBorder">Referans No</label>
                                        <input type="text" class="form-control form-control-border"
                                               id="referans_no" name="referans_no" placeholder="Referans No Giriniz">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputBorder">Parça No</label>
                                        <input type="text" class="form-control form-control-border"
                                               id="parca_no" name="parca_no" placeholder="Parça No Giriniz">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputBorder">Parça Adı(TR)</label>
                                        <input type="text" class="form-control form-control-border"
                                               id="tr_parca_no" name="tr_parca_no" placeholder="Parça Adı(TR) Giriniz">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputBorder">Parça Adı(EN)</label>
                                        <input type="text" class="form-control form-control-border"
                                               id="en_parca_no" name="en_parca_no" placeholder="Parça Adı(EN) Giriniz">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputBorder">Parça Adı(RU)</label>
                                        <input type="text" class="form-control form-control-border"
                                               id="ru_parca_no" name="ru_parca_no" placeholder="Parça Adı(RU) Giriniz">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputBorder">Özellik Adı(TR)</label>
                                        <input type="text" class="form-control form-control-border"
                                               id="tr_ozellik_no" name="tr_ozellik_no"
                                               placeholder="Özellik Adı(TR) Giriniz">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputBorder">Özellik Adı(EN)</label>
                                        <input type="text" class="form-control form-control-border"
                                               id="en_ozellik_no" name="en_ozellik_no"
                                               placeholder="Özellik Adı(EN) Giriniz">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputBorder">Özellik Adı(RU)</label>
                                        <input type="text" class="form-control form-control-border"
                                               id="ru_ozellik_no" name="ru_ozellik_no"
                                               placeholder="Özellik Adı(RU) Giriniz">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputBorder">Adet</label>
                                        <input type="text" class="form-control form-control-border"
                                               id="adet" name="adet" placeholder="Adet Giriniz">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputBorder">Fiyat(TL)</label>
                                        <input type="text" class="form-control form-control-border"
                                               id="tl_fiyat" name="tl_fiyat" placeholder="Fiyat(TL) Giriniz">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputBorder">Fiyat(USD)</label>
                                        <input type="text" class="form-control form-control-border"
                                               id="usd_fiyat" name="usd_fiyat" placeholder="Fiyat(USD) Giriniz">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputBorder">Fiyat(EURO)</label>
                                        <input type="text" class="form-control form-control-border"
                                               id="euro_fiyat" name="euro_fiyat" placeholder="Fiyat(EURO) Giriniz">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputBorder">
                                            <a id="lfm" data-input="thumbnail" data-preview="holder"
                                               class="btn btn-outline-primary">
                                                <i class="fa fa-picture-o"></i> Parça Resmi
                                            </a></label>
                                        <input id="thumbnail" class="form-control" type="text" name="parca_resmi">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputBorder">Teknik Resim</label>
                                        <input type="text" class="form-control form-control-border"
                                               id="referans_no" name="referans_no" placeholder="Teknik Resim Giriniz">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('footer')
    <script src="{{asset('jquery-3.6.0.min.js')}}"></script>
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script>
        $(document).ready(function () {

            //todo::filemanager
            var route_prefix = "laravel-filemanager";
            $('#lfm').filemanager('image', {prefix: route_prefix});

            //todo::ana kategori - alt kategori
            const selectElement = document.querySelector('#ana_kategori');
            selectElement.addEventListener('change', (event) => {
                const ana_kategori_id = event.target.value;
                var selectItem = document.getElementById("alt_kategori");
                document.getElementById("alt_kategori").innerHTML = null;
                $.ajax({
                    type: 'GET',
                    url: '{{ route('yonetim.altkategori.index') }}' + '/' + ana_kategori_id,
                    success: function (data) {
                        $.each(data, function (index, value) {
                            var option = document.createElement("option");
                            option.text = value["ad"];
                            option.value = value["id"];
                            selectItem.add(option);

                        });
                    }
                });
            });

        });
    </script>
@endsection
