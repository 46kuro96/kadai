@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>Contact</h2>
    </div>
    <form class="form" action="/contacts/confirm" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お名前</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--name">
                    <input type="text" name="last_name" placeholder="例 山田" value="{{ old('last_name') }}" />
                    <input type="text" name="first_name" placeholder="例 太郎" value="{{ old('first_name') }}" />
                </div>
                <div class="form__error">
                    @error('last_name')
                    {{ $message }}
                    @enderror
                </div>
                <div class="form__error">
                    @error('first_name')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">性別</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--gender">
                    <label class="custom-radio">
                        <input type="radio" name="gender" value="1" {{ old('gender') == '1' ? 'checked' : '' }} checked/>
                        <span class="radio-style"></span>
                        男性
                    </label>
                    <label class="custom-radio">
                        <input type="radio" name="gender" value="2" {{ old('gender') == '2' ? 'checked' : '' }}/>
                        <span class="radio-style"></span>
                        女性
                    </label>
                    <label class="custom-radio">
                        <input type="radio" name="gender" value="3" {{ old('gender') == '3' ? 'checked' : '' }}/>
                        <span class="radio-style"></span>
                        その他
                    </label>
                </div>
                <div class="form__error">
                    @error('gender')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">メールアドレス</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--email">
                    <input type="email" name="email" placeholder="例 test@example.com" value="{{ old('email') }}" />
                </div>
                <div class="form__error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">電話番号</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--tel">
                    <label>
                        <input type="tel" name="tel1" placeholder="080" value="{{ old('tel1') }}" /> -
                        <input type="tel" name="tel2" placeholder="1234" value="{{ old('tel2') }}"/> -
                        <input type="tel" name="tel3" placeholder="5678" value="{{ old('tel3') }}"/>
                    </label>
                </div>
                <div class="form__error">
                    @error('tel1')
                    {{ $message }}
                    @enderror
                    @error('tel2')
                    {{ $message }}
                    @enderror
                    @error('tel3')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label-item">住所</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--address">
                    <input type="text" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}"/>
                </div>
                <div class="form__error">
                    @error('address')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">建物名</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--building">
                    <input type="text" name="building" placeholder="例: 千駄ヶ谷マンション101" value="{{ old('building') }}"/>
                </div>
                <div class="form__error">
                    @error('gender')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label-item">お問合せの種類</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--select">
                    <select name="category_id">
                        <option value="" selected>選択して下さい</option>
                        <option value="1" {{ old('category_id') == 1 ? 'selected' : '' }}>商品のお届けについて</option>
                        <option value="2" {{ old('category_id') == 2 ? 'selected' : '' }}>商品の交換について</option>
                        <option value="3" {{ old('category_id') == 3 ? 'selected' : '' }}>商品トラブル</option>
                        <option value="4" {{ old('category_id') == 4 ? 'selected' : '' }}>ショップへのお問い合わせ</option>
                        <option value="5" {{ old('category_id') == 5 ? 'selected' : '' }}>その他</option>
                    </select>
                </div>
                <div class="form__error">
                    @error('category_id')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問合せ内容</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--textarea">
                    <textarea name="detail" placeholder="お問合せ内容をご記載ください" ></textarea>
                </div>
                <div class="form__error">
                    @error('detail')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">確認画面</button>
        </div>
    </form>
</div>
@endsection