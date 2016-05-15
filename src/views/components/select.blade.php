<div class="form-group @if ($errors->has('name')) has-error @endif">
	{!! Form::label($component->name(), $component->displayName(), ['class' => 'control-label']) !!}
	{!! Form::select($component->name(), $component->options_list(), $component->defaultValue(), $component->attributes()) !!}
</div>
