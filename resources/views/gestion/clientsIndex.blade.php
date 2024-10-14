<x-layout>
    <x-slot:title>Liste des Clients</x-slot:title>
 
    <h2>Liste des Clients</h2>
    <div style="margin-bottom: 1rem">
    </div>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>nom</th>
                <th>adresse</th>
                <th>Lien commande</th>
            </tr>
        </thead>
        <tbody>
            @foreach($VarClients as $row)
                <tr>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->nom }}</td>
                    <td>{{ $row->adresse }}</td>
                    <td><a href="clients/{{$row->id}}">Commande(s)</a></td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <p>{{$VarClients}}</p>
    

</x-layout>