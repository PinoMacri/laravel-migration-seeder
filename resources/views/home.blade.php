@extends ("layouts.main")
@section('content')
    <ul>
        @foreach ($trains as $train)
            <li>
                <ul>
                    <li>Azienda Treno:{{ $train->azienda }}</li>
                    <li>Stazione di Partenza:{{ $train->stazione_partenza }}</li>
                    <li>Stazione di Arrivo:{{ $train->stazione_arrivo }}</li>
                    <li>Orario di Partenza:{{ $train->orario_partenza }}</li>
                    <li>Orario di Arrivo:{{ $train->orario_arrivo }}</li>
                    <li>Codice Treno:{{ $train->codice_treno }}</li>
                    <li>Numero Carrozze:{{ $train->numero_carrozze }}</li>
                    <li>Treno in orario:{{ $train->in_orario }}</li>
                    <li>Treno cancellato:{{ $train->cancellato }}</li>
                </ul>
            </li>
        @endforeach
    </ul>
@endsection
