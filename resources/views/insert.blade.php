<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
        <a href="/show" class="navbar-brand">Home</a>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
</nav><br>
<h1 style="text-align: center; color:black">INTER DATA</h1>
<form method="post" action="{{url('/insert')}}" >
    @csrf
    <div class="container" style="background-color: #cfcfcf; display:flex; flex-direction: column;">
        <div class="mb-3">
            <label for="exampleInputText1" class="form-label">frist name</label>
            <input type="text" class="form-control" id="exampleInputText1" required aria-describedby="emailHelp" name="fName">

        </div>
        <div class="mb-3">
            <label for="exampleInputText1" class="form-label">second name</label>
            <input type="text" class="form-control" id="exampleInputText1" name="sName">
        </div>
        <div class="mb-3">
            <label for="exampleInputText1" class="form-label">your age</label>
            <input type="text" class="form-control" id="exampleInputText1" required name="agName">
        </div>
        <div class="mb-3">
            <label for="exampleInputText1" class="form-label">salary</label>
            <input type="text" class="form-control"required id="exampleInputText1" name="salary">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
