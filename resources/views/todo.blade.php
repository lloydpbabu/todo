<html>
<body>
<form method="post" action="/todo">
        
    
        Enter the task: <input type="text" name="task"/><br>
        Enter the description:<input type="text" name="desc"/><br>
        <a href="/todo/save">submit</a>
            {{csrf_field()}}
            </form>
            <a href="/view">View</a>
</body>
</html>