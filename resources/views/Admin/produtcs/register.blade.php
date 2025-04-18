@extends('layouts.admin.dashboard')

@section('title', 'Adicionar Produtos')

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
                    <h3>Adicionar produtos</h3>
                    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                        <li>
                            <a href="/">
                                <div class="text-tiny">Dashboard</div>
                            </a>
                        </li>
                        <li>
                            <i class="icon-chevron-right"></i>
                        </li>
                        <li>
                            <a href="/">
                                <div class="text-tiny">Loja</div>
                            </a>
                        </li>
                        <li>
                            <i class="icon-chevron-right"></i>
                        </li>
                        <li>
                            <div class="text-tiny">Add produtos</div>
                        </li>
                    </ul>
                </div>
                <!-- form-add-product -->

                <form action="{{route('product.store')}}" method="POST" class="tf-section-2 form-add-product"
                    id="postAction" enctype="multipart/form-data">
                    @csrf

                    <div class="wg-box">
                        <fieldset class="name">
                            <div class="body-title mb-10">Nome do produto <span class="tf-color-1">*</span></div>
                            <input class="mb-10" type="text" placeholder="Informe o nome do produto" name="name"
                                tabindex="0" value="{{old('name')}}" aria-required="true" required maxlength="50"
                                minlength="5">
                            <div class="text-tiny">O nome do produto não pode exceder dos 50 caracteres</div>
                        </fieldset>
                        <div class="gap22 cols">
                            <fieldset class="category">
                                <div class="body-title mb-10">Categoria <span class="tf-color-1">*</span></div>
                                <div class="select">
                                    <select class="" name="id_category">
                                        <option selected>Escolha a categoria</option>
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </fieldset>
                            <fieldset class="subcategory">
                                <div class="body-title mb-10">Sub-Categoria <span class="tf-color-1">*</span></div>
                                <div class="select">
                                    <select class="" name="id_subcategory">
                                        <option selected>Escolha a Subcategoria</option>
                                        @foreach ($subcategories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </fieldset>
                            <fieldset class="male">
                                <div class="body-title mb-10">Gênero <span class="tf-color-1">*</span></div>
                                <div class="select">
                                    <select class="" name="id_gender">
                                        <option selected>Selecione o Gênero</option>
                                        @foreach ($genders as $gender)
                                            <option value="{{$gender->id}}">{{$gender->gender}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </fieldset>
                        </div>

                        <div class="gap22 cols">
                            <fieldset class="brand">
                                <div class="body-title mb-10">Marca <span class="tf-color-1">*</span></div>
                                <div class="select">
                                    <select class="" name="id_brand">
                                        <option selected>Escolha a Marca</option>
                                        @foreach ($brands as $brand)
                                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </fieldset>
                            <fieldset class="old">
                                <div class="body-title mb-10">Idade <span class="tf-color-1">*</span></div>
                                <div class="select">
                                    <select class="" name="id_old">
                                        <option selected>Escolha a Idade</option>
                                        @foreach ($olds as $old)
                                            <option value="{{$old->id}}">{{$old->old}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </fieldset>

                            <fieldset class="color">
                                <div class="body-title mb-10">Cor <span class="tf-color-1">*</span></div>
                                <div class="select">
                                    <select class="" name="id_color">
                                        <option selected>Esclha uma cor</option>
                                        @foreach ($colors as $color)
                                            <option value="{{$color->id}}">
                                                <span class="background: {{$color->code}}; color: #fff;">{{$color->name}}</span>

                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </fieldset>

                        </div>
                        <fieldset class="description">
                            <div class="body-title mb-10">Descrição <span class="tf-color-1">*</span></div>
                            <textarea class="mb-10" name="description" placeholder="Description" tabindex="0"
                                aria-required="true" required=""></textarea>
                            <div class="text-tiny">A descrição não pode exceder dos 500 cacateres.</div>
                        </fieldset>
                    </div>
                    <div class="wg-box">
                        <fieldset>
                            <div class="body-title mb-10">Carregar Foto do Produto</div>
                            <div class="upload-image mb-16">
                                <div class="item">
                                    <img src="{{asset('dashboard/images/upload/upload-2.png')}}" alt="">
                                </div>
                                <div class="item">
                                    <img src="{{asset('dashboard/images/upload/upload-2.png')}}" alt="">
                                </div>
                                <div class="item up-load">
                                    <label class="uploadfile" for="myFile">
                                        <span class="icon">
                                            <i class="icon-upload-cloud"></i>
                                        </span>
                                        <span class="text-tiny">Arraste ou cole suas imagens aqui <span
                                                class="tf-color">Clique para selecionar</span></span>
                                        <input type="file" id="myFile" name="file_name">
                                    </label>
                                </div>
                            </div>
                            <div class="body-text">You need to add at least 4 images. Pay attention to the quality of the
                                pictures you add, comply with the background color standards. Pictures must be in certain
                                dimensions. Notice that the product shows all the details</div>
                        </fieldset>
                        <div class="cols gap22">
                            <fieldset class="size">
                                <div class="body-title mb-10">Adicionar tamanho</div>
                                <div class="select mb-10">
                                    <select class="" name="id_size">
                                        <option selected>Escolha um Tamanho</option>
                                        @foreach ($sizes as $size)
                                            <option value="{{$size->id}}">{{$size->name}} - {{$size->code}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </fieldset>
                            <fieldset class="name">
                                <div class="body-title mb-10">Preço</div>
                                <div class="select">
                                    <input type="number" name="price" placeholder="Preço do produto">
                                </div>
                            </fieldset>
                            <fieldset class="name">
                                <div class="body-title mb-10">Desconto</div>
                                <div class="name">
                                    <input type="number" name="discount" placeholder="Desconto do produto">
                                </div>
                            </fieldset>
                        </div>
                        <div class="cols gap10">
                            <button class="tf-button w-full" type="submit">Add product</button>
                            <button class="tf-button style-1 w-full" type="submit">Save product</button>
                            <a href="#" class="tf-button style-2 w-full">Schedule</a>
                        </div>
                    </div>
                </form>
                <!-- /form-add-product -->
            </div>
            <!-- /main-content-wrap -->
        </div>
        <!-- /main-content-wrap -->
        <!-- bottom-page -->
        <div class="bottom-page">
            <div class="body-text">Copyright © 2024 Remos. Design with</div>
            <i class="icon-heart"></i>
            <div class="body-text">by <a href="https://themeforest.net/user/themesflat/portfolio">Themesflat</a> All rights
                reserved.</div>
        </div>
        <!-- /bottom-page -->
    </div>
@endsection

@push('js')
    <script src="{{asset('plugins/sweetalert2/sweetalert2.all.min.js')}}"></script>
    <script src="{{asset('js/functions.js')}}"></script>
@endpush