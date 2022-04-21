window.addEventListener('DOMContentLoaded', () => {

    // 「送信」ボタンの要素を取得
    const submit = document.querySelector('.submit');
    
    // 「送信」ボタンの要素にクリックイベントを設定する
    submit.addEventListener('click', (e) => {
        // デフォルトアクションをキャンセル
        e.preventDefault();

        // 「お名前」入力欄の空欄チェック
        // フォームの要素を取得
        const name = document.querySelector('#name');
        // エラーメッセージを表示させる要素を取得
        const errMsgName = document.querySelector('.err-msg-name');
        if(!name.value){
            // クラスを追加(エラーメッセージを表示する)
            errMsgName.classList.add('form-invalid');
            // エラーメッセージのテキスト
            errMsgName.textContent = 'お名前が入力されていません';
            // クラスを追加(フォームの枠線を赤くする)
            name.classList.add('input-invalid');
            // 後続の処理を止める
            return;
        }else{
            // エラーメッセージのテキストに空文字を代入
            errMsgName.textContent ='';
            // クラスを削除
            name.classList.remove('input-invalid');
        }

        const kana = document.querySelector('#kana');
        const errMsgKana = document.querySelector('.err-msg-kana');
        if(!kana.value){
            errMsgKana.classList.add('form-invalid');ト
            errMsgKana.textContent = 'フリガナが入力されていません';
            kana.classList.add('input-invalid');
            return;
        }else{
            errMsgKana.textContent ='';
            kana.classList.remove('input-invalid');
        }

       // 「年齢」入力欄の形式チェック
        const age = document.querySelector('#age');
        const errMsgAge = document.querySelector('.err-msg-age');
        // 年齢が2文字以上の半角英数字であるかどうかのチェック
        if(!age.value.match(/^([a-zA-Z0-9]{2})$/)){
            errMsgAge.classList.add('form-invalid');
            errMsgAge.textContent = '半角英数字2文字で入力してください';
            age.classList.add('input-invalid');
            return;
        }else{
            errMsgAge.textContent ='';
            age.classList.remove('input-invalid');
        }

        const gender = document.querySelector('#gender');
        const errMsgGender = document.querySelector('.err-msg-gender');
        if(!gender.value){
            errMsgGender.classList.add('form-invalid');ト
            errMsgGender.textContent = '性別が入力されていません';
            gender.classList.add('input-invalid');
            return;
        }else{
            errMsgGender.textContent ='';
            gender.classList.remove('input-invalid');
        }

        const zipcode = document.querySelector('#zipcode');
        const errMsgZipcode = document.querySelector('.err-msg-zipcode');
        if(!zipcode.value.match(/^([a-zA-Z0-9]{7})$/)){
            errMsgZipcode.classList.add('form-invalid');
            errMsgZipcode.textContent = '半角英数字7文字で入力してください';
            zipcode.classList.add('input-invalid');
            return;
        }else{
            errMsgZipcode.textContent ='';
            zipcode.classList.remove('input-invalid');
        }

        const address = document.querySelector('#address');
        const errMsgAddress = document.querySelector('.err-msg-address');
        if(!address.value){
            errMsgAddress.classList.add('form-invalid');ト
            errMsgAddress.textContent = '住所が入力されていません';
            address.classList.add('input-invalid');
            return;
        }else{
            errMsgAddress.textContent ='';
            address.classList.remove('input-invalid');
        }

        const body = document.querySelector('#body');
        const errMsgBody = document.querySelector('.err-msg-body');
        if(!body.value){
            errMsgBody.classList.add('form-invalid');ト
            errMsgBody.textContent = 'お問い合わせ内容が入力されていません';
            body.classList.add('input-invalid');
            return;
        }else{
            errMsgBody.textContent ='';
            body.classList.remove('input-invalid');
        }
    }, false);
}, false);