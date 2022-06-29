<h1>lista treni</h1>
@foreach ($trains as $item)   
<h2>Compagnia: {{ $item->azienda }}</h2>
<p>Città di partenza: {{ $item->stazione_partenza }}</p>
<p>Città di arrivo: {{ $item->stazione_arrivo }}</p>
<p>Orario Partenza: {{ $item->orario_partenza }}</p>
<p>Orario Arrivo: {{ $item->orario_arrivo }}</p>
<p>Codice treno: {{ $item->codice_treno }}</p>
<p>Numero carrozza: {{ $item->numero_carrozza }}</p>
<p>In orario: {{ $item->in_orario }}</p>
<p>Cancellato: {{ $item->cancellato }}</p>

@endforeach
