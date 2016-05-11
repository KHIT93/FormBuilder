<div class="form-group @if ($errors->has('name')) has-error @endif">
	{!! Form::label($component->name(), $component->displayName(), ['class' => 'control-label']) !!}
	<input type="{{ $component->getType() }}" name="{{ $component->name() }}" id="{{ $component->name() }}" {{ $component->render_attributes($component->wrapper_attributes()) }}/>
</div>
