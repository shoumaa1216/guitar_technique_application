# アプリ名

ギターテクニック擬音検索アプリケーション
https://protected-fjord-30624.herokuapp.com/result


## デモ

![デモ１](https://user-images.githubusercontent.com/83636953/140125267-8289a5c1-148f-4151-a0ac-cfa15491655c.png)
![デモ2](https://user-images.githubusercontent.com/83636953/140125311-1485ccf4-60db-4406-8abd-bc7632f855ed.png)
![デモ3](https://user-images.githubusercontent.com/83636953/140125381-d4434af1-24d8-44be-a71c-3fb2568bb453.png)
![デモ4](https://user-images.githubusercontent.com/83636953/140125401-d0958c9f-de02-44d0-abfa-8e995fa86df7.png)
![デモ5](https://user-images.githubusercontent.com/83636953/140125437-50eebaad-bff3-460e-b134-9c5edfec779c.png)
![デモ6](https://user-images.githubusercontent.com/83636953/140125469-3e1a1838-548a-4dc9-8642-ef7a7f0b46e3.png)



## 使い方



1. 検索バーに自分の頭の中でなっている擬音を入力してギターテクニックを検索する
2. 擬音登録ページで実際にギターテクニックを聞き、自分が感じた擬音をサイトに登録する


## 環境

* laravel6
* cloud9


## 工夫した点
リレーショナルデータベースを用いて、擬音とテクニックを結び付けた。
登録ページでギターをやったことのない人のためにテクニックを動画を用意して、擬音を登録しやすいようにした。

## エラー
ギターの擬音を登録しようとするとエラーが起きてしまう。
herokuはPostgresデータベースで、laravel6はMySQLデータベースなのでデータベースの種類が違うのでエラーが起きてしまったようだ。
色々試みてみたが、エラーが解決できなかった。




## 文責



* 原将真
* shoumaa1216@gmail.com








