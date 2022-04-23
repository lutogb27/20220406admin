<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequest;
use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        $genders = Form::$genders;
        $forms = Form::all();

        return view('index', compact('genders'));
    }

    public function confirm(Request $request)
    {
        
        $this->validate($request, [
            'name' => ['required', 'string'],
            'kana' => ['required', 'string'],
            'age' => ['required', 'integer', 'between:1,99'],
            'gender' => ['required', 'string'],
            'address' => ['required', 'string'],
            'zipcode' => ['required', 'string'],
            'body' => ['required', 'string'],
        ], [
            'name.required' => ':attributeは必須です。',
            'kana.required' => ':attributeは必須です。',
            'age.required' => ':attributeは必須です。',
            'age.between' => ':attributeは:minから:maxまでです。',
            'gender.required' => ':attributeは必須です。',
            'address.required' => ':attributeは必須です。',
            'zipcode.required' => ':attributeは必須です。',
            'body.required' => ':attributeは必須です。',
        ], [
            'name' => '名前',
            'kana' => 'フリガナ',
            'age' => '年齢',
            'gender' => '性別',
            'address' => '郵便番号',
            'zipcode' => '住所',
            'body' => 'お問い合わせ内容',
        ]);
    // ここまで
 
    
    $myUser['name'] = $request->name;
    $myUser['kana'] = $request->kana;
    $myUser['age'] = $request->age;
    $myUser['gender'] = $request->gender;
    $myUser['address'] = $request->address;
    $myUser['zipcode'] = $request->zipcode;
    $myUser['kana'] = $request->kana;
    $myUser->save();
    return redirect('/myusers');
    

        $form = new Form($request->all());

        return view('confirm', compact('form'));
    }

    public function complete(Request $request)
    {
     // ※要バリデーション

        $action = $request->input('action', '戻る');
        // 二つ目は初期値です。

        $input = $request->except('action');
        // そして、入力内容からは取り除いておきます。

        if($action === 'submit') {

            // メール送信処理などを実装
            return view('complete');
        } else {

            // 戻る

            return redirect()  ->route('index')
            ->withInput($input);
    }

    // お問い合わせフォームへの入力内容を保持したモデルオブジェクトを用意
    $form = Form::make($request->all());

    Mail::to(メールの送信先)->send(new FormSent($form));

    // 略    

    return view('/index/complete');

    }

    function login(){
		return view("admin.admin_login");
	}
	
	function showadminlogin(Request $request){
		//入力内容をチェックする
		$user = $request->input("user");
		$password = $request->input("password");
		//ログイン成功
		if($user == "hogehoge" && $password == "fugafuga"){
			$request->session()->put("admin_auth", true);
			return redirect("/admin");
		}
		//ログイン失敗
		return redirect("admin/login")->withErrors([
			"error" => "ユーザーIDまたはパスワードが違います"
		]);
		
	}

    function logout(Request $request){
		$request->session()->forget("admin_auth");
		return redirect("admin");
	}

    function show(){
		return view("admin.admin_top");
	}

}
