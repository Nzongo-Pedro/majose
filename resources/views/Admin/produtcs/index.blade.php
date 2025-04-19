@extends('layouts.admin.dashboard')

@section('title', 'Listagem de Produtos')

@push('css')
    <link rel="stylesheet" href="{{asset('plugins/sweetalert2/sweetalert2.all.min.js')}}">
@endpush
@section('content')


    <div class="main-content">
        <!-- main-content-wrap -->
        <div class="main-content-inner">
            <!-- main-content-wrap -->
            <div class="main-content-wrap">
                <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                    <h3>Lista de Produtos</h3>

                    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                        <li>
                            <a href="index.html">
                                <div class="text-tiny">Dashboard</div>
                            </a>
                        </li>
                        <li>
                            <i class="icon-chevron-right"></i>
                        </li>
                        <li>
                            <a href="#">
                                <div class="text-tiny">Loja</div>
                            </a>
                        </li>
                        <li>
                            <i class="icon-chevron-right"></i>
                        </li>
                        <li>
                            <div class="text-tiny">Todos Produtos</div>
                        </li>
                    </ul>
                </div>
                <!-- product-list -->
                <div class="wg-box">
                    <div class="title-box">
                        <i class="icon-coffee"></i>
                        <div class="body-text">Você pode pesquisar um produto pelo seu nome, categoria ou subcategoria.
                        </div>
                    </div>
                    <div class="flex items-center justify-between gap10 flex-wrap">
                        <div class="wg-filter flex-grow">
                            <div class="show">
                                <div class="text-tiny">Mostrando</div>
                                <div class="select">
                                    <select class="">
                                        <option>10</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>
                                <div class="text-tiny">registros</div>
                            </div>
                            <form class="form-search">
                                <fieldset class="name">
                                    <input type="text" placeholder="Pesquise aqui" class="" name="query_searsh" tabindex="2"
                                        value="" aria-required="true" required>
                                </fieldset>
                                <div class="button-submit">
                                    <button class="" type="submit"><i class="icon-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <a class="tf-button style-1 w208" href="{{route('product.create')}}"><i
                                class="icon-plus"></i>Adicionar
                            produtos</a>
                    </div>

                    <div class="wg-table table-product-list">
                        <ul class="table-title flex gap20 mb-14">
                            <li>
                                <div class="body-title">Produto</div>
                            </li>
                            <li>
                                <div class="body-title">Categoria</div>
                            </li>
                            <li>
                                <div class="body-title">Preço</div>
                            </li>
                            <li>
                                <div class="body-title">Desconto</div>
                            </li>
                            <li>
                                <div class="body-title">Tamanho</div>
                            </li>
                            <li>
                                <div class="body-title">Cor</div>
                            </li>
                            <li>
                                <div class="body-title">Marca</div>
                            </li>
                            <li>
                                <div class="body-title">Action</div>
                            </li>
                        </ul>
                        <ul class="flex flex-column">
                            @forelse ($produtos as $produto)

                                <li class="product-item gap14">
                                    <div class="image no-bg">
                                        @if ($produto['photo'])
                                            <img src="{{asset('storage/uploads/products/' . $produto['photo']['file_name'])}}"
                                                alt="{{$produto->name}}">
                                        @else
                                            <img src="{{asset('storage/uploads/products/')}}" alt="{{$produto->name}}">
                                        @endif
                                    </div>
                                    <div class="flex items-center justify-between gap20 flex-grow">
                                        <div class="name">
                                            <a href="product-list.html" class="body-title-2">
                                                {{$produto->name}}
                                            </a>
                                        </div>
                                        <div class="body-text"> {{$produto['category']['name']}}</div>
                                        <div class="body-text">{{ number_format($produto->price, 2, ',', '.')}} Kz</div>
                                        <div class="body-text">
                                            {{$produto->discount}}
                                        </div>
                                        <div class="body-text">{{$produto['size']['code']}}</div>
                                        <div>
                                            <a href="#" class="btn btn-sm text-white"
                                                style="background:  {{$produto['color']['code']}}">{{$produto['color']['name']}}</a>
                                        </div>
                                        <div class="body-text">{{$produto['brand']['name']}}</div>
                                        <div class="list-icon-function">
                                            <div class="item eye">
                                                <i class="icon-eye"></i>
                                            </div>
                                            <div class="item edit">
                                                <i class="icon-edit-3"></i>
                                            </div>
                                            <div class="item trash">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modalDelete"
                                                    data-id-produto="{{$produto->id}}" class="idProduto" id="{{$produto->id}}">
                                                    <i class="icon-trash-2 text-danger"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @empty

                            @endforelse
                        </ul>
                    </div>

                    <div class="divider"></div>
                    <div class="flex items-center justify-between flex-wrap gap10">
                        <div class="text-tiny">Showing 10 entries</div>
                        <ul class="wg-pagination">
                            <li>
                                <a href="#"><i class="icon-chevron-left"></i></a>
                            </li>
                            <li>
                                <a href="#">1</a>
                            </li>
                            <li class="active">
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon-chevron-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /product-list -->
            </div>
            <!-- /main-content-wrap -->
        </div>
        <!-- /main-content-wrap -->
    </div>
    <x-modal-delete />
@endsection

{{-- Modals --}}

@push('js')
    <script>
        const produto = document.querySelectorAll('.idProduto')

        produto.forEach(element => {
            element.addEventListener('click', () => {

                const idProduto = element.id

                document.querySelector('#idProduto').value = idProduto
                console.log(idProduto)
            })
        });
    </script>

    <script src="{{asset('plugins/sweetalert2/sweetalert2.all.min.js')}}"></script>
    <script src="{{asset('js/functions.js')}}"></script>
@endpush