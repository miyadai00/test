<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>4eachblog 掲示板</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <?php
    
    mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=lesson1;host=localhost;","root","");
    $stmt = $pdo->query("select*from 4each_keijiban");
    

   
    
    ?>

        <img src="4eachblog_logo.jpg"class="logo"width="300px">
    
        <header>
            <ul>
                <li>トップ</li>
                <li>プロフィール</li>
                <li>4eachについて</li>
                <li>登録フォーム</li>                
                <li>問い合わせ</li>
                <li>その他</li>
            </ul>
        </header>
        
        <div class="main-box">
           
      
              
            
            
            <div class="leftside">
            
            
            <h1>プログラミングに役立つ掲示板</h1>  
        
             
             <div class="main">
                 
                <form method="post" action="insert.php">
                 
                    <h3>入力フォーム</h3>
                    
                    <div>
                        <label>ハンドルネーム</label> 
                        <br>
                        <input type = "text" class = "text" size = "35" name = "handlename">
                    </div>
                    
                    <div>
                        <label>タイトル</label>
                        <br>
                        <input type = "text" class = "text" size = "35" name = "title">
                    </div>
                    
                    <div>
                        <label>コメント</label>
                        <br>
                        <textarea cols = "60" rows = "6" name="comments"></textarea>
                    </div>
                    
                    <div>
                         <input type = "submit" class = "submit" value = "投稿する">
                    </div>
                </form>
            　</div>
            <!--　左サイドフォーム部分ここまで　-->
            
            <!-- 左サイドのタイトル部分ここから -->
            <div class="box">
                
            <?php
                
            while($row = $stmt->fetch()){
                
            echo"<div class='box1'>";
            echo"<h3>".$row['title']."</h3>";
            echo"<div class='contents'>";
            echo $row['comments'];
            echo"<div class='handlename'>posted by ".$row['handlename']."</div>";
            echo"</div>";
            echo"</div>";
            }
            ?>
            
              
            </div>
            
            
            
            </div>
            
            
            
            
          
            
            
            
            
            
            
            
         
    <div class="rightside">　
		<h3>人気の記事</h3>
		<ul>
			<li>PHPオススメ本</li>
			<li>PHP　MyAdminの使い方</li>
			<li>いま人気のエディタTop5</li>
			<li>HTMLの基礎</li>
		</ul>

		<h3>オススメリンク</h3>
		<ul>
			<li>インターノウス株式会社</li>
			<li>XAMPPのダウンロード</li>
			<li>Eclipseのダウンロード</li>
			<li>Braketsのダウンロード</li>
		</ul>

		<h3>カテゴリ</h3>
		<ul>
			<li>HTML</li>
			<li>PHP</li>
			<li>MySQL</li>
			<li>JavaScript</li>
		</ul>
    </div>
            
            
        </div>
        
        
        
        <footer>
 	      copyright internous | 4each blog is the one which provides A to Z about programming.
        </footer>



        

            
            
            
      
    </body>
    
</html>