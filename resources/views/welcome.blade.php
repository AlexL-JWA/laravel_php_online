@if($errors->any())
    <div class="alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('admin.product.store') }}" method="post">
    @csrf

    <input type="text" name="title" placeholder="title" class=" @error('title') is-invalid @enderror">
    @error('title') {{$message}}  @enderror
    <input type="text" name="description" placeholder="Desription" value="{{old('description')}}">
    <input type="number" name="price" placeholder="Price">
    <input type="number" name="qty" placeholder="Quite">

    <input type="submit" value="Save">
</form>
