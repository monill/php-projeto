
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>Geral</h3>
        <ul class="nav side-menu">
            <li><a href="{{ url('/home') }}"><i class="fa fa-home"></i>Home</a></li>
            <li><a href="{{ url('/cotacoes') }}"><i class="fa fa-edit"></i> Orçamentos</a></li>
            <li><a href="{{ url('/empresas') }}"><i class="fa fa-desktop"></i> Empresas</a></li>
            <li><a href="{{ url('/apontamentos/create') }}"><i class="fa fa-table"></i> Adicionar Apontamentos </a></li>
            <li><a href="{{ url('/projetos') }}"><i class="fa fa-bar-chart-o"></i> Projetos</a></li>
        </ul>
    </div>

    <div class="menu_section">
        <h3>Admin</h3>
        <ul class="nav side-menu">
            <li><a href="{{ url('/users') }}"><i class="fa fa-users"></i> Funcionários </a></li>
            <li><a href="{{ url('/cargos') }}"><i class="fa fa-sitemap"></i> Cargos </a></li>
            <li><a href="{{ url('/taxas') }}"><i class="fa fa-area-chart"></i> Taxas </a></li>
        </ul>
    </div>
</div>
