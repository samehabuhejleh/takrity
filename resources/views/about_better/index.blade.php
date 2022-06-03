
@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{route('about.dash.create')}}" class="btn btn-primary"
    style="margin-top:50px;width:150px;height:40px;margin-bottom:40px;">create</a>

</div>
 <div class="container" style="padding-top: 50px;">

    <table class="table" >
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">title</th>
            <th scope="col">description</th>
            <th scope="col" >action</th>
          </tr>
        </thead>
        <tbody>
           @php
               $i = 0;
           @endphp
            @foreach ($abouts as $item)
            <tr>
                <th scope="row">{{++$i}}</th>
                <td>{{$item->title}}</td>
                <td class="col-md-3">{{$item->description}}</td>

                <td>
                    <div class="row">
                        <div class="col-md">
                        <a href="{{route('about.dash.edit',$item->id)}}" class="btn btn-primary">edit</a>
                        </div>


                      <div class="col-md">
                            <a href="{{route('about.dash.show',$item->id)}}" class="btn btn-success">show</a>
                            </div>

                            <div class="col-md">
                                <a href="{{route('about.dash.destroy',$item->id)}}" class="btn btn-danger">delete</a>
                                </div>

                     {{-- <div class="col-md">
                        <form action="{{route('post.destroy',$item->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div> --}}

                    </div>




                </td>
              </tr>
            @endforeach
        </tbody>
    </table>
    {!! $abouts->links() !!}
</div>
      @endsection
