@extends('layouts.admin')


@section('content')
    <h1>Media</h1>
    @if($photos)
    <form action="delete/media" method="post" class="form-inline">

        {{csrf_field()}}
        {{method_field('delete')}}

        <div class="form-group">
            <select name="checkBoxArray" id="" class="form-control">
                <option value="">Delete</option>
            </select>
        </div>
        <div class="form-group">
            <input type="submit" name="delete_all" class="btn btn-primary">
        </div>

    <table class="table">
        <thead>
        <tr>
            <th><input type="checkbox" id="options"></th>
            <th>Id</th>
            <th>File</th>
            <th>Created</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

            @foreach($photos as $photo)
                <tr>
                    <td><input class="checkboxes" type="checkbox" name="checkBoxArray[]" value="{{$photo->id}}"></td>
                    <td>{{$photo->id}}</td>
                    <td><img height="50" src="{{$photo->file ? $photo->file : 'No user photo'}}"></td>
                    <td>{{$photo->created_id}}</td>
                    <td>
                        <input type="hidden" name="photo" value="{{$photo->id}}" >
                        <div class="form-group">
                            <input type="submit" name="delete_single" value="Delete" class="btn btn-danger">
                        </div>
{{--                        {!! Form::model($photo,['method'=>'DELETE','action'=>['AdminMediasController@destroy',$photo->id],'files'=>true]) !!}--}}
{{--                        <div class="form-group">--}}
{{--                            {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}--}}
{{--                        </div>--}}

{{--                        {!! Form::close() !!}--}}
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    </form>
    @endif
@stop

@section('scripts')
   <script>
       $(document).ready(function () {
           $('#options').click(function () {
               if(this.checked){
                   $('.checkboxes').each(function () {

                       this.checked = true;
                   })
               }else{
                   $('.checkboxes').each(function () {

                       this.checked = false;
                   })
               }
           })
       });
   </script>
@stop
