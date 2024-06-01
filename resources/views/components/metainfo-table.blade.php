<table class="table table-striped table-hover">

    <thead class="">

        <tr>
            <th scope="col" class="text-titolo bg-chiarissimo">#</th>
            <th scope="col" class="text-titolo bg-chiarissimo">Nome tag</th>
            <th scope="col" class="text-titolo bg-chiarissimo">Quantita articoli collegati</th>
            <th scope="col" class="text-titolo bg-chiarissimo">Aggiorna</th>
            <th scope="col" class="text-titolo bg-chiarissimo">Cancella</th>
        </tr>

    </thead>

    <tbody>
        @foreach ($metaInfos as $metaInfo)
            <tr>
                <th scope="row" class="text-titolo bg-chiarissimo">{{ $metaInfo->id }}</th>
                <td class="text-titolo bg-chiarissimo">{{ $metaInfo->name }}</td>
                <td class="text-titolo bg-chiarissimo">{{count ($metaInfo->articles) }}</td>
                <td class="bg-chiarissimo">
                    @if ($metaType == 'tags')
                <td>
                    <form action="{{route('admin.editTag' , ['tag'=>$metaInfo])}}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="text" name="name" placeholder="nuovo nome tag"
                            class="form-control w-50 d-inline">
                        <button type="submit" class="btn">Aggiorna</button>
                    </form>
                </td>
                <td>
                    <form action="{{route('admin.deleteTag' , ['tag'=>$metaInfo])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn">Elimina</button>
                    </form>
                </td>
                
        @else

        <td>
                    <form action="{{route('admin.editCategory' , ['category'=>$metaInfo])}}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="text" name="name" placeholder="nuovo nome categoria" 
                            class="form-control w-50 d-inline">
                        <button type="submit" class="btn">Aggiorna</button>
                    </form>
                </td>
                <td>
                    <form action="{{route('admin.deleteCategory' , ['category'=>$metaInfo])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn">Elimina</button>
                    </form>
                </td>

        @endif
        </tr>
        @endforeach
    </tbody>
</table>
