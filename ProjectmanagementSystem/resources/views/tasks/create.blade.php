@extends('layouts.app')
@section('content')
<body>
    <h1>Add Projects details</h1>
    <div class="conatiner">
        <form method="POST" action="{{route('projects.store')}}">
            @csrf
            <div class="form-control">
                <label>Name</label>
                <input type="text" name="name" placeholder="enter project name"><br><br>
</div>       
<div class="form-control">
                <label>Price</label>
                <input type="number" name="price" placeholder="enter project name"><br><br> 
</div>       
<div class="form-control">
                <label>due_date</label>
                <input type="date" name="due_date" placeholder="enter project due_date"><br><br>

</div>       
<div class="form-control">
                <label>Description</label>
                <textarea name="desc" placeholder="enter project description"></textarea><br><br>

</div> 
<div>
    <button type="submit" name="submit">Submit</button> 
</div>       
</div>
</body>
</html>