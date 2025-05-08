<h1>Lista de Compromisso</h1>
<hr>
<form action="{{ route('compromissos.salvar') }}" method="post">
    @csrf
    <input type="text" name="titulo" placeholder="O que você tem pra fazer?">
    <br>
    <input type="datetime-local" name="quando">
    <br>
    <input type="submit" value="Gravar">
</form>
<hr>
Sua lista:
<ul>
    @foreach ($compromissos as $comp)
        <li>
            {{ $comp->titulo }} ({{ $comp->quando }}) |

            <a href="{{ route('compromissos.editarForm', $comp->id) }}">Editar</a>

            |

            <form action="{{ route('compromissos.apagar') }}" method="post">
                @csrf
                @method('DELETE')
                <input type="hidden" name="id" value="{{ $comp->id }}">

                <input type="submit" value="Apagar">
            </form>
        </li>
    @endforeach
</ul>
