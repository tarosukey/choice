@extends('layouts.app')

@section('title', 'TOP')

@include('layouts.header')

<div class="p-jumbotron">
    <img src="{{ asset('images/two_doors.jpg') }}" class="c-jumbotron__img">
    <div class="p-jumbotron__inner">
        <p class="c-jumbotron__text">あなたはどっち？</p>
        <div class="p-btn__area__double">
            <form method="GET" action="{{ route('register') }}" class="p-btn__area__top--regiter">
                @csrf
                <button type="submit" class="c-form__btn btn">
                    新規登録
                </button>
            </form>
            <form method="GET" action="{{ route('login') }}" class="p-btn__area__top--login">
                @csrf
                <button type="submit" class="c-form__btn btn">
                    ログイン
                </button>
            </form>
        </div>

        <div class="p-btn__area">
            <form method="GET" action="{{ route('login.guest') }}" class="p-btn__area__top--guest">
                @csrf
                <button type="submit" class="c-form__btn btn">
                    ゲストログイン
                </button>
            </form>
            <p class="c-jumbotron__note">※メールアドレスとパスワードを入力せずログインいただけます。</p>
        </div>
    </div>
</div>

@section('content')

<div class="p-main">
    <div class="p-top__body__section p-purpose">
        <h2 class="c-top__body__head">Docchiとは？</h2>
        <p class="c-top__body__head__sub">PURPOSE</p>
        <div class="c-top__body__text">
            Docchi(どっち)は、世の中の対になっている2つのものを比較するサービスです。<br>
            優劣をつけるものではなく、両者それぞれの良い点を知り、自分の知らない世界を知るきっかけに繋げます。
        </div>
    </div>

    <div class="p-top__body__section p-features">
        <h2 class="c-top__body__head">できること</h2>
        <p class="c-top__body__head__sub">FEATURES</p>
        <ul class="p-top__list">
            <li class="p-top__list__one">
                <div class="p-top__features__text">
                    <h3 class="c-top__features__head">1.テーマを探す</h3>
                    <div class="c-top__features__body">
                        テーマ一覧からタイトルのフリーワード検索ができます。<br>
                        また、テーマ内のタグをクリックすることで、<br>
                        そのタグが登録されている他のテーマの一覧を見ることができます。
                    </div>
                </div>
                <img src="{{ asset('images/search_theme.jpg') }}" class="c-top__features__img">
            </li>
            <li class="p-top__list__one">
                <div class="p-top__features__text">
                    <h3 class="c-top__features__head">2.テーマをブックマークする</h3>
                    <div class="c-top__features__body">
                        ログインすると、テーマをブックマークできます。<br>
                        ブックマークしたテーマはマイページのブックマーク一覧画面で確認でき、<br>
                        回答やコメントが気になるテーマはすぐに見れるので便利です。
                    </div>
                </div>
                <img src="{{ asset('images/bookmark_theme.jpg') }}" class="c-top__features__img">
            </li>
            <li class="p-top__list__one">
                <div class="p-top__features__text">
                    <h3 class="c-top__features__head">3.テーマに回答する</h3>
                    <div class="c-top__features__body">
                        自分が2択のどちらに当てはまるのか、選択し回答することができます。<br>
                        回答したテーマはコメントができるようになっています。<br>
                        ユーザーのコメントにより、両者の良い点を参考にすることができます。
                    </div>
                </div>
                <img src="{{ asset('images/answer_theme.jpg') }}" class="c-top__features__img">
            </li>
            <li class="p-top__list__one">
                <div class="p-top__features__text">
                    <h3 class="c-top__features__head">4.テーマを作る</h3>
                    <div class="c-top__features__body">
                        ログインすると、新しいテーマを作成できます。<br>
                        自分が気になる2択をテーマにし、回答を集計することが可能です。
                    </div>
                </div>
                <img src="{{ asset('images/create_theme.jpg') }}" class="c-top__features__img">
            </li>
        </ul>
    </div>
</div>

@endsection