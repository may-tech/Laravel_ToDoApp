@extends('layout')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col col-md-4">
        <nav class="panel panel-default">
          <div class="panel-heading">フォルダ</div>
          <div class="panel-body">
            <a href="{{ route('folders.create') }}" class="btn btn-default btn-block">
              フォルダを追加する
            </a>
          </div>
          <div class="list-group">
            @foreach($folders as $folder)
            <!-- route 関数の第一引数はルート名.
            ルーティングの際に get メソッドに続けて呼び出した name メソッドの引数がそのルートの名前.
            route 関数の第二引数として渡している配列は、ルート URL のうち変数になっている部分（ここでは {id}）に実際の値を埋める役割. -->
              <a href="{{ route('tasks.index', ['id' => $folder->id]) }}" class="list-group-item {{ $current_folder_id === $folder->id ? 'active' : '' }}">
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
        <div class="panel panel-default">
          <div class="panel-heading">タスク</div>
          <div class="panel-body">
            <div class="text-right">
            <a href="{{ route('tasks.create', ['id' => $current_folder_id]) }}" class="btn btn-default btn-block">
                タスクを追加する
              </a>
            </div>
          </div>
          <table class="table">
            <thead>
            <tr>
              <th>タイトル</th>
              <th>状態</th>
              <th>期限</th>
              <th></th>
            </tr>
            </thead>
            <tbody>
              @foreach($tasks as $task)
                <tr>
                  <td>{{ $task->title }}</td>
                  <td>
                    <span class="label {{ $task->status_class }}">{{ $task->status_label }}</span>
                  </td>
                  <td>{{ $task->formatted_due_date }}</td>
                  <td><a href="#">編集</a></td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection