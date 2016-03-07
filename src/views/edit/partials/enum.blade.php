 <select name='{{ $name }}' class="select2">

    @foreach($schema->get_enum_values('profiles', $name) as $value)
    <option value="{{$value}}">{{ $value }}</option>
    @endforeach

</select>
