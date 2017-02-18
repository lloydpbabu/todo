<html>
<body><table>
@if(isset($todos))
<table>
<tr>
<td>Id</td>
<td>Task</td>
<td>Description</td>
</tr>
@foreach($todos as $todo)
<tr>
<td>{{$todo->id}}</td>
<td>{{$todo->task}}</td>
<td>{{$todo->desc}}</td>
<td><a href="/edit/{{$todo->id}}">edit/{{$todo->id}}</td>
</tr>
@endforeach
</table>
@endif
</table>
</body>
</html>