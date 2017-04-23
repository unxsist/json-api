@extends('base')

@section('title')
    Edit
@endsection

@section('content')
    <div class="columns">
        <div class="column is-8 is-offset-2">
            <form action="{{ route('json.update', ['json' => $json]) }}" method="post">
                {{ csrf_field() }}
                <textarea name="json_data" id="json_data" style="display: none;">{!! empty($json->json_data) ? '' : json_encode(json_decode($json->json_data, true), JSON_PRETTY_PRINT) !!}</textarea>
                <div class="field">
                    <label for="json_data" class="label">Your JSON content</label>
                    <div id="json_editor" style="width: 100%; height: 325px; {{ $errors->has('json_data') ? 'border: 1px solid red;' : '' }}"></div>
                    @if ($errors->has('json_data'))
                        <p class="help is-danger">{{ $errors->first('json_data') }}</p>
                    @endif
                </div>
                <div class="field is-grouped">
                    <p class="control">
                        <button type="submit" class="button is-primary">Save JSON</button>
                    </p>
                </div>
            </form>
        </div>
    </div>
    <div class="columns">
        <div class="column is-8 is-offset-2">
            <div class="field">
                <label for="json_url" class="label">URL serving your JSON:</label>
                <p class="control">
                    <input type="text" class="input" name="json_url" id="json_url" value="{{ route('json.serve', ['json' => $json]) }}" readonly/>
                </p>
            </div>
        </div>
    </div>
@endsection

@section('before_body_end')
    <script>
        var editor = ace.edit('json_editor');
        editor.$blockScrolling = Infinity;
        editor.getSession().setMode("ace/mode/json");
        editor.getSession().setValue(document.getElementById('json_data').value);
        editor.getSession().on('change', function(){
            document.getElementById('json_data').value = editor.getSession().getValue();
        });
    </script>
@endsection