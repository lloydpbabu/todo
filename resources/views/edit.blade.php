<html>
<body>
<form method='post' action='/update'>
task: <input type="text" name="task" value="{{$todo->task}}"/><br>
        description:<input type="text" name="desc" value="{{$todo->desc}}"/><br>
        <input type="hidden" name="id" value="{{$todo->id}}">
        <input type="submit" name="submit" value="Submit"/>
</form>
</body>
</html>