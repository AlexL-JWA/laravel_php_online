<form action="{{route('form', ['id'=>1212])}}" method="post">
    @csrf
    <input type="text" name="name" id="name">
    <input type="submit" value="Submit">
</form>
