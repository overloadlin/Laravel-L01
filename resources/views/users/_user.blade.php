<script>
  function sumbit_sure() {
    var comfirm = confirm("确定要删除该用户?");
    if (comfirm == true) {
      return true;
    } else {
      return false;
    }
  } 
</script>

<div class="list-group-item">
  <img class="mr-3" src="{{ $user->gravatar() }}" alt="{{ $user->name }}" width=32>
  <a href="{{ route('users.show', $user) }}">
    {{ $user->name }}
  </a>
  @can('destroy', $user)
    <form action="{{ route('users.destroy', $user->id) }}" method="post" class="float-right" onsubmit="return sumbit_sure()">
      {{ csrf_field() }}
      {{ method_field('DELETE') }}
      <button type="submit" class="btn btn-sm btn-danger delete-btn">删除</button>
    </form>
  @endcan
</div>