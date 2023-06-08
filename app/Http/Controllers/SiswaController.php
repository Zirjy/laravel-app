<?php

namespace App\Http\Controllers;

use App\Http\Requests\SiswaRequest;
use App\Models\Siswa;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiswaController extends Controller
{
    public function __construct()
    {
        $this -> middleware('auth');
        $this -> middleware('verified');
    }
    
    public function index(Request $request) {
        $data1 = $this->siswa($request);
        $data2 = $this->waktu();

        return view('siswa.index', compact('data1', 'data2'));
    }

    private function siswa(Request $request){
        if ($request->search) {
            $siswa = Siswa::where( 'siswa', 'LIKE',
            "$request->search%")->get() ;
        }
            $siswa = Siswa::latest()->paginate(20);
            

            return $siswa;
    }

    private function waktu(){
    $waktuSekarang = Carbon::now()->timezone('Asia/Jakarta');
        
    return $waktuSekarang;
    }

    public function profile(){
        // Ambil data pengguna yang sedang terautentikasi
        $user = Auth::user();

        // Tampilkan halaman profil dengan data pengguna
        return view('Authentication.profile', compact('user'));
   }

    public function show($id) {
        $siswa = Siswa::find($id);
        return $siswa;
    }


    public function store(SiswaRequest $request) {


        Siswa::create([
            'nama_siswa' => $request->nama_siswa,
            'kelas' => $request->kelas,
            'keterangan' => $request->keterangan
            
        ]);
        return redirect('/siswas');
    }

    public function update(SiswaRequest $request,$id){
        $task = Siswa::find($id);
        $task->update([
            'nama_siswa' => $request->nama_siswa,
            'kelas' => $request->kelas,
            'keterangan' => $request->keterangan,
        ]);
        return redirect('/siswas');
    }

    public function edit($id){
        $siswa = Siswa::find($id);
        return view('Siswa.edit', compact('siswa'));
    }

    public function delete($id){
        $siswa = Siswa::find($id)->delete();
        return redirect('/siswas');
    }

    public function create(){
        return view('Siswa.create');
    }

    public function register(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required|in:Guru,Siswa',
        ]);

        // Buat pengguna baru
        $user = new User();
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->role = $request->input('role');
        $user->save();

        // Lakukan proses login
        Auth::login($user);

        // Redirect ke halaman yang sesuai setelah registrasi
        return redirect()->intended('/siswas');
    }

    
}
