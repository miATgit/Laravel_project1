<li class="nav-item">
    <a class="nav-link {{request()->routeIs('index')?'active':''}}"
       aria-current="page" href="{{@route('index')}}">Главная</a>
</li>
<li class="nav-item"><a class="nav-link {{request()->routeIs('about')?'active':''}}"
                        href="{{route('about')}}">О&nbspнас</a></li>
<li class="nav-item dropdown show">

    <a class="nav-link dropdown-toggle" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Новости</a>
    <div class="dropdown-menu" aria-labelledby="dropdown01">
        <a class="dropdown-item {{request()->routeIs('news')?'active':''}}"
           href="{{@route('news')}}">Новости</a>
        <a class="dropdown-item" href="{{@route('category.index')}}">Категории</a>
    </div>
</li>
<li class="nav-item"> <a class="nav-link {{request()->routeIs('contacts')?'active':''}}"
                         href="{{route('contacts')}}" >Контакты</a></li>
<li class="nav-item">
    <a class="nav-link {{request()->routeIs('admin.index')?'active':''}}"
       href="{{@route('admin.index')}}" >Админка</a>
</li>
<div class="container">
<form class="d-flex" action="{{route('news.search')}}" method="GET">
    <input class="form-control mr-sm-2" type="search" name="query" id="query" value="{{request()->input('query')}}" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
</div>



