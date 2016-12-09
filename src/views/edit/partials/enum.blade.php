 <select name='{{ $name }}' class="select2" class="form-control">

    @foreach($schema->get_enum_values('profiles', $name) as $v)
        @if($v === $value)
        <option value="{{$v}}" selected='selected'>{{ $v }}</option>
        @else
        <option value="{{$v}}">{{ $v }}</option>
        @endif
    @endforeach

</select>
