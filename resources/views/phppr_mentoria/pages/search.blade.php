@extends('templates.phppr_mentoria.app')

@section('before_close_head')
<link rel="stylesheet" href="{{ asset('phppr_mentoria/css/search.css') }}">
@endsection

@section('content')
{{--  
    Baseado no snippet: https://www.bootdey.com/snippets/view/Filter-search-result-page#html
--}}

@php
//Apenas para a mock //TODO
$mentor = (object) [
'id' => 12,
'first_name' => 'Mentor',
'last_name' => 'Fulano de Tal',
'alias' => 'Fulaninho',
'email' => 'mentor@email.com'
];
@endphp

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
    <div class="row">
        <!-- BEGIN SEARCH RESULT -->
        <div class="col-md-12">
            <div class="grid search">
                <div class="grid-body">
                    <div class="row">
                        <!-- BEGIN FILTERS -->
                        <div class="col-md-3">
                            <form action="{{ route('mentoria.pesquisa') }}">
                                <h2 class="grid-title"><i class="fa fa-filter"></i>Filtros</h2>
                                <hr>
                                <!-- BEGIN FILTER BY TECH -->
                                <h5>Por tech:</h5>
                                @php
                                $techs           = ['php', 'css', 'linux', 'shell'];
                                $by_tech_request = (request()->by_tech) ? array_values(request()->by_tech) : [];
                                @endphp
                                @foreach ($techs as $k => $t)
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="{{ 'grid_check_by_tech_'.($k+1) }}" name="by_tech[]" value="{{ $t }}" 
                                            {{ (in_array($t, $by_tech_request)) ? 'checked' : '' }}>
                                            <label class="form-check-label" for="{{ 'grid_check_by_tech_'.($k+1) }}">
                                                {{ $t }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <!-- END FILTER BY TECH -->
                                <hr>
                                <!-- BEGIN FILTER BY LEVELS -->
                                <h5>Por nível:</h5>
                                @php
                                $levels           = ['iniciantes', 'avancados','intermediario', 'todos'];
                                $by_level_request = (request()->by_level) ? array_values(request()->by_level) : [];
                                @endphp
                                @foreach ($levels as $k => $l)
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="{{ 'grid_check_by_level_'.($k+1) }}" name="by_level[]" value="{{ $l }}"
                                            {{ (in_array($l, $by_level_request)) ? 'checked' : '' }}>
                                            <label class="form-check-label" for="{{ 'grid_check_by_level_'.($k+1) }}">
                                                {{ $l }}
                                            </label>
                                        </div>
                                    </div>
                                </div>                                
                                @endforeach
                                <!-- END FILTER BY LEVELS -->

                                <hr>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-10 col-form-label">Nome do mentor</label>
                                    <div class="col-sm-12">
                                        <input name="menthor_name" class="form-control mr-sm-2" type="text"
                                        value="{{ request()->menthor_name }}" placeholder="Nome do mentor"
                                        aria-label="Pesquisar">
                                    </div>
                                </div>
                                <hr>
                                <div class="input-group">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar <i
                                            class="fa fa-search"></i></button>
                                </div>

                            </form>
                        </div>
                        <!-- END FILTERS -->
                        <!-- BEGIN RESULT -->
                        <div class="col-md-9">
                            <h2><i class="fa fa-file-o"></i> Result</h2>
                            <hr>
                            <!-- BEGIN SEARCH INPUT -->
                            <form action="{{ route('mentoria.pesquisa') }}">
                                <div class="input-group">
                                    <input type="hidden" name="search_by" value="menthors">
                                    <input name="menthor_name" class="form-control mr-sm-2" type="text"
                                        value="{{ request()->menthor_name }}" placeholder="Nome do mentor"
                                        aria-label="Pesquisar" required>
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar <i
                                            class="fa fa-search"></i></button>
                                </div>
                            </form>

                            @if (request()->menthor_name)
                            <!-- END SEARCH INPUT -->
                            <p>Mostrando resultados de perfis cujo nome contenham "{{ request()->menthor_name }}"</p>
                            @endif

                            <div class="padding"></div>

                            <div class="row">
                                <!-- BEGIN ORDER RESULT -->
                                <div class="col-sm-6">
                                    <div class="btn-group mt-3">
                                        <button type="button" class="btn btn-default dropdown-toggle"
                                            data-toggle="dropdown">
                                            Order by <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li class="dropdown-item"><a href="#">Name</a></li>
                                            <li class="dropdown-item"><a href="#">Date</a></li>
                                            <li class="dropdown-item"><a href="#">View</a></li>
                                            <li class="dropdown-item"><a href="#">Rating</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- BEGIN TABLE RESULT -->
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tbody>
                                        @php
                                        //Apenas para a mock
                                        $menthors = [
                                        [
                                        'first_name' => 'Mentor',
                                        'last_name' => 'de Tal Nome 1',
                                        'alias' => 'Nomezinho 1',
                                        'techs' => [
                                        'php', 'css', 'linux', 'shell'
                                        ],
                                        'levels' => [
                                        'iniciantes', 'avancados',
                                        ],
                                        'avatar' => 'https://via.placeholder.com/400x300/FF8C00',
                                        ],
                                        [
                                        'first_name' => 'Mentor',
                                        'last_name' => 'de Tal Nome 2',
                                        'alias' => 'Nomezinho 2',
                                        'techs' => [
                                        'php', 'css', 'linux', 'shell'
                                        ],
                                        'levels' => [
                                        'iniciantes', 'avancados',
                                        ],
                                        'avatar' => 'https://via.placeholder.com/400x300/5F9EA0',
                                        ],
                                        [
                                        'first_name' => 'Mentor',
                                        'last_name' => 'de Tal Nome 3',
                                        'alias' => 'Nomezinho 3',
                                        'techs' => [
                                        'php', 'css', 'linux', 'shell'
                                        ],
                                        'levels' => [
                                        'iniciantes', 'avancados',
                                        ],
                                        'avatar' => 'https://via.placeholder.com/400x300/8A2BE2',
                                        ],
                                        [
                                        'first_name' => 'Mentor',
                                        'last_name' => 'de Tal Nome 4',
                                        'alias' => 'Nomezinho 4',
                                        'techs' => [
                                        'php', 'css', 'linux', 'shell'
                                        ],
                                        'levels' => [
                                        'iniciantes', 'avancados',
                                        ],
                                        'avatar' => 'https://via.placeholder.com/400x300/6495ED',
                                        ],
                                        [
                                        'first_name' => 'Mentor',
                                        'last_name' => 'de Tal Nome 5',
                                        'alias' => 'Nomezinho 5',
                                        'techs' => [
                                        'php', 'css', 'linux', 'shell'
                                        ],
                                        'levels' => [
                                        'avancados'
                                        ],
                                        'avatar' => 'https://via.placeholder.com/400x300/DC143C',
                                        ],
                                        [
                                        'first_name' => 'Mentor',
                                        'last_name' => 'de Tal Nome 6',
                                        'alias' => 'Nomezinho 6',
                                        'techs' => [
                                        'php', 'css', 'linux', 'shell'
                                        ],
                                        'levels' => [
                                        'iniciantes',
                                        ],
                                        'avatar' => 'https://via.placeholder.com/400x300/9932CC',
                                        ],
                                        [
                                        'first_name' => 'Mentor',
                                        'last_name' => 'de Tal Nome 7',
                                        'alias' => 'Nomezinho 7',
                                        'techs' => [
                                        'php', 'css', 'linux', 'shell'
                                        ],
                                        'levels' => [
                                        'todos'
                                        ],
                                        'avatar' => 'https://via.placeholder.com/400x300/0000FF',
                                        ],
                                        [
                                        'first_name' => 'Mentor',
                                        'last_name' => 'de Tal Nome 8',
                                        'alias' => 'Nomezinho 8',
                                        'techs' => [
                                        'php', 'css', 'linux', 'shell'
                                        ],
                                        'levels' => [
                                        'iniciantes', 'avancados',
                                        ],
                                        'avatar' => 'https://via.placeholder.com/400x300/808080',
                                        ],
                                        [
                                        'first_name' => 'Mentor',
                                        'last_name' => 'de Tal Nome 9',
                                        'alias' => 'Nomezinho 9',
                                        'techs' => [
                                        'php', 'css', 'linux', 'shell'
                                        ],
                                        'levels' => [
                                        'iniciantes', 'avancados',
                                        ],
                                        'avatar' => 'https://via.placeholder.com/400x300/FF0000',
                                        ],
                                        [
                                        'first_name' => 'Mentor',
                                        'last_name' => 'de Tal Nome 10',
                                        'alias' => 'Nomezinho 0',
                                        'techs' => [
                                        'php', 'css', 'linux', 'shell'
                                        ],
                                        'levels' => [
                                        'iniciantes', 'avancados',
                                        ],
                                        'avatar' => 'https://via.placeholder.com/400x300/FFFFFF',
                                        ],
                                        [
                                        'first_name' => 'Mentor',
                                        'last_name' => 'de Tal Nome 11',
                                        'alias' => 'Nomezinho 1',
                                        'techs' => [
                                        'php', 'css', 'linux', 'shell'
                                        ],
                                        'levels' => [
                                        'iniciantes', 'avancados',
                                        ],
                                        'avatar' => 'https://via.placeholder.com/400x300/FFFF00',
                                        ],
                                        [
                                        'first_name' => 'Mentor',
                                        'last_name' => 'de Tal Nome 12',
                                        'alias' => 'Nomezinho 2',
                                        'techs' => [
                                        'php', 'css', 'linux', 'shell'
                                        ],
                                        'levels' => [
                                        'iniciantes', 'avancados',
                                        ],
                                        'avatar' => 'https://via.placeholder.com/400x300/000000',
                                        ]
                                        ];
                                        @endphp
                                        @for ($i = 0; $i < count($menthors); $i++) <tr>
                                            <td class="number text-center">{{ $i+1 }}</td>
                                            <td class="image">
                                                <img src="{{ $menthors[$i]['avatar'] }}" alt="">
                                            </td>
                                            <td class="product">
                                                <strong>{{ $menthors[$i]['first_name'] .' '. $menthors[$i]['last_name'] }}</strong>
                                                <span class="text-muted">{{ $menthors[$i]['alias'] }}</span>
                                                <br>
                                                Techs:
                                                @for ($i2 = 0; $i2 < count($menthors[$i]['techs']); $i2++)
                                                    @php($tech=$menthors[$i]['techs'][$i2]) <span
                                                    href="#{{ $tech }}-from_search_list"
                                                    class="badge badge-pill badge-primary">{{ $tech }}</span>
                                                    @endfor
                                                    <br>
                                                    Aceita:
                                                    @for ($i3 = 0; $i3 < count($menthors[$i]['levels']); $i3++)
                                                        @php($level=$menthors[$i]['levels'][$i3]) <span
                                                        href="#{{ $level }}-level" class="badge badge-pill badge-info">
                                                        {{ $level }}</span>
                                                        @endfor
                                            </td>
                                            {{-- <td class="product">
                                                Mentorados: {{ rand($i, 2*($i+1)) }}<br>
                                            Mentorados: {{ rand($i, 2*($i+1)) }}
                                            </td> --}}
                                            <td class="price text-right">
                                                {{-- <a class="btn btn-primary" href="{{ route('mentoria.mentor.profile', 'mentor_'.($i+1)) }}"
                                                role="button">Ver perfil</a> --}}
                                                <div class="btn-group-vertical" role="group"
                                                    aria-label="Vertical button group">
                                                    <button type="button" class="btn btn-outline-info"
                                                        title="Enviar mensagem">
                                                        <i class="fas fa-comment-alt"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-outline-secondary"
                                                        title="Ver perfil">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-outline-danger"
                                                        title="Adicionar aos favoritos">
                                                        <i class="fas fa-plus"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            </tr>
                                            @endfor

                                    </tbody>
                                </table>
                            </div>
                            <!-- END TABLE RESULT -->

                            <!-- BEGIN PAGINATION -->
                            <nav aria-label="Page navigation example" class="float-right">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                            <!-- END PAGINATION -->
                        </div>
                        <!-- END RESULT -->
                    </div>
                </div>
            </div>
        </div>
        <!-- END SEARCH RESULT -->
    </div>
</div>
@endsection