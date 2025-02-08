@extends('templates.layout')
@section('halaman_judul','halaman index')
@section('css')
 <style>
     .card-header{
         color:blue;
         background-color: greenyellow;
     }
     .card-body{
         color:maroon;
         background-color: silver;
     }
     </style>
@endsection
@section('kontent')


       
<h1 class="h3 mb-1 text-gray-800">Ini Halaman Index</h1>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                Belajar Halaman Extending Layout di Laravel   
            </div>
            
            <div class="card-body">

<h6>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam velit distinctio veritatis veniam cumque explicabo assumenda qui possimus voluptates in porro consequuntur obcaecati saepe, dolor recusandae similique deserunt iusto, voluptate beatae amet? Porro modi exercitationem inventore. Inventore aperiam repellat magnam facere fuga esse repudiandae voluptatem accusamus hic vitae incidunt autem saepe, vero odio doloribus! Earum doloribus voluptas quo deleniti sapiente, consequatur corporis laboriosam necessitatibus, velit libero inventore, corrupti illum laudantium similique? Natus ratione ipsum, laudantium accusamus velit totam unde aperiam praesentium libero minima possimus repellat alias facere magnam modi dolor saepe? Omnis, atque ipsam mollitia repellendus beatae pariatur velit totam.</>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    alert('YAHAHAHAAHHAHAHAHHAHHAHAHAHAHAHAHA');
</script>
@endsection