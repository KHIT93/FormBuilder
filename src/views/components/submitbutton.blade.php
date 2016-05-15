<div class="form-group @if ($errors->has('name')) has-error @endif">
	{!! Form::submit($component->displayName(), $component->attributes()) !!}
</div>
