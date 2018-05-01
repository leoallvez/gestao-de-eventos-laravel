{{ Form::hidden('user_id', (isset($user)) ? $user->id : null) }}

<div class="form-group row">
    <div class="col-md-6 col-xs-12">
        {!! Form::label('description', 'Description') !!}
        {!! Form::text('description', (isset($event)) ? $event->description : null,
            [
                'class' => 'form-control',
                'placeholder' => 'Description'
            ]) 
        !!}
    </div>
    <div class="col-md-6 col-xs-12">
        {!! Form::label('address', 'Address') !!}
        {!! Form::text('address', (isset($event)) ? $event->address : null,
            [
                'class' => 'form-control',
                'placeholder' => 'Address'
            ]) 
        !!}
    </div>
</div>

<div class="form-group row">
    <div class="col-md-3 col-xs-12">
        {!! Form::label('date', 'Date') !!}
        {!! Form::date('date', (isset($event)) ? $event->date : null,
            [
                'class' => 'form-control',
            ]) 
        !!}
    </div>
    <div class="col-md-3 col-xs-12">
        {!! Form::label('user', 'User') !!}
        {!! Form::text('User', (isset($user)) ? $user->name : null,
            [
                'class' => 'form-control',
                'disabled',
            ]) 
        !!}
    </div>
</div>

<div class="form-group row">
    <div class="col-md-3 col-xs-12">
        <div class="form-check">      
            {!! Form::checkbox('posted', 1, (isset($event) ? $event->posted : false) ,['class' => 'form-check-input'])!!}
            {!! Form::label('posted', 'Posted', ['class' => 'form-check-label']) !!}
        </div>
    <div>
</div><br>

<div class="form-group row">
    <div class="col-md-12 col-xs-12">
        {!! Form::submit($buttonName, ['class' => 'btn btn-success']) !!}
        {!! Html::linkAction('MyEventsController@index','Back', null, ['class' => 'btn btn-primary']) !!}
    </div>
</div
