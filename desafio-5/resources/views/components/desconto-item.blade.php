<li class="{{$extra_class}} desconto-item">
    <figure class="image-contaienr">
        <img src="{{asset('/images/o-made-cozinha.jpg')}}" alt="alt" title="title">
        <span class="percentage">{{$desconto}}%</span>
    </figure>
    <h3 class="subtitle">{{$post_title}}</h3>
    <p class="desc">{{$subtitulo}}</p>

    <a href="{{route('descontos_integra', $slug)}}" class="button">
        <i data-feather="plus"></i>
    </a>
</li>