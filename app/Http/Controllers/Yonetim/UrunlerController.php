<?php

namespace App\Http\Controllers\Yonetim;

use App\Http\Controllers\Controller;
use App\Models\AnaKategori;
use App\Models\Urun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;


class UrunlerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $kategoriler = Urun::all();
            return datatables()->of($kategoriler)
                ->addColumn('edit', function ($row) {
                    return "<a href='" . route('yonetim.urunler.edit', $row->id) . "' class=\"btn btn-block btn-info btn-flat\">Düzenle</a>";
                })
                ->addColumn('delete', function ($row) {
                    return
                        "<form onclick='return confirm(\"Emin misin\")' action='" . route('yonetim.urunler.destroy', $row->id) . "' method='post'>
                        " . csrf_field() . "
                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                        <button class=\"btn btn-block btn-danger btn-flat\">Sil</button>
                        </form>";
                })
                ->rawColumns(['edit', 'delete'])
                ->make(true);
        }

        return view('yonetim.urunler.listele');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ana_kategoriler=AnaKategori::all();
        return view('yonetim.urunler.ekle',compact('ana_kategoriler'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kategori_adi' => 'required|min:3'
        ]);
        if ($validator->fails()) {
            Alert::error("Hata", $validator->errors()->first());
            return redirect()->route('yonetim.urunler.create');
        }
        AnaKategori::create([
            "ad" => request("kategori_adi")
        ]);
        Alert::success("Başarılı", "Kaydetme Başarılı");

        return redirect()->route('yonetim.urunler.create');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return false;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = AnaKategori::find($id);
        return view("yonetim.urunler.duzenle", compact("kategori"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'kategori_adi' => 'required|min:3'
        ]);
        if ($validator->fails()) {
            Alert::error("Hata", $validator->errors()->first());
            return redirect()->route('yonetim.urunler.index');
        }
        AnaKategori::where("id", $id)->update(["ad" => request("kategori_adi")]);

        Alert::success("Başarılı", "Güncelleme Başarılı");
        return redirect()->route('yonetim.urunler.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AnaKategori::where("id", $id)->delete();

        Alert::success("Başarılı", "Silme Başarılı");
        return redirect()->route('yonetim.urunler.index');
    }
}
