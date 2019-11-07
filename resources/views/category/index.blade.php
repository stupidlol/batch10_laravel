   @extends('template')

   @section('content')

 <div class="container my-5">

       
        <h2 style="margin-left: 300px;margin-bottom: 80px;">Categories 
           <a href="{{route('category.create')}}" 
           class="btn btn-warning" style="float: right; margin-right: 300px;">Add Cretegory</a>
        </h2>
          <table border="1"  cellpadding="10" cellspacing="0" class="mx-auto my-5">
            <thead>
              <tr>
                <th>No</th>
                <th>Name</th>
                <th colspan="2">Action</th>
              </tr>
            </thead>
            <tbody>

              @php
                $i=1;
              @endphp

              @foreach($categories as $row)
              <tr>
                <td>{{$i++}}</td>
                <td>{{$row->name}}</td>
                <td><a href="{{route('category.edit',$row->id)}}" class="btn btn-primary">Edit</a></td>
                <td>
                  <form method="post" action="{{route('category.destroy',$row->id)}}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="Delete">
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        
      </div>
      
    
  @endsection