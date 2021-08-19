<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function upload(request $request)
    {
        $res = $request->file(["fotoprofile"])->store('apiDocs');
        return ["result" => $res];
    }

    public function login(request $request)
    {
        //$user = User::where("email","=", $request->email);
        $message = "";
        $isSuccess = false;

        $password = DB::table('users')->where('email', $request->input('email'))->value('password');
        $passwordRequest = md5($request->input('password'));
        if ($passwordRequest == $password) {
            $isSuccess = true;
            $message = "Login Success";
            $user = DB::table('users')
                ->where('email', '=', $request->input('email'))
                ->get();

            $json = response()->json([
                'isSuccess' => $isSuccess,
                'message' => $message,
                'data' => $user[0]
            ]);
            return $json;
        } else {
            $isSuccess = false;
            $message = "Email or Password is Invalid";
            $json = response()->json([
                'isSuccess' => $isSuccess,
                'message' => $message,
            ]);
            return $json;
        }
    }

    public function index()
    {
        return response()->json(['data' => User::all()]);
    }

    public function create(request $request)
    {
        $namawebsite = "http://10.0.2.2/tataniaga/storage/app/";
        if(!$request->id == null){
            $user = User::find($request->id);
            $fileTemp = $user->fotoProfil;

            $store = $namawebsite . $request->file(['path'])->store('ProfilePictureDocs');
            $user->fotoProfil = $store;
            $user->save();
    
            $fileTemp = substr($fileTemp, 57);
            $path = '../storage/app/ProfilePictureDocs/';
            File::delete($path.$fileTemp);
            //Storage::disk('public')->delete($fileTemp);

            $isSuccess = true;
            $message = "data updated";
            $json = response()->json([
                'isSuccessful' => $isSuccess,
                'message' => $message,
                'path' => $store
            ]);
            return $json;
        }else{
            $user = new User;
            $user->f_name = $request->f_name;
            $user->l_name = $request->l_name;
            $user->nik = $request->nik;
            $user->nip = $request->nip;
            $user->kota = $request->kota;
            $user->address = $request->address;
            $user->agama = $request->agama;
            $user->birthDate = $request->birthDate;
            $user->phoneNumber = $request->phoneNumber;
            $user->email = $request->email;
            $user->gender = $request->gender;
            if(!$request->fotoProfil == null){
                $store = $namawebsite . $request->file(['path'])->store('ProfilePictureDocs');
                $user->fotoProfil = $store;
                
            }
            $user->fotoKTP = $request->fotoKTP;
            $user->nomorRekening = $request->nomorRekening;
            $user->status = $request->status;
            $user->blacklistReason = $request->blacklistReason;
            $user->id_leader = $request->id_leader;
            $user->id_role = $request->id_role;
            $user->id_marital_status = $request->id_marital_status;
            $user->id_tarif_pajak_penghasilan = $request->id_tarif_pajak_penghasilan;
            $user->id_employee_groups = $request->id_employee_groups;
            $user->id_position = $request->id_position;
            $user->id_perusahaan = $request->id_perusahaan;
            $user->password = md5($request->password);
    
            $user->save();
            return "data saved";
        }
    }

    public function update(request $request, $id)
    {
        $user = User::find($id);

        if (!$request->email == null){ $user->email = $request->email; }
        if (!$request->password == null){ $user->password = $request->password; }
        if (!$request->f_name == null){ $user->f_name = $request->f_name; }
        if (!$request->l_name == null){ $user->l_name = $request->l_name; }
        if (!$request->gender == null){ $user->gender = $request->gender; }
        if (!$request->agama == null){ $user->agama = $request->agama; }

        if (!$request->phoneNumber == null){ $user->phoneNumber = $request->phoneNumber; }
        if (!$request->kota == null){ $user->kota = $request->kota; }
        if (!$request->address == null){ $user->address = $request->address; }

        if (!$request->nik == null){ $user->nik = $request->nik; }
        if (!$request->nip == null){ $user->nip = $request->nip; }

        if (!$request->birthDate == null){ $user->birthDate = $request->birthDate; }
        if (!$request->fotoKTP == null){ $user->fotoKTP = $request->fotoKTP; }
        if (!$request->nomorRekening == null){ $user->nomorRekening = $request->nomorRekening; }
        if (!$request->status == null){ $user->status = $request->status; }
        if (!$request->blacklistReason == null){ $user->blacklistReason = $request->blacklistReason; }
        if (!$request->id_leader == null){ $user->id_leader = $request->id_leader; }
        if (!$request->id_role == null){ $user->id_role = $request->id_role; }
        if (!$request->id_marital_status == null){ $user->id_marital_status = $request->id_marital_status; }
        if (!$request->id_tarif_pajak_penghasilan == null){ $user->id_tarif_pajak_penghasilan = $request->id_tarif_pajak_penghasilan; }
        if (!$request->id_employee_groups == null){ $user->id_employee_groups = $request->id_employee_groups; }
        if (!$request->id_position == null){ $user->id_position = $request->id_position; }
        if (!$request->id_perusahaan == null){ $user->id_perusahaan = $request->id_perusahaan; }

        $user->save();

        $isSuccess = true;
        $message = "data updated";
        $json = response()->json([
            'isSuccessful' => $isSuccess,
            'message' => $message,
        ]);
        return $json;
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();

        return "data deleted";
    }
}
