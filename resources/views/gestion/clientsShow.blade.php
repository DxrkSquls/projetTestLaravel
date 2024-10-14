<x-layout>

    <h2>Liste des Commandes du client {{$client->nom}}</h2>

    <div style="margin-bottom: 1rem">
    </div>


    <p>{{$commandes}}</p>

    <table>

        <thead>
            <tr>
                <th>Statut</th>
                <th>Produit</th>
                <th>Quantité</th>
                <th>Prix</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($commandes->commandes as $commande)
                @foreach ($commande->produits as $produit)
                    <tr>
                        <td>{{$client->commandes[0]->statut}}</td>
                        <td>{{ $produit->produit->nom }}</td>
                        <td>{{ $produit->quantite }}</td>
                        <td>{{$produit->produit->prix}}</td>
                    </tr>
                @endforeach
            @endforeach


        </tbody>
    </table>

    <p>{{$commandes->commandes[0]->produits[0]->produit}}</p>
    <p>{{$commandes->commandes[0]->produits[1]->produit}}</p>
    
</x-layout>