# Angler
 
釣りが好きなため、釣果を共有できるような掲示板を作成しました。
 
***デモ***
 
https://test.iwamoto.tech/

<table>
 <tr>
  <th>トップページ</th>
 </tr> 
 <tr>
  <td><img src="/readme_img/top.png" widht="" height=""></td>
 </tr>
</table>

<table>
 <tr>
  <th>会員登録</th>
  <th>ログイン</th>
 </tr> 
 <tr>
  <td><img src="/readme_img/sighup.png" widht="" height=""></td>
  <td><img src="/readme_img/login.png" widht="" height=""></td>
 </tr>
</table>

<table>
 <tr>
  <th>投稿一覧ページ</th>
  <th>投稿詳細ページ</th>
 </tr> 
 <tr>
  <td><img src="/readme_img/timeline.png" widht="" height=""></td>
  <td><img src="/readme_img/post_detail.png" widht="" height=""></td>
 </tr>
</table>

<table>
 <tr>
  <th>エリアから検索ページ</th>
  <th>投稿ページ</th>
 </tr> 
 <tr>
  <td><img src="/readme_img/area.png" widht="" height=""></td>
  <td><img src="/readme_img/post.png" widht="" height=""></td>
 </tr>
</table>

<table>
 <tr>
  <th>マイページ</th>
 </tr> 
 <tr>
  <td><img src="/readme_img/mypage.png" widht="" height=""></td>
 </tr>
</table>

<table>
 <tr>
  <th>投稿編集ページ</th>
  <th>プロフィール編集ページ</th>
 </tr> 
 <tr>
  <td><img src="/readme_img/post_edit.png" widht="" height=""></td>
  <td><img src="/readme_img/user_edit.png" widht="" height=""></td>
 </tr>
</table>







## 機能

・会員登録<br>
・ログイン<br>
　　->投稿一覧ページ<br>
  　　　->投稿詳細ページ（コメント機能）<br>
　　->記事投稿ページ<br>
　　->マイページ<br>
  　　　->プロフィール編集ページ<br>
  　　　->投稿詳細ページ（コメント機能）<br>
　　　　->投稿編集ページ<br>
　　　　->投稿削除ページ<br>
    ->エリアから探す<br>
・エリアから探す<br>
  
 
## 環境設定
 
- apache
- PHP 7.2
- MYSQL(MariaDB)
- Laravel 6.4
 
 
## ダウンロード

- ダウンロード方法<br>
githubからダウンロードするかgit cloneしてください<br>
ダウンロード先：https://github.com/takuya1003/Angler.git<br>
git clone する場合<br>
```
git clone https://github.com/takuya1003/Angler.git
```
 
## データベース設計
- 会員テーブル<br>
テーブル名：users
<table>
 <tr>
  <th>columun</th>
  <th>type</th>
  <th>Null</th>
  <th>key</th>
  <th>default</th>
  <th>extra</th>
 </tr> 
 <tr>
  <td>id</td>
  <td>bigint</td>
  <td>No</td>
  <td>PRI</td>
  <td>None</td>
  <td>auto_increment</td>
 </tr>
 <tr>
  <td>name</td>
  <td>varchar</td>
  <td>No</td>
  <td></td>
  <td>None</td>
  <td></td>
 </tr>
 <tr>
  <td>fishing_history</td>
  <td>varchar</td>
  <td>Yes</td>
  <td></td>
  <td>Null</td>
  <td></td>
 </tr> 
 <tr>
  <td>fishing_method</td>
  <td>varchar</td>
  <td>Yes</td>
  <td></td>
  <td>Null</td>
  <td></td>
 </tr> 
 <tr>
  <td>email</td>
  <td>varchar</td>
  <td>No</td>
  <td>INDEX</td>
  <td>None</td>
  <td></td>
 </tr> 
 <tr>
  <td>password</td>
  <td>varchar</td>
  <td>No</td>
  <td></td>
  <td>None</td>
  <td></td>
 </tr> 
 <tr>
  <td>remember_token</td>
  <td>varchar</td>
  <td>Yes</td>
  <td></td>
  <td>Null</td>
  <td></td>
 </tr> 
  <tr>
  <td>created_at</td>
  <td>timestamp</td>
  <td>Yes</td>
  <td></td>
  <td>Null</td>
  <td></td> 
 </tr> 
 <tr>
  <td>updated_at</td>
  <td>timestamp</td>
  <td>Yes</td>
  <td></td>
  <td>Null</td>
  <td></td>
 </tr> 
