@extends('layouts.app') @section('content') @include('partials.InternalNavpar')
<a href="/" class="re-index">
	<img src="img/arrow-right.png">الرجوع الى الرئيسية</a>
<div class="section-title wow fadeInDown">قوالب Wordpress</div>
<!--section one -->
<section class="template-header">
	<div id="pagina">
		<div class="barra-menu">
			<!-- Boton Desplegar/Replegar menú -->	<a href="#" id="btn-drop" class="btn-menu aln-centro">Navegacion</a>
			<!-- Menú de navegación -->
			<ul id="submenu" class="lista-menu aln-centro">
                <li>
                    <a href="/template"> الكلل  </a>
                </li>
                @foreach ($categoris as $categoris)
				<li>
                    <a  onclick="getDataTemplateCategory('{{$categoris->id}}')">{{$categoris->text_ar}}</a>
                </li>
                @endforeach
            </ul>
		</div>
	</div>
</section>
@include('template.partials.section')
@section('jsCustome')
<script src="asset/js/ajax.js"></script>
@endsection
@endsection
