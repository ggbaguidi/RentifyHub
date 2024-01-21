
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">Guy Ahonakpon GBAGUIDI</p>
          <p class="app-sidebar__user-designation">SOFTWARE ENGINEER</p>
        </div>
      </div>
      <ul class="app-menu">

        <li class="treeview is-expanded"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Marques</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item active" href=" {{route('marques.index')}} "><i class="icon fa fa-circle-o"></i>Liste des marques</a></li>
            <li><a class="treeview-item" href="{{route('marques.create')}}"><i class="icon fa fa-circle-o"></i>Ajouter une nouvelle</a></li>
          </ul>
        </li>

        <li class="treeview is-expanded"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Catégories</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item active" href="{{route('categories.index')}}"><i class="icon fa fa-circle-o"></i>Liste des catégories</a></li>

            <li><a class="treeview-item" href="{{route('categories.create')}}"><i class="icon fa fa-circle-o"></i>Ajouter une nouvelle</a></li>
          </ul>
        </li>

        <li class="treeview is-expanded"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Véhicules</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            
        <li><a class="app-menu__item" href=" {{route('cars.index')}} "><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Liste des véhicules</span></a></li>      
    
      <li><a class="app-menu__item" href=" {{route('cars.create')}} "><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Ajouter un nouveau</span></a></li>      
    
          </ul>
        </li> 
        
        <li><a class="app-menu__item" href=" {{route('location.index')}} "><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Personnes Ayant <br> Loué Voiture</span></a></li>      

        </ul>
    </aside>

