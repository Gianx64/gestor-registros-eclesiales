@if (session()->has('failures'))
  <table class="table table-danger">
    <tr>
      <th><h4><strong>Errores</strong></h4></th>
    </tr>
    <tr>
      <th>Fila</th>
      <th>Atributo</th>
      <th>Error</th>
      <th>Valor</th>
    </tr>
    @foreach (session()->get('failures') as $validation)
      <tr>
        <td>{{$validation->row()}}</td>
        <td>{{$validation->attribute()}}</td>
        <td>
          <ul>
            @foreach ($validation->errors() as $error)
              <li>{{$error}}</li>
            @endforeach
          </ul>
        </td>
        <td>{{$validation->values()[$validation->attribute()]}}</td>
      </tr>
    @endforeach
  </table>
@endif