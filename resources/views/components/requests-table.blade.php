<table class="table table-striped table-hover">

    <thead class="">

        <tr>
            <th scope="col" class="text-titolo bg-chiarissimo">#</th>
            <th scope="col" class="text-titolo bg-chiarissimo">Nome</th>
            <th scope="col" class="text-titolo bg-chiarissimo">Email</th>
            <th scope="col" class="text-titolo bg-chiarissimo">Azioni</th>
        </tr>

    </thead>

    <tbody>
        @foreach ($roleRequests as $user)
        <tr>
            <th scope="row" class="text-titolo bg-chiarissimo">{{$user->id}}</th>
            <td class="text-titolo bg-chiarissimo">{{$user->name}}</td>
            <td class="text-titolo bg-chiarissimo">{{$user->email}}</td>
            <td class="bg-chiarissimo">
                @switch($role)
                @case('amministratore')
                <form action="{{route('admin.setAdmin',$user)}}" method="post">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn">Attiva {{$role}}</button>
                </form>
                @break
                @case('revisore')
                <form action="{{route('admin.setRevisor',$user)}}" method="post">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn">Attiva {{$role}}</button>
                </form>
                @break
                @case('redattore')
                <form action="{{route('admin.setWriter',$user)}}" method="post">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn">Attiva {{$role}}</button>
                </form>
                @break
                @endswitch
            </td>
        </tr>
        @endforeach
    </tbody>
</table>