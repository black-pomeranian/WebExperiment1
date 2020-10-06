<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Unity WebGL Player | CardGameExperiment</title>
    <link rel="shortcut icon" href="TemplateData/favicon.ico">
    <link rel="stylesheet" href="TemplateData/style.css">
    <script src="TemplateData/UnityProgress.js"></script>
    <script src="Build/UnityLoader.js"></script>
    <script>
      var unityInstance = UnityLoader.instantiate("unityContainer", "Build/New folder.json", {onProgress: UnityProgress});
    </script>
    <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>


  </head>
  <body>
    <div class="webgl-content">
      <div id="unityContainer" style="width: 960px; height: 600px"></div>
      <div class="footer">
        <div class="webgl-logo"></div>
        <div class="fullscreen" onclick="unityInstance.SetFullscreen(1)"></div>
        <div class="title">CardGameExperiment</div>
      </div>
    </div>


    <!-- ここからJQuery -->
    <script>
    var data = 'Hello World！';
    $.ajax({
        type: "POST", //　POSTでも可
        url: "http://localhost/WebTest/index.php", //　送り先
        //data: { "data": data }, //　渡したいデータ
        data: data,
        dataType : "text", //　データ形式を指定
        scriptCharset: 'utf-8', //　文字コードを指定
    })
    .then(
        function( param ){　 //　paramに処理後のデータが入ってる
            console.log( param ); //　帰ってきたら実行する処理
        },
        function( XMLHttpRequest, textStatus, errorThrown ){
            console.log( errorThrown ); //　エラー表示
    });

    </script>

    <?php

      define("TESTFILE","./test.txt");

      //header('Content-type: application/json; charset=utf-8');

      $data = filter_input( INPUT_POST, 'データ' );

      $param = $data;	//　やりたい処理
      $s = $data;
      //print_r("file_put_tcontents関数\n");
      file_put_contents(TESTFILE,$s);
      var_dump(file_get_contents(TESTFILE));

      echo json_encode( $param ); //　JSON形式に変換してから返す
      //echo $param;
    ?>
  </body>
</html>
