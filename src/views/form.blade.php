@if($form->model)
{!! Form::model($form->getModel(), $form->renderAttributes()) !!}
@else
{!! Form::open($form->renderAttributes()) !!}
@endif
@foreach($form->getComponents() as $component)
	{!! $component->render() !!}
@endforeach
{!! Form::close() !!}
