<div class="form-group @if ($errors->has('name')) has-error @endif">
	{!! Form::button($component->displayName(), $component->attributes()) !!}
</div>
