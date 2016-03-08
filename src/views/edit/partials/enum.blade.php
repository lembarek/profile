@inject('profile', 'Lembarek\Profile\Repositories\ProfileRepositoryInterface')
<?php $selected = $profile->getForUser()[$name] ?>

 <select name='{{ $name }}' class="select2">

    @foreach($schema->get_enum_values('profiles', $name) as $value)
        @if($value === $selected)
        <option value="{{$value}}" selected='selected'>{{ $value }}</option>
        @else
        <option value="{{$value}}">{{ $value }}</option>
        @endif
    @endforeach

</select>
