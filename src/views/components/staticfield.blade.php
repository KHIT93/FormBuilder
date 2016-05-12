<div class="form-group @if ($errors->has('name')) has-error @endif">
	{!! Form::label($component->name(), $component->displayName(), ['class' => 'control-label']) !!}
	<p class="form-control-static">{{ $component->value() }}/p>
</div>
