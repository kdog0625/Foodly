エラーメッセージの有無を返します。 -->
@if ($errors->any())
  <div class="card-text text-left alert alert-danger">
    <ul class="mb-0">
      エラーメッセージが1件以上ある場合は、MessageBagクラスのallメソッドで全エラーメッセージの配列を取得し、@foreachで繰り返し表示を行なう
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

