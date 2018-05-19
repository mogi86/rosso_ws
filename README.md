# rosso_ws
docker-laravel-apache


# ディレクトリ構成説明

```
例）
|-docker : docker関連のファイルを格納
| |-db : DBのコンテナ作成用
| |-web : アプリのコンテナ作成用
|
|-rosso_ws : Laravelのソースコード
|-docker-compose.yml
```

# アプリ構築手順

## git clone

```
$ git clone https://github.com/mogi86/rosso_ws.git
```

## docer-compose

- ホストPCで実行

```
$ cd /path/to/rosso_ws
$ docker-compose build
$ docker-compose up -d
```

## laravel setup


- ホストPCからrosso_ws_webコンテナ内へ入る

```
$ cd /path/to/rosso_ws
$ docker exec -it rosso_ws_web /bin/bash
```

- rosso_ws_webコンテナ内で実行

```
$ cd /var/www/rosso_ws
$ cp .env.example .env
$ composer install
$ php artisan key:generate
$ php artisan cache:clear
$ php artisan migrate
```

## apache restart

- ホストPCからrosso_ws_webコンテナ内へ入る

```
$ cd /path/to/rosso_ws
$ docker exec -it rosso_ws_web /bin/bash
```

- rosso_ws_webコンテナ内で実行

```
$ service httpd restart
```

Laravelのセットアップ手順含め、
ansibleでやっていただきたいことをまとめました。

また、ローカルでdockerを使いながらローカル環境構築したので、
そのソースをgithubにあげています。
https://github.com/mogi86/rosso_ws

docker-composeでビルドする際にApache・MySQL等のミドルウェアを入れるようになっています。
コンテナ作成後に、READMEに記載されている手順でLaravelのセットアップをして画面表示されます。
playbook作成する際の参考になればと思います。

課題としてはデプロイ方法を決めないとですね。
ansibleでgit cloneするか、
小田島さんやられてたみたいに圧縮ファイルを配布・展開とかですかね。
