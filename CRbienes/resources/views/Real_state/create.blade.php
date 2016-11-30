<form class="form-horizontal" role="form" method="post" action="{{ url('/') }}">

</form>

{{Form::open(array('route' => 'realstate',class=>'form-horizontal', role=> 'form'))}}

{{ csrf_field() }}

<div class="form-group">
{{form::input('text','name',null,['class' => 'form-control']) }}
</div>


{{form::close() }}