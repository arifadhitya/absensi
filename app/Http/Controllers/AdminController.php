<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Dosen;

class AdminController extends Controller
{
	public function index(){
		return view('admin');
	}


	public function tambahDsosen(){
		return view ('tambah_dosen');			
	}

	public function simpan(Request $request){
		$this->validate($request,[
			'foto'=>'required',
			'nip'=>'required',
			'nama_dosen'=>'required',
			'kontak'=>'required',
			'email'=>'required',
			'password'=>'required',
		]);
		$file = $request->file('foto');
		$nama_foto=time()."_".$file->getClientOriginalName();
		$simpan_foto='simpan_foto';
		$file->move($simpan_foto,$nama_foto);
		Dosen::create([
			'foto'=> $nama_foto,
			'nip'=> $request->nip,
			'nama_dosen'=> $request->nama_dosen,
			'kontak'=> $request->kontak,
			'email'=> $request->email,
			'password'=> $request->password,
		]);
		return redirect('/admin/datadosen');
	}

	public function updateDosen($nip){
		$dosen = Dosen::find($nip);
		return view ('edit_dosen', ['dosen' => $dosen]);
	}

	public function update(Request $request, $nip){
		$this->validate($request,[
			'foto' => 'nullable|mimes:jpeg,bmp,png',
			'nip' => 'required',
			'nama_dosen' => 'required',
			'kontak' => 'required',
			'email' => 'required',
			'password' => 'required',
		]);

		$file = $request->file('foto');
		$nama_foto = time()."_".$file->getClientOriginalName();
		$simpan_foto = 'simpan_foto';
		$file->move($simpan_foto,$nama_foto);

		$dosen = Dosen::find($nip);
		$dosen->foto= $nama_foto;
		$dosen->nama_dosen= $request->nama_dosen;
		$dosen->kontak= $request->kontak;
		$dosen->email= $request->email;
		$dosen->password= $request->password;
		$dosen->save();
		return redirect ('/admin/datadosen');
	}

	public function hapusdosen($nip){
		$dosen=Dosen::find($nip);
		$dosen->delete();
		return redirect ('/admin/datadosen');
	}
}
