<fieldset>
	@foreach($form->getComponents() as $component)
		{!! $component->render() !!}
	@endforeach
</fieldset>