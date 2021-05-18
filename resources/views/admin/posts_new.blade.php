@extends('layouts.app')

@section('content')
<div class="col-md-9 p-3 p-md-5">
    <div class="row">
        <div class="col-md-12">
            <div class="align-items-md-center d-flex flex-column flex-md-row justify-content-between my-4 my-md-0">
                <h2 class="order-2 order-md-1">Nuevo artículo</h2>
                <a class="order-1 order-md-2" href="blog.php"><button class="btn btn-outline-secondary"><svg class="mr-2" style="margin-bottom:2px"
                            xmlns="http://www.w3.org/2000/svg" width="7" height="10"
                            viewBox="0 0 7.771 11.157">
                            <path id="Icon_awesome-chevron-down" data-name="Icon awesome-chevron-down"
                                d="M5.145.18.18,5.145a.613.613,0,0,0,0,.867l.579.579a.613.613,0,0,0,.866,0L5.578,2.657,9.532,6.592a.613.613,0,0,0,.866,0l.579-.579a.613.613,0,0,0,0-.867L6.012.18A.613.613,0,0,0,5.145.18Z"
                                transform="translate(0 11.157) rotate(-90)" fill="currentColor" />
                        </svg>
                        Volver</button></a>
            </div>
        </div>
    </div>  
    <div class="row mt-4">
        <div class="col-md-8">
            <h5 class="text-marron-claro font-weight-normal mb-2">Título del artículo</h5>
            <input class="form-control form-control-lg rounded-pill" type="text">
            <h5 class="mt-5 text-marron-claro font-weight-normal mb-2">Cuerpo del artículo</h5>
            <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="col-md-4">
            <div class="text-center mt-5 mt-md-0">
                <img class="d-block img-fluid w-100" src="https://via.placeholder.com/150" alt="">
                <button class="btn btn-primary mt-4">Subir imagen</button>
            </div>
        </div>                    
    </div>   
    <hr class="border-marron-claro my-5 mx-0">       
    <div class="row my-4">
        <div class="col-md-12">
            <div class="d-block d-md-flex justify-content-md-end justify-content-center">
                <a href=""><button class="btn btn-outline-primary btn-block">Publicar</button></a>
            </div>
        </div>                  
    </div> 
</div>
@endsection