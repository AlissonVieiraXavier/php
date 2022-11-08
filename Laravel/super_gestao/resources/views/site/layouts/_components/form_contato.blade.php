<form action="{{route('site.req-contato')}}" method="POST">
    @csrf
        <input name="name" value="{{old('name')}}" type="text" placeholder="Nome" class="borda-preta">
        <br>
        <input name="telefone" value="{{old('telefone')}}"  type="text" placeholder="Telefone" class="borda-preta">
        <br>
        <input name="email" value="{{old('email')}}"  type="text" placeholder="E-mail" class="borda-preta">
        <br>
        <select name="motivo_contato" class="borda-preta">
            <option value="">Qual o motivo do contato?</option>
            <option value="1" {{ old('motivo_contato') == 1 ? 'selected' : ''}}>Dúvida</option>
            <option value="2" {{ old('motivo_contato') == 2 ? 'selected' : ''}}>Elogio</option>
            <option value="3" {{ old('motivo_contato') == 3 ? 'selected' : ''}}>Reclamação</option>
        </select>
        <br>
        <textarea name="mensagem"  value="{{old('mensagem')}}" class="borda-preta">Preencha aqui a sua mensagem</textarea>
        <br>
        <button type="submit" class="borda-preta">ENVIAR</button>
    </form>
    @if($errors->any())
    <div class="error_div">
        <ul>
            @foreach ($errors->all() as $error) 
                <li> {{  $error  }} </li>
            @endforeach
        </ul>
    </div>
    @endif