</table>

- 投稿テーブル<br>
 テーブル名：posts
<table>
 <tr>
  <th>columun</th>
  <th>type</th>
  <th>Null</th>
  <th>key</th>
  <th>default</th>
  <th>Extra</th>
 </tr> 
 <tr>
  <td>id</td>
  <td>bigint</td>
  <td>No</td>
  <td>PRI</td>
  <td>None</td>
  <td>auto_increment</td>
 </tr>
 <tr>
  <td>user_id</td>
  <td>bigint</td>
  <td>No</td>
  <td>INDEX</td>
  <td>None</td>
  <td></td>
 </tr>
 <tr>
  <td>prefectures_id</td>
  <td>bigint</td>
  <td>No</td>
  <td>INDEX</td>
  <td>None</td>
  <td></td>
 </tr> 
 <tr>
  <td>port_name</td>
  <td>varchar</td>
  <td>Yes</td>
  <td></td>
  <td>Null</td>
  <td></td>
 </tr> 
 <tr>
  <td>content</td>
  <td>text</td>
  <td>Yes</td>
  <td></td>
  <td></td>
  <td></td>
 </tr> 
 <tr>
  <td>image_path</td>
  <td>text</td>
  <td>Yes</td>
  <td></td>
  <td></td>
  <td></td>
 </tr> 
 <tr>
  <td>public_id</td>
  <td>text</td>
  <td>Yes</td>
  <td></td>
  <td></td>
  <td></td>
 </tr> 
  <tr>
  <td>created_at</td>
  <td>timestamp</td>
  <td>Yes</td>
  <td></td>
  <td>Null</td>
  <td></td> 
 </tr> 
 <tr>
  <td>updated_at</td>
  <td>timestamp</td>
  <td>Yes</td>
  <td></td>
  <td>Null</td>
  <td></td>
 </tr> 
</table>

- 都道府県テーブル<br>
  テーブル名：prefectures
<table>
 <tr>
  <th>columun</th>
  <th>type</th>
  <th>Null</th>
  <th>key</th>
  <th>default</th>
  <th>extra</th>
 </tr> 
 <tr>
  <td>id</td>
  <td>bigint</td>
  <td>No</td>
  <td>PRI</td>
  <td>None</td>
  <td>auto_increment</td>
 </tr>
 <tr>
  <td>prefectures_name</td>
  <td>varchar</td>
  <td>No</td>
  <td></td>
  <td>None</td>
  <td></td>
 </tr>
</table>

- コメントテーブル<br>
テーブル名：comment
 <table>
 <tr>
  <th>columun</th>
  <th>type</th>
  <th>Null</th>
  <th>key</th>
  <th>default</th>
  <th>extra</th>
 </tr> 
 <tr>
  <td>id</td>
  <td>bigint</td>
  <td>No</td>
  <td>PRI</td>
  <td>None</td>
  <td>auto_increment</td>
 </tr>
 <tr>
  <td>user_id</td>
  <td>bigint</td>
  <td>No</td>
  <td>INDEX</td>
  <td>None</td>
  <td></td>
 </tr>
 <tr>
  <td>post_id</td>
  <td>bigint</td>
  <td>No</td>
  <td>INDEX</td>
  <td>None</td>
  <td></td>
 </tr> 
 <tr>
  <td>comment</td>
  <td>varchar</td>
  <td>Yes</td>
  <td></td>
  <td>Null</td>
  <td></td>
 </tr> 
  <tr>
  <td>created_at</td>
  <td>timestamp</td>
  <td>Yes</td>
  <td></td>
  <td>Null</td>
  <td></td> 
 </tr> 
 <tr>
  <td>updated_at</td>
  <td>timestamp</td>
  <td>Yes</td>
  <td></td>
  <td>Null</td>
  <td></td>
 </tr> 
</table>

 
 

