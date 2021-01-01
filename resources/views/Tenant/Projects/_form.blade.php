<form method="POST" action="{{route('project.store')}}">

    @csrf

    <div class="form-group">
        <label for="project_name">Name</label>
        <input type="text" name="name" class="form-control" id="project_name">
    </div>

    <button type="submit" class="btn btn-sm btn-dark">Submit</button>
</form>

