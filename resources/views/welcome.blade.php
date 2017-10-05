
<ul>
  @foreach ($tasks as $task)
  <a href="task/{{$task->id}}">
  <li>{{$task->body}}</li>
  </a>
  @endforeach
</ul>
