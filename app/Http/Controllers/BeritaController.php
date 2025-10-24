<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Url;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
   public function index()
    {
        $beritaUrl = Url::all();
        $beritaUtama = Berita::latest()->first();
        $beritaLain = Berita::where('id', '!=', $beritaUtama->id)->get();
        return view('edit.berita.beritaselengkapnya', compact('beritaUtama', 'beritaLain', 'beritaUrl'));
    }

    // halaman detail berita utama berdasarkan slug
    public function show($slug)
    {
        $beritaUrl = Url::all();
        $beritaUtama = Berita::where('slug', $slug)->firstOrFail();
        $beritaLain = Berita::where('id', '!=', $beritaUtama->id)->get();
        return view('edit.berita.beritaselengkapnya', compact('beritaUtama', 'beritaLain',  'beritaUrl'));
    }
   public function editBeritaSelengkapnyaIndex()
    {
        $beritaUrl = Url::all();
        $beritaUtama = Berita::latest()->first();
        $beritaLain = Berita::where('id', '!=', $beritaUtama->id)->get();
        return view('edit.berita.editberitaselengkapnya', compact('beritaUtama', 'beritaLain', 'beritaUrl'));
    }

    // halaman detail berita utama berdasarkan slug
    public function editBeritaSelengkapnyaShow($slug)
    {
        $beritaUrl = Url::all();
        $beritaUtama = Berita::where('slug', $slug)->firstOrFail();
        $beritaLain = Berita::where('id', '!=', $beritaUtama->id)->get();
        return view('edit.berita.editberitaselengkapnya', compact('beritaUtama', 'beritaLain',  'beritaUrl'));
    }
    public function editBeritaSelengkapnya()
    {
        $beritaUrl = Url::all();
        $berita = Berita::all();
        return view('edit.berita.editberitaselengkapnya', compact('berita', 'beritaUrl'));
    }
    public function showEditBerita()
    {
         $beritaUrl = Url::all();
        $berita = Berita::all();
        return view('edit.berita.berita', compact('berita', 'beritaUrl'));
    }
    public function showEditBeritaurl()
    {
         $beritaUrl = Url::all();
        $berita = Berita::all();
        return view('edit.berita.beritaurl', compact('berita', 'beritaUrl'));
    }
    public function updateBerita(Request $request)
{
    // update konten berita
    if ($request->has('berita')) {
        $this->updateBeritaContent($request);
    }

    return redirect()->route('admin.index')->with('success', 'Berita berhasil diperbarui');
}

private function updateBeritaContent(Request $request)
{
    $beritas = $request->input('berita', []);

    foreach ($beritas as $index => $berita) {
        if (isset($berita['id'])) {
            // update data lama
            $item = Berita::find($berita['id']);
            if ($item) {
                $updateData = [
                    'judul' => $berita['judul'],
                    'isi'   => $berita['isi'],
                ];

                // cek apakah ada file gambar baru
                if ($request->hasFile("berita.$index.img")) {
                    $file = $request->file("berita.$index.img");
                    $filename = time() . '_' . $file->getClientOriginalName();
                    $file->move(public_path('assets/img/berita'), $filename);

                    // hapus file lama
                    if ($item->img && file_exists(public_path('assets/img/berita/' . $item->img))) {
                        unlink(public_path('assets/img/berita/' . $item->img));
                    }

                    $updateData['img'] = $filename;
                }

                $item->update($updateData);
            }
        } else {
            // insert data baru
            $newData = [
                'judul' => $berita['judul'],
                'isi'   => $berita['isi'],
            ];

            if ($request->hasFile("berita.$index.img")) {
                $file = $request->file("berita.$index.img");
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/img/berita'), $filename);
                $newData['img'] = $filename;
            }

            Berita::create($newData);
        }
    }

    // handle delete
    foreach ($request->input('deleteBerita', []) as $id) {
        $item = Berita::find($id);
        if ($item) {
            // hapus gambar juga
            if ($item->img && file_exists(public_path('assets/img/berita/' . $item->img))) {
                unlink(public_path('assets/img/berita/' . $item->img));
            }
            $item->delete();
        }
    }
}
    public function updateBeritaurl(Request $request)
{
    // update konten berita
    if ($request->has('beritaurl')) {
        $this->updateBeritaurlContent($request);
    }

    return redirect()->route('admin.index')->with('success', 'Berita berhasil diperbarui');
}

private function updateBeritaurlContent(Request $request)
{
    $beritaUrls = $request->input('beritaurl', []);

    foreach ($beritaUrls as $index => $beritaUrl) {
        if (isset($beritaUrl['id'])) {
            // update data lama
            $item = Url::find($beritaUrl['id']);
            if ($item) {
                $updateData = [
                    'judul' => $beritaUrl['judul'],
                    'isi'   => $beritaUrl['isi'],
                    'url'   => $beritaUrl['url'], // field tambahan
                ];

                // cek apakah ada file gambar baru
                if ($request->hasFile("beritaurl.$index.img")) {
                    $file = $request->file("beritaurl.$index.img");
                    $filename = time() . '_' . $file->getClientOriginalName();
                    $file->move(public_path('assets/img/berita'), $filename);

                    // hapus file lama
                    if ($item->img && file_exists(public_path('assets/img/berita/' . $item->img))) {
                        unlink(public_path('assets/img/berita/' . $item->img));
                    }

                    $updateData['img'] = $filename;
                }

                $item->update($updateData);
            }
        } else {
            // insert data baru
            $newData = [
                'judul' => $beritaUrl['judul'],
                'isi'   => $beritaUrl['isi'],
                'url'   => $beritaUrl['url'], // field tambahan
            ];

            if ($request->hasFile("beritaurl.$index.img")) {
                $file = $request->file("beritaurl.$index.img");
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/img/berita'), $filename);
                $newData['img'] = $filename;
            }

            Url::create($newData);
        }
    }

    // handle delete
    foreach ($request->input('deleteBeritaurl', []) as $id) {
        $item = Url::find($id);
        if ($item) {
            // hapus gambar juga
            if ($item->img && file_exists(public_path('assets/img/berita/' . $item->img))) {
                unlink(public_path('assets/img/berita/' . $item->img));
            }
            $item->delete();
        }
    }
}


// private function updateBeritasImg(Request $request)
// {
//     $beritas = $request->file('berita', []);

//     foreach ($beritas as $berita) {
//         if (isset($berita['id']) && isset($berita['img'])) {
//             $stat = Berita::find($berita['id']);
//             if ($stat && $berita['img'] instanceof \Illuminate\Http\UploadedFile) {
//                 $file = $berita['img'];
//                 $filename = time() . '_' . $file->getClientOriginalName();
//                 $file->move(public_path('assets/img/berita'), $filename);

//                 // hapus file lama
//                 if ($stat->img && file_exists(public_path('assets/img/berita/' . $stat->img))) {
//                     unlink(public_path('assets/img/berita/' . $stat->img));
//                 }

//                 $stat->update([
//                     'img' => $filename,
//                 ]);
//             }
//         }
//     }
// }


}
