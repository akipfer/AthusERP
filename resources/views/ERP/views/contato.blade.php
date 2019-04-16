@extends('ERP.base.header')

@section('title', 'Contatos')

@section('content')
<div class="my-3 my-md-5 container">
  <div class="row">
      <div class="col-sm-6 col-lg-3">
          <div class="card p-3">
              <div class="d-flex align-items-center">
                  <span class="stamp stamp-md bg-green mr-3"> <i class="fe fe-list"></i> </span>
                  <div>
                      <h4 class="m-0"><a href="{{ route('contatos.novo') }}"><small>Registrar um novo contato</small></a></h4>
                      <small class="text-muted">10 novos nos ultimos 30 dias</small>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<div class="container">
<div class="my-3 my-md-5">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Lista de contatos</h3>
            </div>
            <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap">
                    <thead>
                        <tr>
                            <th>Empresa</th>
                            <th>vendedor</th>
                            <th>telefone</th>
                            <th>email</th>
                            <th>Cidade, UF</th>
                            <th>nota</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                      @foreach ($registros as $registro)
                        <tr>
                            <td>
                            <a href="" class="text-inherit">{{ $registro->id }}</a>
                            </td>
                            <td>{{ $registro->id }}</td>
                            <td>x</td>
                            <td>x</td>
                            <td>x</td>
                            <td><span class="status-icon bg-success"></span> 7,3</td>
                            <td class="text-right"><a href="javascript:void(0)" class="btn btn-secondary btn-sm">Ver Mais</a>
                                <div class="dropdown">
                                    <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Ações</button>
                                </div>
                            </td>
                            <td>
                                <a class="icon" href="javascript:void(0)"> <i class="fe fe-edit"></i> </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
@stop
