<tr>

    <th scope="row">{{$user->id}}</th>
    <td>
        <img src="{{asset('storage/'.$user->image->image)}}" width="70%">
    </td>

    <td>{!! $user->name  !!}</td>
    <td>{!! $user->email !!}</td>
    <td>{{$user->address->street}}</td>
    <td>{{$user->address->number}}</td>
    <td>{{$user->created_at}}</td>
    <td>

        <a type="button" href="{{route('users.show', $user->id)}}" class="btn btn-success">VER</a>
    </td>
    <td>
        <a type="button" href="{{route('users.edit', $user->id)}}" class="btn btn-warning">EDITAR</a>
    </td>
    <td>
        <a type="button" href="{{route('users.address', $user->id)}}" class="btn btn-info">ENDEREÇO</a>
    </td>
    <td>
        <a type="button" href="{{route('users.posts', $user->id)}}" class="btn btn-dark">POSTS</a>
    </td>
    <td>
        <form action="{{route('users.destroy', $user->id)}}" method="post">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger">DELETAR</button>
        </form>

    </td>

</tr>

