@extends('ERP.base.header')

@section('title', 'Novo Contato')

<script src="{{asset('assets/plugins/cidades-estados.js')}}"></script>

@section('content')
@csrf
<form action="" method="post">
<div class="container">
    <div class="card-body">
        <h3 class="card-title">Cadastrar novo contato</h3>
        <div class="row">
            <div class="col-md-5">
                <div class="form-group">
                    <label class="form-label">Nome da empresa</label>
                    <input type="text" class="form-control" placeholder="Nome da empresa" value="" checked="checked" name="nome">
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="form-group">
                    <label class="form-label">CNPJ</label>
                    <input type="text" class="form-control" placeholder="00.000.000/0001-00" value="" minlength="14" maxlength="14" name="cnpj">
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="form-group">
                    <label class="form-label">Inscrição estadual</label>
                    <input type="text" class="form-control" placeholder="Inscriçao estadual" name="insc_estadual">
                </div>
            </div>
            <div class="w-100"></div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-5">
                <div class="form-group">
                    <label class="form-label">Endereco</label>
                    <input type="text" class="form-control" placeholder="Avenida Getulio vargas" value="" name="logradouro">
                </div>
            </div>
            <div class="col-md-12 col-lg-3">
                <div class="form-group">
                    <label class="form-label">Numero</label>
                    <input type="text" class="form-control" placeholder="1234" value="" name="numero">
                </div>
            </div>
            <div class="form-group col-lg-3">
                <label class="form-label">Codigo postal</label>
                <input type="text" name="cep" class="form-control" data-mask="00000-000" data-mask-clearifnotmatch="true" placeholder="00000-000" maxlength="9" name="cep">
            </div>
            <div class="col-md-5 col-lg-4">
                <div class="form-group">
                    <label class="form-label">Pais</label>
                    <select class="form-control custom-select" name="pais">
                        <option value="Brasil" selected="true">Brasil</option>
                        <option value="Outro">Outro</option>
                    </select>
                </div>
            </div>
            <div class="col-md-5 col-lg-4">
                <div class="form-group">
                    <label class="form-label">UF</label>
                    <select class="form-control custom-select" id="uf" name="uf" value="SC"></select>
                </div>
            </div>
            <div class="col-md-5 col-lg-4">
                <div class="form-group">
                    <label class="form-label">Cidade</label>
                    <select class="form-control custom-select" id="municipio" name="municipio" value=""></select>
                    </select>
                </div>
            </div>
        </div>
            <script language="JavaScript" type="text/javascript" charset="utf-8">
              new dgCidadesEstados({
                cidade: document.getElementById('municipio'),
                estado: document.getElementById('uf')
              })
            </script>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="form-group">
                    <label class="form-label">Nome do vendedor</label>
                    <input type="text" class="form-control" placeholder="Nome do vendedor" value="" name="vendedor">
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="form-group">
                    <label class="form-label">Telefone</label>
                    <input type="text" class="form-control" placeholder="Telefone" value="" name="telefone">
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-5">
                <div class="form-group">
                    <label class="form-label">Email padrão</label>
                    <input type="email" class="form-control" placeholder="emal@site.com" value="" name="email">
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-5 col-lg-3">
                <div class="form-group">
                    <label class="form-label">Tipo de telefone</label>
                    <select class="form-control custom-select" name="">
                        <option value="">Principal</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="form-group">
                    <label class="form-label">Telefone</label>
                    <input type="text" class="form-control" placeholder="Telefone" value="">
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="form-group">
                    <label class="form-label">Observação</label>
                    <input type="text" class="form-control" placeholder="Observação" value="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 col-lg-3">
                <div class="form-group">
                    <select class="form-control custom-select">
                        <option value="">Principal</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Telefone" value="">
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Observação" value="">
                </div>
            </div>
        </div>
        <div class="card-footer text-right col-lg-12">
            <div class="d-flex">
                <a href="{{ route('contatos.lista') }}" class="btn btn-link">Cancelar</a>
                <button type="submit" value="submit" class="btn btn-primary ml-auto">Registrar</button>
            </div>
        </div>
    </div>
</div>
</form>
@stop
