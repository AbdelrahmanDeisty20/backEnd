<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
        <a href="/show" class="navbar-brand">Home</a>

        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

        <a href="/create" class="btn btn-primary"> add embloyee</a>
    </div>
</nav>
<br>
<h1 style="text-align: center; color:black">EMPLOYEES TABLE</h1>
<br>

<div class="container">
    <table width="100%" border="2" style="text-align: center;" class="table">
        <th>ID</th>
        <th>FIRST NAME</th>
        <th>SECOND NAME</th>
        <th>AGE</th>
        <th>SALARY</th>
        <th>UP/DEL</th>
        @foreach($data as $d)
        <tr>
            <td>{{$d->id}}</td>
            <td>{{$d->firstName}}</td>
            <td>{{$d->secondName}}</td>
            <td>{{$d->Age}}</td>
            <td>{{$d->salary}}</td>
            <td><a class="btn btn-secondary" href="/edit/{{$d->id}}">UPDATE</a> <a class="btn btn-warning" href="/delete/{{$d->id}}">DELETE!</a></td>
        </tr>
        @endforeach
    </table>

</div>
