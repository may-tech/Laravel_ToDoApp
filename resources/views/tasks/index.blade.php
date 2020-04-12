<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ToDo App</title>
  <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
<header>
  <nav class="my-navbar">
    <a class="my-navbar-brand" href="/">ToDo App</a>
  </nav>
</header>
<main>
  <div class="container">
    <div class="row">
      <div class="col col-md-4">
        <nav class="panel panel-default">
          <div class="panel-heading">フォルダ</div>
          <div class="panel-body">
            <a href="#" class="btn btn-default btn-block">
              フォルダを追加する
            </a>
          </div>
          <div class="list-group">
            @foreach($folders as $folder)
            <!-- route 関数の第一引数はルート名.
            ルーティングの際に get メソッドに続けて呼び出した name メソッドの引数がそのルートの名前.
            route 関数の第二引数として渡している配列は、ルート URL のうち変数になっている部分（ここでは {id}）に実際の値を埋める役割. -->
              <a href="{{ route('tasks.index', ['id' => $folder->id]) }}" class="list-group-item">
              <!-- コントローラーから渡されたデータ $folders を参照.
              タイトルの表示 {{ $folder->title }} 
              $folders にすべてのフォルダのデータが入っているので、foreach でループした一つのアイテムである $folder はフォルダテーブルの一行に相当すると考えられます。カラムの値は ->title と、プロパティのように参照することができます。 -->
                {{ $folder->title }}
              </a>
            @endforeach
          </div>
        </nav>
      </div>
      <div class="column col-md-8">
        <!-- ここにタスクが表示される -->
      </div>
    </div>
  </div>
</main>
</body>
</html>