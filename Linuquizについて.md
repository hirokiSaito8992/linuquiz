# Linuquizの概要

## Linuquizとは何か

### Linux認定技術者試験の試験問題をユーザ同士で作成し、問題を解いて理解を深めることを目的としています。また、作成者側も問題作成を通して理解を深めてもらうことを目的としています。
<br>

### [![ログイン画面](https://user-images.githubusercontent.com/74811473/161796660-a888afa1-9f23-4e65-8ffa-37bdd6bb81c9.png)](https://linuquiz.link)

<br>

# 使用技術

* ### PHP 7.4.27
* ### Laravel 6.20.44
* ### Javascript(Jquery)
* ### MySQL
* ### Apache
* ### AWS
  * ### LightSail
  * ### S3
  * ### Route53

<br>

# Linuquiz ER図

### ![LinuQuizのER図](https://user-images.githubusercontent.com/74811473/161803775-3a832e67-0a75-4fb1-9ebd-f62eeba46a9b.png)


<br>

# AWS構成図
### ![Linuquiz構成図](https://user-images.githubusercontent.com/74811473/161803529-4fc03e55-4adb-4494-a4db-c5b50f48b514.png)


<br>

# 機能一覧

* ### ユーザ登録、ログイン機能(LaravelAuth)
* ### 問題投稿機能
* ### 試験科目選択画面(Ajax)
* ### 問題回答画面(javascript,jquery)
* ### 回答結果画面(Chart.js)

<br>

# 改善できる点について

## 機能面ついて

* ### 問題の解説機能
  * #### 今回linuquizについて、問題回答後に解説を設けていません。解答に関するテーブルを追加するかquestionsテーブルに解説カラムを追加すれば実現できると思っています。

<br>

## 開発品質について(学習中)

* ### テストコードの記述
  * #### テストコード記述によって、デバック項目の漏れ軽減などが考えられます。
  * #### デバック自動化を導入することができる(CircleCI,Jenkins)

## インフラ面について(学習中)
* ### Dockerで構築によるミドルウェアのバージョンの統一
  * #### DockerfileやDockerImageの作成を意識することで、開発環境の共有が簡単になる
  * #### KubernetesやECSによってコンテナ自体で本番環境をデプロイすることができる
