@extends('layout')

	@section('header')
		<style>
			body{
				background-color: gray;
				color: #fff;
			}
		</style>
	@stop

	@section('content')

            <div class="content">
            
            	@if (empty($people))
            		
            		There are not people.
            		
            	@else
            	
            		Something else here.
            		
            	@endif
               	
               	<ul>
               	
	               	@foreach ($people as $person)
	               		
	               		<li>{{ $person }}</li>
	               		
	               	@endforeach
               	
               	</ul>
               	
               	@unless (empty($people))
               		
               		There are some pleople.
               		
               	@endunless
               	
	@stop
	
	@section('footer')
		
		<script type="text/javascript">
			console.log("custom alert people page");
       	</script>
		
	@stop
	