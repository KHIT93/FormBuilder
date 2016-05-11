<div class="form-group @if ($errors->has('name')) has-error @endif">
	{!! Form::label($component->name(), $component->displayName(), ['class' => 'control-label']) !!}
	{!! Form::text($component->name(), $component->defaultValue(), $component->attributes) !!}
</div>
