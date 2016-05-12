<div class="form-group @if ($errors->has('name')) has-error @endif">
	{!! Form::reset($component->displayName(), $component->attributes()) !!}
</div>
