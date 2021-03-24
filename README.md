# Docchi

## 概要
世の中にある2つの対になっているものをアンケートとして集計し、どちらの意見が多いかを比較するサービスです。
本アプリでは、1つ1つのアンケートをテーマと呼んでいます。

## URL
http://docchi.net<br>
トップページもしくはログインページのゲストログインボタンから、メールアドレスとパスワードの入力なしでかんたんにログインできます。
ゲストユーザーの場合、ユーザー情報の編集に一部制限がございます。

## 使用技術
フロントエンド<br>
・SCSS 1.20.1<br>
・Bootstrap 4.0.0<br>
・Vue.js 2.5.17<br>
<br>
バックエンド<br>
・PHP 7.4.3<br>
・Laravel 6.20.19<br>
<br>
開発環境<br>
・Git<br>
・Docker<br>
<br>
本番環境<br>
・Nginx<br>
・MySQL<br>
・AWS(VPC, EC2, RDS, S3, Route53, CloudFront)<br>
<br>
## 機能一覧
<ユーザー><br>
ログイン/ログアウト<br>
ユーザー登録<br>
プロフィール編集<br>
パスワード編集<br>
パスワードリマインダー<br>
退会<br>
<br>
<テーマ><br>
テーマ作成/編集/削除/回答<br>
ブックマーク<br>
コメント投稿<br>
並び替え(新着, 回答数, コメント数, ブックマーク数)<br>
ページネーション<br>
フリーワード検索<br>
タグ検索<br>
<br>
<その他><br>
画像プレビュー<br>
お問い合わせ<br>
Google連携(ユーザー登録/ログイン)<br>
レスポンシブ対応<br>
<br>
## インフラ構成図
<img src="public/images/aws_infra.png">

## ER図
<img src="public/images/er_diagram.png">
