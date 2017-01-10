# comic
You can read comics.

##Usage
- `git clone https://github.com/ngo275/comic.git ~/comic`

- `php -S localhost:8000 -t ~/comic`

- access [localhost:8000](http://localhost:8000)

##Comics
Default setting displays "進撃の巨人", if you want change the comic please edit `comic_id` in `index.php`.
And if you edit `story_id` in `index.php`, you can read other stories of the comic. 

ex) comic_id

- 297: 進撃の巨人(latest story_id is 88(2017/1/9))

- 325: 嘘喰い(latest story_id is 453)  If you input `VOLUME_30` instead of an integer in `story_id`, you can read comic #30.

- 905: テラフォーマーズ(latest story_id is 173)


![image](https://s3-ap-northeast-1.amazonaws.com/ngo275.asset/Pic/comicimage.png)
