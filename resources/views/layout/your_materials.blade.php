
<div class="w-100 row col-md-12">
    @foreach ($materials as $material)
        @foreach ($materialsSelected as $selected)
            @if ($material['id'] == $selected['id'])
                @php
                    $checked = true;
                    break;
                @endphp
            @else
                @php
                    $checked = false;
                @endphp
            @endif
        @endforeach
        <div class="form-group col-md-2 align-items-center pl-0">
            <input type="checkbox" name="checkInput" id="checkInput" class="mr-2" {{ $checked ? 'checked' : ''}} disabled>
            <label for="checkInput">{{ $material['name'] }}</label>
        </div>
    @endforeach
