<x-layout>

<h2>Liste des Commandes</h2>

    <div style="margin-bottom: 1rem">
    </div>

    <table>

        <thead>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            @foreach($gdgr as $row)
                <tr>
                    <td>{{ $row-> }}</td>
                    <td>{{ $row-> }}</td>
                    <td>{{ $row-> }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</x-layout>