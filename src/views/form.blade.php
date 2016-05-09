@if($form->model)

{!! Form::model($form->getModel(), $form->renderAttributes()) !!}
	@foreach($form->getComponents() as $component)
		{!! $component->render() !!}
	@endforeach
@else

{!! Form::open($form->renderAttributes()) !!}
	@foreach($form->getComponents() as $component)
		{!! $component->render() !!}
	@endforeach
@endif

{!! Form::close() !!}
