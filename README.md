# creatures_dictionary
2021.02.19 『いきもの図鑑』  
 : 簡易な生物図鑑のwebアプリ  


## 使用技術

## 製作目的
- オブジェクト指向の知識定着を目的として作成。
  
## Class構成
|親|子|孫|
|--|--|--|
|Creature|Mammalian(哺乳類)|Cat|
||〃|(Canidae(イヌ科)) |
||〃|Bovidae(ウシ科)|
|〃|Bird||
|〃|(Reptile(爬虫類))||
|〃|(Fish)||
|〃|Insect||
- ()付きのクラスは親クラスから変更がないクラスだが、今後の保守性という観点からtypeごとにクラスを作成（継承）することとする。

## 学んだこと
- includeとrequireの違いは、(include)警告の上処理を継続するか、(require)停止するか、の違い。