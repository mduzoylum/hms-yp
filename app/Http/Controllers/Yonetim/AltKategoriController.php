<?php

namespace App\Http\Controllers\Yonetim;

use App\Http\Controllers\Controller;
use App\Models\AltKategori;
use App\Models\AnaKategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;


class AltKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $kategoriler = AltKategori::all();
            return datatables()->of($kategoriler)
                ->addColumn('category', function ($row) {
                    $kategori = AnaKategori::find($row->kategori_id)->ad;
                    return $kategori;
                })
                ->addColumn('edit', function ($row) {
                    return "<a href='" . route('yonetim.altkategori.edit', $row->id) . "' class=\"btn btn-block btn-info btn-flat\">Düzenle</a>";
                })
                ->addColumn('delete', function ($row) {
                    return
                        "<form onclick='return confirm(\"Emin misin\")' action='" . route('yonetim.altkategori.destroy', $row->id) . "' method='post'>
                        " . csrf_field() . "
                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                        <button class=\"btn btn-block btn-danger btn-flat\">Sil</button>
                        </form>";
                })
                ->rawColumns(['edit', 'delete'])
                ->make(true);
        }

        return view('yonetim.alt_kategori.listele');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ana_kategoriler = AnaKategori::all();
        return view('yonetim.alt_kategori.ekle', compact('ana_kategoriler'));
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
            return redirect()->route('yonetim.altkategori.create');
        }
        AltKategori::create([
            "kategori_id" => request("ana_kategori"),
            "ad" => request("kategori_adi")
        ]);
        Alert::success("Başarılı", "Kaydetme Başarılı");

        return redirect()->route('yonetim.altkategori.create');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategoriler=AltKategori::where('kategori_id',$id)->get();
        return response()->json($kategoriler);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ana_kategoriler = AnaKategori::all();
        $kategori = AltKategori::find($id);
        return view("yonetim.alt_kategori.duzenle", compact("kategori","ana_kategoriler"));
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
            return redirect()->route('yonetim.altkategori.index');
        }
        AltKategori::where("id", $id)->update(["ad" => request("kategori_adi")]);

        Alert::success("Başarılı", "Güncelleme Başarılı");
        return redirect()->route('yonetim.altkategori.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AltKategori::where("id", $id)->delete();

        Alert::success("Başarılı", "Silme Başarılı");
        return redirect()->route('yonetim.altkategori.index');
    }
}
