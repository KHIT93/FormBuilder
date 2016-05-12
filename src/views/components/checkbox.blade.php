<div class="form-group">
    <div class="checkbox">
        <label>
            {!! Form::checkbox($component->name(), $component->defaultValue(), $component->checked()) !!}
            {{ $component->displayName() }}
        </label>
    </div>
</div>