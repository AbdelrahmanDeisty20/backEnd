<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


<nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand">Home</a>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
</nav>

<br>
<h1 style="text-align: center; color:black">UPDATE DATA</h1>
<br>

<div class="container " style="display: flex; flex-direction:column">
    <form action='/update/{{$data->id}}' method="post">
        @csrf
        First Name : <input type="text" name="FName" value={{$data->firstName}}>
        Second Name :<input type="text" name="SName" value={{$data->secondName}}>
        Age :<input type="text" name="Age" value={{$data->Age}}>
        Salary :<input type="text" name="Salary" value={{$data->salary}}>
        <button class="btn btn-secondary">save</button>
    </form>

</div>
