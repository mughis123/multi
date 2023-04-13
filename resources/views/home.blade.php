<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <h1>insert data </h1>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
  Open modal
</button>
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form action="/save" method="post">
        @csrf
  <div class="mb-3 mt-3">
    <label for="name" class="form-label">Name:</label>
    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
  </div>
  <div class="mb-3">
  <label for="browser" class="form-label">Gender:</label>
<select class="form-select" name="gender">
    @foreach($genders as $gender)
<option value="{{$gender->id}}">{{$gender->gender}}</option>
 @endforeach
</select>
 
  </div>
  <div class="mb-3">
  <label for="browser" class="form-label">Position:</label>
<select class="form-select" name="position">
    @foreach($positions as $position)
<option value="{{$position->id}}">{{$position->title}}</option>
 @endforeach
</select>
 
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
    <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    @foreach($employees as $employee)
    <tbody>
      <tr>
    <td>{{$employee->name}}</td>
    <td>{{$employee->gender}}</td>
    <td>{{$employee->title}}</td>
      </tr>
    </tbody>
    @endforeach
  </table>
</body>
</html>