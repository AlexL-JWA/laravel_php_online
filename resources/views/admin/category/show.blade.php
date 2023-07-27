<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row g-3">
        <div class="col-6">
            <form class="needs-validation" action="{{ route('admin.category.edit', ['category'=>$category->id]) }}"
                  method="post">
                @csrf

                <div class="col-sm-6">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" id="title" name="title"
                           class="form-control @error('title') is-invalid @enderror"
                           value="{{ $category->title  }}
                   ">
                </div>

                @error('title')
                <div class="alert alert-danger"> {{ $message }}</div>
                @enderror


                <div class="col-sm-6 mb-3">
                    <label for="description" class="form-label">description</label>
                    <input type="text" id="title" name="description"
                           class="form-control @error('title') is-invalid @enderror"
                           value="{{ $category->description }}
                   ">
                    @error('description')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <button class="w-100 btn btn-primary btn-lg" type="submit">Save</button>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>
</html>
