# laravel-memo-app

Laravel で作成した、メモ（Task）管理用の CRUD アプリケーションです。  
会員登録・ログイン後、自分のメモだけを作成・閲覧・編集・削除できます。

Rails での Web アプリ開発経験を活かし、Eloquent / Blade / 認証 / バリデーションなど、Laravel の基本構成を一通り実装しました。

## デモ

本番環境（AWS）: [http://18.179.96.132:8080](http://18.179.96.132:8080)

### 試し方

1. [ログイン画面](http://18.179.96.132:8080/login) を開く  
2. 下記のデモ用アカウントでログインする  
3. [タスク一覧](http://18.179.96.132:8080/tasks) から作成・編集・削除を確認できる  

| 項目 | 値 |
|---|---|
| Email | `test1@test.com` |
| Password | `test1234` |

※ 学習用デモです。HTTP・IP直指定・ポート8080で公開しています。  
※ デモ用アカウントのため、データは変更・削除されることがあります。  
※ 新規登録して自分用アカウントで試すこともできます。

ローカル起動:

```text
http://127.0.0.1:8000
```

## 機能

- ユーザー登録 / ログイン / ログアウト（Laravel Breeze）
- メモの一覧・作成・詳細・編集・削除（CRUD）
- ログイン必須（未ログイン時はログイン画面へ）
- ユーザーごとのデータ分離（`user_id` による紐づけ）
- バリデーション（必須・文字数など）と日本語エラーメッセージ
- 操作後のフラッシュメッセージ（作成・更新・削除）
- Blade + Tailwind CSS（Breeze）による画面整備

## 使用技術

| 区分 | 技術 |
|---|---|
| 言語 | PHP 8.4 |
| フレームワーク | Laravel 13 |
| 認証 | Laravel Breeze（Blade） |
| DB | SQLite（開発・本番デモ） |
| フロント | Blade / Tailwind CSS / Vite |
| その他 | Eloquent ORM / Migration / 日本語ロケール |
| インフラ | AWS EC2 / Nginx / PHP-FPM |

## 画面構成

| 画面 | 説明 |
|---|---|
| `/register` `/login` | 会員登録・ログイン |
| `/tasks` | メモ一覧 |
| `/tasks/create` | 新規作成 |
| `/tasks/{id}` | 詳細・削除 |
| `/tasks/{id}/edit` | 編集 |

## セットアップ

### 必要環境

- PHP 8.4+
- Composer
- Node.js 20+ / npm

### 手順

```bash
# リポジトリをクローン
git clone https://github.com/urakawakazuo0301/laravel-memo-app.git
cd laravel-memo-app

# PHP依存関係
composer install

# 環境ファイル
cp .env.example .env
php artisan key:generate

# DB（SQLite）
touch database/database.sqlite
php artisan migrate

# フロント
npm install
npm run build

# 起動
php artisan serve
```

ブラウザで [http://127.0.0.1:8000](http://127.0.0.1:8000) を開き、登録後に利用できます。

開発中に CSS を都度反映したい場合:

```bash
npm run dev
```

## 学習・実装で意識した点

- Resource Controller / `Route::resource` による CRUD の整理
- Eloquent の関連（`User hasMany Task` / `Task belongsTo User`）
- `$fillable` とバリデーションによる入力制御
- `auth` ミドルウェアと「自分のレコードだけ操作できる」認可の基本
- Migration によるスキーマ管理
- Blade コンポーネントとレイアウトの共通化
- バリデーションメッセージの日本語化（`lang/ja/validation.php`）
- AWS EC2 へのデプロイ（既存サーバーへの同居・ポート分離）

## 今後の展望

- 検索・ページネーション
- テストコード（Feature Test）の追加
- ポリシー（Policy）による認可の整理

## ライセンス

学習・ポートフォリオ用途の個人プロジェクトです。