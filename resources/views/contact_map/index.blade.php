
@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{route('contact_us.map.create')}}" class="btn btn-primary"
    style="margin-top:50px;width:150px;height:40px;margin-bottom:40px;">create</a>

</div>
 <div class="container" style="padding-top: 50px;">

    <table class="table" >
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">lang</th>
            <th scope="col">atit</th>
            <th scope="col" >action</th>
          </tr>
        </thead>
        <tbody>
           @php
               $i = 0;
           @endphp
            @foreach ($contact_map as $item)
            <tr>
                <th scope="row">{{++$i}}</th>
                <td>{{$item->lang}}</td>
                <td>{{$item->atit}}</td>

                <td>
                    <div class="row">
                        <div class="col-md-4">
                        <a href="{{route('contact_us.map.edit',$item->id)}}" class="btn btn-primary">edit</a>
                        </div>


                      <div class="col-md-4">
                            <a href="{{route('contact_us.map.show',$item->id)}}" class="btn btn-success">show</a>
                            </div>

                            <div class="col-md-4">
                                <a href="{{route('contact_us.map.destroy',$item->id)}}" class="btn btn-danger">delete</a>
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
    {!! $contact_map->links() !!}
</div>
      @endsection
